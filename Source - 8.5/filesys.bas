Attribute VB_Name = "filesys"
Option Explicit

Private Const MAX_PATH = 260
Private Const FILE_ATTRIBUTE_DIRECTORY = &H10
Private Const FILE_ATTRIBUTE_SYSTEM = &H4
Private Const FILE_ATTRIBUTE_HIDDEN = &H2
Private Const FILE_ATTRIBUTE_READONLY = &H1
Private Const ERROR_NO_MORE_FILES = 18&

Private Type FILETIME
    dwLowDateTime As Long
    dwHighDateTime As Long
End Type

Private Type WIN32_FIND_DATA
    dwFileAttributes As Long
    ftCreationTime As FILETIME
    ftLastAccessTime As FILETIME
    ftLastWriteTime As FILETIME
    nFileSizeHigh As Long
    nFileSizeLow As Long
    dwReserved0 As Long
    dwReserved1 As Long
    cFileName As String * MAX_PATH
    cAlternate As String * 14
End Type

Private Declare Function FindFirstFile Lib "kernel32" _
   Alias "FindFirstFileA" (ByVal lpFileName As String, _
   lpFindFileData As WIN32_FIND_DATA) As Long
   
Private Declare Function FindNextFile Lib "kernel32" Alias _
   "FindNextFileA" (ByVal hFindFile As Long, _
   lpFindFileData As WIN32_FIND_DATA) As Long

Private Declare Function FindClose Lib "kernel32" _
   (ByVal hFindFile As Long) As Long
   
   Public Function AllFiles(ByVal DirPath As String) As String()
'***************************************************
'PURPOSE: RETURN AN ARRAY CONTAINING NAME OF ALL FILES IN
'DIRECTORY SPECIFIED BY DIR PATH

'PARAMETER:

  'DIRPATH: A VALID DRIVE OR SUBDIRECTORY ON YOUR SYSTEM,
  'ENDING WITH FORWARD SLASH (\) CHARACTER, OR
  'A DRIVE OR SUBDIRECTORY FOLLOWED BY A WILD CARD
  'STRING (e.g., C:\WINDOWS\*.txt)

'RETURNS: A STRING ARRAY WITH THE NAMES OF ALL FILENAMES
'IN THE DIRECTORY, INCLUDING HIDDEN, SYSTEM, AND READ-ONLY FILES
'THE FUNCTION IS NON RECURSIVE, I.E., IT DOES NOT SEARCH
'SUBDIRECTORIES UNDERNEATH DIRPATH

'REQUIRES: VB6, BECAUSE IT RETURNS A STRING ARRAY

'EXAMPLE
'Dim sFiles() As String
'Dim lCtr As Long

'sFiles = AllFiles("C:\windows\")
'For lCtr = 0 To UBound(sFiles)
'    Debug.Print sFiles(lCtr)
'Next
'********************************************************

Dim sFile As String
Dim lElement As Long
Dim sAns() As String
ReDim sAns(0) As String

sFile = Dir(DirPath, vbNormal + vbHidden + vbReadOnly + _
   vbSystem + vbArchive)
If sFile <> "" Then
sAns(0) = sFile
    Do
        sFile = Dir
        If sFile = "" Then Exit Do
        lElement = IIf(sAns(0) = "", 0, UBound(sAns) + 1)
        ReDim Preserve sAns(lElement) As String
        sAns(lElement) = sFile
    Loop
End If
AllFiles = sAns
End Function

Public Function APIAllFiles(ByVal DirPath As String) As String()
'***************************************************
'SEE COMMENTS FOR ALLFILES.  PURPOSE AND INSTRUCTIONS ARE
'EXACTLY THE SAME, EXCEPT THIS FILE USES THE WIN32 API
'***************************************************

Dim sFile As String
Dim lElement As Long
Dim sAns() As String
Dim lFirstRet As Long, lNextRet
Dim typFindData As WIN32_FIND_DATA
Dim sTemp As String
Dim lAttr As Long

ReDim sAns(0) As String

If Right(DirPath, 1) = "\" Then DirPath = DirPath & "*.*"

'Get First File
lFirstRet = FindFirstFile(DirPath, typFindData)
If lFirstRet <> -1 Then
    lAttr = typFindData.dwFileAttributes

    'Check if this is a directory.  This is probably slowing down
    'the function.  If you know you won't have subdirectories,
    'or you want to include directories, delete this check

    If Not isDirectory(lAttr) Then

        'strip null terminator
       sAns(0) = StripNull(typFindData.cFileName)
    End If
    
    'Continue searching until all files in directory are found
    Do
        lNextRet = FindNextFile(lFirstRet, typFindData)
        If lNextRet = ERROR_NO_MORE_FILES Or _
           lNextRet = 0 Then Exit Do
        lAttr = typFindData.dwFileAttributes
            'Again, check if its a subdirectory
            If Not isDirectory(lAttr) Then
                lElement = IIf(sAns(0) = "", 0, UBound(sAns) + 1)
                ReDim Preserve sAns(lElement) As String
                sAns(lElement) = StripNull(typFindData.cFileName)
            End If
    Loop
End If

FindClose lFirstRet
APIAllFiles = sAns

End Function

Private Function StripNull(ByVal InString As String) As String

'Input: String containing null terminator (Chr(0))
'Returns: all character before the null terminator

Dim iNull As Integer
If Len(InString) > 0 Then
    iNull = InStr(InString, vbNullChar)
    Select Case iNull
    Case 0
        StripNull = InString
    Case 1
        StripNull = ""
    Case Else
       StripNull = Left$(InString, iNull - 1)
   End Select
End If

End Function

Public Function isDirectory(FileAttr As Long) As Boolean

Dim bAns As Boolean
Dim lDir As Long
Dim lHidden As Long
Dim lSystem As Long
Dim lReadOnly As Long

lDir = FILE_ATTRIBUTE_DIRECTORY
lHidden = FILE_ATTRIBUTE_HIDDEN
lSystem = FILE_ATTRIBUTE_SYSTEM
lReadOnly = FILE_ATTRIBUTE_READONLY
    
isDirectory = FileAttr = lDir Or FileAttr = _
    lDir + lHidden Or FileAttr = lDir + lSystem _
    Or FileAttr = lDir + lReadOnly Or FileAttr = _
    lDir + lHidden + lSystem Or FileAttr = _
    lDir + lHidden + lReadOnly Or FileAttr = _
    lDir + lSystem + lReadOnly Or _
    FileAttr = lDir + lSystem + lHidden + lReadOnly

End Function

