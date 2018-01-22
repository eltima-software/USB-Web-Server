Attribute VB_Name = "functies"



Private Declare Function ShellExecute Lib _
    "shell32.dll" Alias "ShellExecuteA" _
    (ByVal hwnd As Long, _
    ByVal lpOperation As String, _
    ByVal lpFile As String, _
    ByVal lpParameters As String, _
    ByVal lpDirectory As String, _
    ByVal nShowCmd As Long) As Long



Private Const SW_SHOWNORMAL = 1

Function browse(url)
Dim iret As Long
    iret = ShellExecute(Form1.hwnd, _
        vbNullString, _
        url, _
        vbNullString, _
        "c:\", _
        SW_SHOWNORMAL)

End Function

Function IsProcessRunning(strProcess)
    Dim Process, strObject
    IsProcessRunning = False
    strObject = "winmgmts://127.0.0.1"
    For Each Process In GetObject(strObject).InstancesOf("win32_process")
    If UCase(Process.Name) = UCase(strProcess) Then
            IsProcessRunning = True
            Exit Function
        End If
    Next
End Function
