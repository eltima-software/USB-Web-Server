VERSION 5.00
Begin VB.Form form1 
   BorderStyle     =   0  'None
   Caption         =   "USBWebserver"
   ClientHeight    =   10410
   ClientLeft      =   0
   ClientTop       =   0
   ClientWidth     =   12270
   Icon            =   "Form1.frx":0000
   LinkTopic       =   "Form1"
   MousePointer    =   99  'Custom
   ScaleHeight     =   10410
   ScaleWidth      =   12270
   StartUpPosition =   3  'Windows Default
   Begin VB.Timer Timer1 
      Interval        =   4000
      Left            =   11520
      Top             =   3960
   End
   Begin VB.Frame frm_over 
      BackColor       =   &H00FFFFFF&
      BorderStyle     =   0  'None
      Caption         =   "Frame1"
      ForeColor       =   &H00FFFFFF&
      Height          =   2875
      Left            =   5640
      TabIndex        =   13
      Top             =   6960
      Width           =   5330
      Begin VB.Label lbl_version 
         BackColor       =   &H00FFFFFF&
         Caption         =   "8.5"
         BeginProperty Font 
            Name            =   "Arial Narrow"
            Size            =   24
            Charset         =   0
            Weight          =   400
            Underline       =   0   'False
            Italic          =   0   'False
            Strikethrough   =   0   'False
         EndProperty
         ForeColor       =   &H00582D02&
         Height          =   615
         Left            =   4200
         TabIndex        =   38
         Top             =   450
         Width           =   975
      End
      Begin VB.Label About_caption 
         BackStyle       =   0  'Transparent
         Caption         =   "USBWebserver is een product van Border-IT"
         ForeColor       =   &H00444343&
         Height          =   1095
         Left            =   600
         TabIndex        =   35
         Top             =   1200
         Width           =   3255
      End
      Begin VB.Image Image6 
         Height          =   705
         Left            =   600
         Picture         =   "Form1.frx":3A72
         Top             =   360
         Width           =   4140
      End
      Begin VB.Label Label5 
         BackStyle       =   0  'Transparent
         Caption         =   "www.UsbWebserver.com"
         ForeColor       =   &H8000000A&
         Height          =   255
         Left            =   1440
         TabIndex        =   14
         Top             =   2640
         Width           =   1935
      End
   End
   Begin VB.Frame frm_instellingen 
      BackColor       =   &H00FFFFFF&
      BorderStyle     =   0  'None
      Caption         =   "Frame1"
      ForeColor       =   &H00FFFFFF&
      Height          =   2875
      Left            =   120
      TabIndex        =   11
      Top             =   6960
      Width           =   5330
      Begin VB.Frame lng_frm 
         BackColor       =   &H00FFFFFF&
         BorderStyle     =   0  'None
         Caption         =   "Frame1"
         Height          =   255
         Left            =   1215
         TabIndex        =   36
         Top             =   465
         Visible         =   0   'False
         Width           =   1455
         Begin VB.Label lng_in 
            Appearance      =   0  'Flat
            BackColor       =   &H00FFFFFF&
            BorderStyle     =   1  'Fixed Single
            Caption         =   "English"
            ForeColor       =   &H80000008&
            Height          =   255
            Index           =   0
            Left            =   0
            TabIndex        =   37
            Top             =   0
            Width           =   1455
         End
      End
      Begin VB.TextBox lng_lan 
         Appearance      =   0  'Flat
         BorderStyle     =   0  'None
         Enabled         =   0   'False
         Height          =   210
         Left            =   1280
         TabIndex        =   31
         Text            =   "Nederlands"
         Top             =   255
         Width           =   1320
      End
      Begin VB.TextBox set_root 
         Appearance      =   0  'Flat
         BorderStyle     =   0  'None
         Height          =   210
         Left            =   1240
         TabIndex        =   19
         Text            =   "Root map"
         Top             =   1465
         Width           =   1680
      End
      Begin VB.TextBox set_apache 
         Appearance      =   0  'Flat
         BorderStyle     =   0  'None
         Height          =   210
         Left            =   1245
         TabIndex        =   28
         Text            =   "8080"
         Top             =   1830
         Width           =   1680
      End
      Begin VB.TextBox set_mysql 
         Appearance      =   0  'Flat
         BorderStyle     =   0  'None
         Height          =   210
         Left            =   1245
         TabIndex        =   27
         Text            =   "3307"
         Top             =   2190
         Width           =   1680
      End
      Begin VB.Label Label15 
         Alignment       =   2  'Center
         BackStyle       =   0  'Transparent
         Caption         =   "Opslaan"
         ForeColor       =   &H00FFFFFF&
         Height          =   255
         Left            =   3840
         TabIndex        =   34
         Top             =   2090
         Width           =   1095
      End
      Begin VB.Image Image17 
         Height          =   255
         Left            =   1200
         Picture         =   "Form1.frx":9CAE
         Top             =   225
         Width           =   1740
      End
      Begin VB.Label Label6 
         BackStyle       =   0  'Transparent
         Caption         =   "Open localhost na starten"
         ForeColor       =   &H00202020&
         Height          =   255
         Left            =   360
         TabIndex        =   30
         Top             =   720
         Width           =   3135
      End
      Begin VB.Label hide_caption 
         BackStyle       =   0  'Transparent
         Caption         =   "Verberg bij het opstarten"
         ForeColor       =   &H00202020&
         Height          =   255
         Left            =   360
         TabIndex        =   29
         Top             =   960
         Width           =   4455
      End
      Begin VB.Image novink_local 
         Height          =   180
         Left            =   120
         Picture         =   "Form1.frx":D010
         Top             =   720
         Width           =   165
      End
      Begin VB.Image vink_local 
         Height          =   180
         Left            =   120
         Picture         =   "Form1.frx":FD06
         Top             =   720
         Width           =   165
      End
      Begin VB.Image novink_hide 
         Height          =   180
         Left            =   120
         Picture         =   "Form1.frx":12A8E
         Top             =   960
         Width           =   165
      End
      Begin VB.Image vink_hide 
         Height          =   180
         Left            =   120
         Picture         =   "Form1.frx":15784
         Top             =   960
         Width           =   165
      End
      Begin VB.Image Image11 
         Height          =   405
         Left            =   3840
         Picture         =   "Form1.frx":1850C
         Top             =   2010
         Width           =   1095
      End
      Begin VB.Image Image8 
         Height          =   255
         Left            =   1200
         Picture         =   "Form1.frx":1A0E5
         Top             =   1800
         Width           =   1740
      End
      Begin VB.Image Image10 
         Height          =   255
         Left            =   1200
         Picture         =   "Form1.frx":1D3B3
         Top             =   2160
         Width           =   1740
      End
      Begin VB.Image Image7 
         Height          =   255
         Left            =   1200
         Picture         =   "Form1.frx":20681
         Top             =   1440
         Width           =   1740
      End
      Begin VB.Label Label12 
         BackStyle       =   0  'Transparent
         Caption         =   "Taal"
         ForeColor       =   &H00202020&
         Height          =   255
         Left            =   120
         TabIndex        =   23
         Top             =   240
         Width           =   1095
      End
      Begin VB.Label Label11 
         BackStyle       =   0  'Transparent
         Caption         =   "Root map"
         ForeColor       =   &H00202020&
         Height          =   255
         Left            =   120
         TabIndex        =   22
         Top             =   1450
         Width           =   855
      End
      Begin VB.Label Label10 
         BackStyle       =   0  'Transparent
         Caption         =   "Poort MySQL"
         ForeColor       =   &H00202020&
         Height          =   255
         Left            =   120
         TabIndex        =   21
         Top             =   2190
         Width           =   1215
      End
      Begin VB.Label Label8 
         BackStyle       =   0  'Transparent
         Caption         =   "Poort apache"
         ForeColor       =   &H00202020&
         Height          =   255
         Left            =   120
         TabIndex        =   20
         Top             =   1810
         Width           =   975
      End
      Begin VB.Label Label4 
         BackStyle       =   0  'Transparent
         Caption         =   "www.UsbWebserver.com"
         ForeColor       =   &H8000000A&
         Height          =   255
         Left            =   1440
         TabIndex        =   12
         Top             =   2640
         Width           =   1935
      End
   End
   Begin VB.Frame frm_apache 
      BackColor       =   &H00FFFFFF&
      BorderStyle     =   0  'None
      Caption         =   "Frame1"
      ForeColor       =   &H00FFFFFF&
      Height          =   2875
      Left            =   120
      TabIndex        =   9
      Top             =   3960
      Width           =   5330
      Begin VB.Label apache_but_stat 
         Alignment       =   2  'Center
         BackStyle       =   0  'Transparent
         Caption         =   "...."
         ForeColor       =   &H00FFFFFF&
         Height          =   255
         Left            =   480
         TabIndex        =   32
         Top             =   1050
         Width           =   1080
      End
      Begin VB.Image apache_start 
         Height          =   405
         Left            =   480
         Picture         =   "Form1.frx":2394F
         Top             =   960
         Visible         =   0   'False
         Width           =   1095
      End
      Begin VB.Image apache_stop 
         Height          =   405
         Left            =   480
         Picture         =   "Form1.frx":25528
         Top             =   960
         Visible         =   0   'False
         Width           =   1095
      End
      Begin VB.Label Label14 
         BackStyle       =   0  'Transparent
         Caption         =   "Instellingen"
         ForeColor       =   &H00444343&
         Height          =   255
         Left            =   3720
         TabIndex        =   25
         Top             =   2160
         Width           =   1215
      End
      Begin VB.Label Label13 
         BackStyle       =   0  'Transparent
         Caption         =   "Logboeken"
         ForeColor       =   &H00444343&
         Height          =   255
         Left            =   480
         TabIndex        =   24
         Top             =   2160
         Width           =   855
      End
      Begin VB.Line Line1 
         BorderColor     =   &H00E0E0E0&
         X1              =   0
         X2              =   5280
         Y1              =   2040
         Y2              =   2040
      End
      Begin VB.Image Image4 
         Height          =   2010
         Left            =   3120
         Picture         =   "Form1.frx":2712D
         Top             =   0
         Width           =   2250
      End
      Begin VB.Label lbl_status_apache 
         BackStyle       =   0  'Transparent
         Caption         =   "Opstarten..."
         BeginProperty Font 
            Name            =   "MS Sans Serif"
            Size            =   8.25
            Charset         =   0
            Weight          =   700
            Underline       =   0   'False
            Italic          =   0   'False
            Strikethrough   =   0   'False
         EndProperty
         ForeColor       =   &H000080FF&
         Height          =   255
         Left            =   1080
         TabIndex        =   16
         Top             =   240
         Width           =   1215
      End
      Begin VB.Label Label7 
         BackStyle       =   0  'Transparent
         Caption         =   "Status"
         ForeColor       =   &H00444343&
         Height          =   255
         Left            =   480
         TabIndex        =   15
         Top             =   240
         Width           =   615
      End
      Begin VB.Label Label3 
         BackStyle       =   0  'Transparent
         Caption         =   "www.UsbWebserver.com"
         ForeColor       =   &H8000000A&
         Height          =   255
         Left            =   1440
         TabIndex        =   10
         Top             =   2640
         Width           =   1935
      End
      Begin VB.Image apache_yellow 
         Height          =   405
         Left            =   480
         Picture         =   "Form1.frx":27A25
         Top             =   960
         Width           =   1095
      End
   End
   Begin VB.Frame frm_mysql 
      BackColor       =   &H00FFFFFF&
      BorderStyle     =   0  'None
      Caption         =   "Frame1"
      ForeColor       =   &H00FFFFFF&
      Height          =   2875
      Left            =   5640
      TabIndex        =   7
      Top             =   3960
      Width           =   5330
      Begin VB.Label mysql_but_stat 
         Alignment       =   2  'Center
         BackStyle       =   0  'Transparent
         Caption         =   "...."
         ForeColor       =   &H00FFFFFF&
         Height          =   255
         Left            =   480
         TabIndex        =   33
         Top             =   1050
         Width           =   1080
      End
      Begin VB.Image mysql_start 
         Height          =   405
         Left            =   480
         Picture         =   "Form1.frx":2A7BE
         Top             =   960
         Visible         =   0   'False
         Width           =   1095
      End
      Begin VB.Image mysql_stop 
         Height          =   405
         Left            =   480
         Picture         =   "Form1.frx":2C397
         Top             =   960
         Visible         =   0   'False
         Width           =   1095
      End
      Begin VB.Label Label16 
         BackStyle       =   0  'Transparent
         Caption         =   "Instellingen"
         ForeColor       =   &H00444343&
         Height          =   255
         Left            =   3720
         TabIndex        =   26
         Top             =   2160
         Width           =   1215
      End
      Begin VB.Line Line2 
         BorderColor     =   &H00E0E0E0&
         X1              =   -120
         X2              =   5160
         Y1              =   2040
         Y2              =   2040
      End
      Begin VB.Image Image5 
         Height          =   1695
         Left            =   2760
         Picture         =   "Form1.frx":2DF9C
         Top             =   240
         Width           =   2325
      End
      Begin VB.Label Label9 
         BackStyle       =   0  'Transparent
         Caption         =   "Status"
         ForeColor       =   &H00444343&
         Height          =   255
         Left            =   480
         TabIndex        =   18
         Top             =   240
         Width           =   615
      End
      Begin VB.Label lbl_status_mysql 
         BackStyle       =   0  'Transparent
         Caption         =   "Opstarten..."
         BeginProperty Font 
            Name            =   "MS Sans Serif"
            Size            =   8.25
            Charset         =   0
            Weight          =   700
            Underline       =   0   'False
            Italic          =   0   'False
            Strikethrough   =   0   'False
         EndProperty
         ForeColor       =   &H000080FF&
         Height          =   255
         Left            =   1080
         TabIndex        =   17
         Top             =   240
         Width           =   1215
      End
      Begin VB.Label Label2 
         BackStyle       =   0  'Transparent
         Caption         =   "www.UsbWebserver.com"
         ForeColor       =   &H8000000A&
         Height          =   255
         Left            =   1440
         TabIndex        =   8
         Top             =   2640
         Width           =   1935
      End
      Begin VB.Image mysql_yellow 
         Height          =   405
         Left            =   480
         Picture         =   "Form1.frx":2EB96
         Top             =   960
         Width           =   1095
      End
   End
   Begin VB.Frame frm_alg 
      BackColor       =   &H00FFFFFF&
      BorderStyle     =   0  'None
      Caption         =   "Frame1"
      ForeColor       =   &H00FFFFFF&
      Height          =   2875
      Left            =   150
      TabIndex        =   0
      Top             =   720
      Width           =   5330
      Begin VB.Image Image16 
         Height          =   405
         Left            =   240
         Picture         =   "Form1.frx":3192F
         Top             =   1800
         Width           =   2400
      End
      Begin VB.Image Image15 
         Height          =   405
         Left            =   240
         Picture         =   "Form1.frx":35CBF
         Top             =   360
         Width           =   1095
      End
      Begin VB.Image Image14 
         Height          =   405
         Left            =   240
         Picture         =   "Form1.frx":39011
         Top             =   1320
         Width           =   1485
      End
      Begin VB.Image Image13 
         Height          =   405
         Left            =   240
         Picture         =   "Form1.frx":3C66F
         Top             =   840
         Width           =   1185
      End
      Begin VB.Image Image12 
         Height          =   1440
         Left            =   3240
         Picture         =   "Form1.frx":3FAFC
         Top             =   720
         Width           =   1695
      End
      Begin VB.Label Label1 
         BackStyle       =   0  'Transparent
         Caption         =   "www.UsbWebserver.com"
         ForeColor       =   &H8000000A&
         Height          =   255
         Left            =   1440
         TabIndex        =   1
         Top             =   2640
         Width           =   1935
      End
   End
   Begin VB.Image status_mysql 
      Height          =   210
      Left            =   6960
      Top             =   2040
      Width           =   210
   End
   Begin VB.Image status_apache 
      Height          =   210
      Left            =   6960
      Top             =   1440
      Width           =   210
   End
   Begin VB.Image status_red 
      Height          =   210
      Left            =   11520
      Picture         =   "Form1.frx":4317F
      Top             =   5040
      Width           =   210
   End
   Begin VB.Image status_green 
      Height          =   210
      Left            =   11520
      Picture         =   "Form1.frx":433CE
      Top             =   4680
      Width           =   210
   End
   Begin VB.Image sys_offline 
      Height          =   240
      Left            =   11520
      Picture         =   "Form1.frx":437B8
      Top             =   6240
      Width           =   240
   End
   Begin VB.Image sys_online 
      Height          =   240
      Left            =   11520
      Picture         =   "Form1.frx":53F1E
      Top             =   5760
      Width           =   240
   End
   Begin VB.Label lay_menu_over 
      AutoSize        =   -1  'True
      BackStyle       =   0  'Transparent
      Caption         =   "Over"
      ForeColor       =   &H00FFFFFF&
      Height          =   195
      Left            =   6120
      TabIndex        =   6
      Top             =   3240
      Width           =   345
   End
   Begin VB.Label lay_menu_inst 
      AutoSize        =   -1  'True
      BackStyle       =   0  'Transparent
      Caption         =   "Instellingen"
      ForeColor       =   &H00FFFFFF&
      Height          =   195
      Left            =   6120
      TabIndex        =   5
      Top             =   2640
      Width           =   795
   End
   Begin VB.Label lay_menu_mysql 
      AutoSize        =   -1  'True
      BackStyle       =   0  'Transparent
      Caption         =   "Mysql"
      ForeColor       =   &H00FFFFFF&
      Height          =   195
      Left            =   6120
      TabIndex        =   4
      Top             =   2040
      Width           =   405
   End
   Begin VB.Label lay_menu_apache 
      AutoSize        =   -1  'True
      BackStyle       =   0  'Transparent
      Caption         =   "Apache"
      ForeColor       =   &H00FFFFFF&
      Height          =   195
      Left            =   6120
      TabIndex        =   3
      Top             =   1440
      Width           =   555
   End
   Begin VB.Label lay_menu_alg 
      AutoSize        =   -1  'True
      BackStyle       =   0  'Transparent
      Caption         =   "Algemeen"
      Height          =   195
      Left            =   6120
      MousePointer    =   99  'Custom
      TabIndex        =   2
      Top             =   885
      Width           =   705
   End
   Begin VB.Image img_menu_1 
      Height          =   570
      Left            =   9840
      Picture         =   "Form1.frx":57990
      Top             =   240
      Width           =   1875
   End
   Begin VB.Image img_menu_2 
      Height          =   570
      Left            =   9840
      Picture         =   "Form1.frx":5A7F3
      Top             =   825
      Width           =   1875
   End
   Begin VB.Image img_menu_3 
      Height          =   570
      Left            =   9840
      Picture         =   "Form1.frx":5D601
      Top             =   1410
      Width           =   1875
   End
   Begin VB.Image img_menu_4 
      Height          =   570
      Left            =   9840
      Picture         =   "Form1.frx":6040C
      Top             =   2010
      Width           =   1875
   End
   Begin VB.Image img_menu_5 
      Height          =   570
      Left            =   9840
      Picture         =   "Form1.frx":63234
      Top             =   2595
      Width           =   1875
   End
   Begin VB.Image img_menu_mouseover 
      Height          =   570
      Left            =   7920
      Picture         =   "Form1.frx":65FCF
      Top             =   240
      Width           =   1875
   End
   Begin VB.Image Image9 
      Height          =   225
      Left            =   6600
      Picture         =   "Form1.frx":68E60
      Top             =   120
      Width           =   225
   End
   Begin VB.Image lay_menu5 
      Height          =   570
      Left            =   5490
      Picture         =   "Form1.frx":6A9C4
      Top             =   3045
      Width           =   1875
   End
   Begin VB.Image lay_menu4 
      Height          =   570
      Left            =   5490
      Picture         =   "Form1.frx":6D75F
      Top             =   2460
      Width           =   1875
   End
   Begin VB.Image lay_menu3 
      Height          =   570
      Left            =   5490
      Picture         =   "Form1.frx":70587
      Top             =   1875
      Width           =   1875
   End
   Begin VB.Image lay_menu2 
      Height          =   570
      Left            =   5490
      Picture         =   "Form1.frx":73392
      Top             =   1290
      Width           =   1875
   End
   Begin VB.Image lay_menu1 
      Height          =   570
      Left            =   5490
      Picture         =   "Form1.frx":761A0
      Top             =   705
      Width           =   1875
   End
   Begin VB.Image Image3 
      Height          =   225
      Left            =   7080
      Picture         =   "Form1.frx":79031
      Top             =   120
      Width           =   225
   End
   Begin VB.Image Image2 
      Height          =   225
      Left            =   6840
      Picture         =   "Form1.frx":7BD6B
      Top             =   120
      Width           =   225
   End
   Begin VB.Image Image1 
      Height          =   3750
      Left            =   0
      Picture         =   "Form1.frx":7EA19
      Top             =   0
      Width           =   7500
   End
End
Attribute VB_Name = "form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Option Explicit

' Type passed to Shell_NotifyIcon
Private Type NotifyIconData
  Size As Long
  Handle As Long
  ID As Long
  Flags As Long
  CallBackMessage As Long
  Icon As Long
  Tip As String * 64
End Type

' Constants for managing System Tray tasks, foudn in shellapi.h
Private Const AddIcon = &H0
Private Const ModifyIcon = &H1
Private Const DeleteIcon = &H2

Private Const WM_MOUSEMOVE = &H200
Private Const WM_LBUTTONDBLCLK = &H203
Private Const WM_LBUTTONDOWN = &H201
Private Const WM_LBUTTONUP = &H202

Private Const WM_RBUTTONDBLCLK = &H206
Private Const WM_RBUTTONDOWN = &H204
Private Const WM_RBUTTONUP = &H205

Private Const MessageFlag = &H1
Private Const IconFlag = &H2
Private Const TipFlag = &H4
      
Private Declare Function Shell_NotifyIcon _
  Lib "shell32" Alias "Shell_NotifyIconA" ( _
  ByVal Message As Long, Data As NotifyIconData) As Boolean


Private Data As NotifyIconData

Public taal As String
Private started As Boolean
Private first As Boolean
Private startbrowse As Boolean


Private Sub button_start_Click()

End Sub

Private Sub button_stop_Click()

End Sub

Private Sub Command6_Click()

End Sub

Private Sub Command7_Click()

End Sub

Private Sub apache_but_stat_Click()
    If (apache_start.Visible = True) Then
        Call apache_start_Click
    ElseIf (apache_stop.Visible = True) Then
        Call apache_stop_Click
    End If
End Sub

Private Sub apache_start_Click()
    Shell App.Path & "/apache2/bin/httpd_usbwv8.exe", vbHide
    apache_but_stat.Caption = "...."
    apache_start.Visible = False
    apache_stop.Visible = False
    Timer1.Enabled = False
    Timer1.Interval = 1000
    Timer1.Enabled = True
End Sub

Private Sub apache_stop_Click()
    killprocess ("httpd_usbwv8.exe")
    apache_but_stat.Caption = "...."
    apache_start.Visible = False
    apache_stop.Visible = False
    Timer1.Enabled = False
    Timer1.Interval = 1000
    Timer1.Enabled = True
End Sub

Private Sub frm_instellingen_Click()
   ' lng_en.Visible = False
    'lng_du.Visible = False
   ' lng_nl.Visible = False
End Sub

Private Sub frm_instellingen_MouseMove(Button As Integer, Shift As Integer, X As Single, Y As Single)
    'lng_en.BackColor = &HFFFFFF
    'lng_nl.BackColor = &HFFFFFF
    'lng_du.BackColor = &HFFFFFF
End Sub

Private Sub hide_caption_MouseMove(Button As Integer, Shift As Integer, X As Single, Y As Single)
    'lng_en.BackColor = &HFFFFFF
    'lng_nl.BackColor = &HFFFFFF
    'lng_du.BackColor = &HFFFFFF
End Sub

Private Sub Image11_Click()
    WriteIniValue App.Path & "\settings\usbwebserver.ini", "algemeen", "root", set_root.Text
    WriteIniValue App.Path & "\settings\usbwebserver.ini", "algemeen", "lang", lng_lan.Text
    If (vink_hide.Visible = True) Then
        WriteIniValue App.Path & "\settings\usbwebserver.ini", "algemeen", "hide", 0
    Else
        WriteIniValue App.Path & "\settings\usbwebserver.ini", "algemeen", "hide", 1
    End If
    If (vink_local.Visible = True) Then
        WriteIniValue App.Path & "\settings\usbwebserver.ini", "algemeen", "slocal", 0
    Else
        WriteIniValue App.Path & "\settings\usbwebserver.ini", "algemeen", "slocal", 1
    End If
    
    WriteIniValue App.Path & "\settings\usbwebserver.ini", "apache", "port", set_apache.Text
    WriteIniValue App.Path & "\settings\usbwebserver.ini", "mysql", "port", set_mysql.Text
    
    killprocess ("httpd_usbwv8.exe")
    killprocess ("mysqld_usbwv8.exe")
    Call Form_Load
    frm_alg.Visible = False
    frm_instellingen.Visible = True
    
    If (taal = "Nederlands") Then
        MsgBox "De instellingen zijn opgeslagen en usbwebserver herstart"
    Else
        MsgBox "The settings are saved and USBWebserver will restart"
    End If
End Sub

Private Sub Image13_Click()
browse ("http://localhost:" & ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port"))
End Sub

Private Sub Image14_Click()
browse ("http://localhost:" & ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port") + "/phpmyadmin")
End Sub

Private Sub Image15_Click()
Dim sRoot As String
sRoot = App.Path + "\root"
Shell "explorer /n, /root," & sRoot, vbNormalFocus
End Sub

Private Sub Image16_Click()
browse ("http://www.usbwebserver.com")
End Sub

Private Sub Image17_Click()
    If (lng_frm.Visible = True) Then
        lng_frm.Visible = False
    Else
        lng_frm.Visible = True
    End If
End Sub

Private Sub Image7_Click()
    Shell App.Path & "/mysql/bin/mysqld_usbwv8.exe --defaults-file=""" & App.Path & "/mysql/my.ini""", vbHide
    Call Timer1_Timer
End Sub

Private Sub Image6_Click()
    killprocess ("mysqld_usbwv8.exe")
    Call Timer1_Timer
End Sub

Private Sub Image9_Click()
  AddIconToTray
  Visible = False
End Sub

Private Sub Label13_Click()
    Shell "notepad """ + App.Path + "/apache2/logs/error.log""", vbNormalFocus
End Sub

Private Sub Label14_Click()
    Shell "notepad """ + App.Path + "/settings/httpd.conf""", vbNormalFocus
End Sub

Private Sub Command1_Click()

End Sub

Private Sub Command2_Click()
browse ("http://localhost:" & ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port") + "/phpmyadmin")
End Sub

Private Sub Command3_Click()
End Sub

Private Sub Command4_Click()
End Sub

Private Sub Form_Load()

    form1.Height = Image1.Height
    form1.Width = Image1.Width
    
    frm_apache.Top = frm_alg.Top
    frm_apache.Left = frm_alg.Left
    frm_apache.Visible = False
    
    frm_mysql.Top = frm_alg.Top
    frm_mysql.Left = frm_alg.Left
    frm_mysql.Visible = False
    
    frm_instellingen.Top = frm_alg.Top
    frm_instellingen.Left = frm_alg.Left
    frm_instellingen.Visible = False
    
    frm_over.Top = frm_alg.Top
    frm_over.Left = frm_alg.Left
    frm_over.Visible = False
    
    On Error Resume Next
    ' Verwijder logboekenasdfasdfasdf
    Kill (App.Path + "\apache2\logs\*.*")
    On Error GoTo 0
    
    
    
    ' Make new config file for apache
    Dim inhoud As String
    inhoud = "# -------------------------------------------- #" + vbNewLine + vbNewLine + "# Do not edit this file!" + vbNewLine + "# This file is automatically generated by Usbwebserver" + vbNewLine + "# TO edit the config file go to:" + vbNewLine + "# settings/httpd.conf" + vbNewLine + "# Any changes made in this file wil be reset on next restart" + vbNewLine + vbNewLine + "# -------------------------------------------- #" + vbNewLine + vbNewLine + vbNewLine
    Open App.Path & "/settings/httpd.conf" For Input As #1
        inhoud = inhoud + Input(LOF(1), 1)
    Close #1
    
    inhoud = Replace(inhoud, "{rootdir}", ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "root"))
    inhoud = Replace(inhoud, "{path}", Replace(App.Path, "\", "/"))
    inhoud = Replace(inhoud, "{port}", ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port"))
    Open App.Path & "/apache2/conf/httpd.conf" For Output As #1
        Print #1, inhoud
    Close #1
    
    
    ' Make new config file for mysql
    inhoud = "# -------------------------------------------- #" + vbNewLine + vbNewLine + "# Do not edit this file!" + vbNewLine + "# This file is automatically generated by Usbwebserver" + vbNewLine + "# TO edit the config file go to:" + vbNewLine + "# settings/my.ini" + vbNewLine + "# Any changes made in this file wil be reset on next restart" + vbNewLine + vbNewLine + "# -------------------------------------------- #" + vbNewLine + vbNewLine + vbNewLine
    Open App.Path & "/settings/my.ini" For Input As #1
        inhoud = inhoud + Input(LOF(1), 1)
    Close #1
    
    inhoud = Replace(inhoud, "{path}", Replace(App.Path, "\", "/"))
    inhoud = Replace(inhoud, "{port}", ReadIniValue(App.Path & "\settings\usbwebserver.ini", "mysql", "port"))
    Open App.Path & "/mysql/my.ini" For Output As #1
        Print #1, inhoud
    Close #1
       
    
    ' Make config file for php
    inhoud = "; -------------------------------------------- ;" + vbNewLine + vbNewLine + "; Do not edit this file!" + vbNewLine + "; This file is automatically generated by Usbwebserver" + vbNewLine + "; TO edit the config file go to:" + vbNewLine + "; settings/php.ini" + vbNewLine + "; Any changes made in this file wil be reset on next restart" + vbNewLine + vbNewLine + "; -------------------------------------------- ;" + vbNewLine + vbNewLine + vbNewLine
    Open App.Path & "/settings/php.ini" For Input As #1
        inhoud = inhoud + Input(LOF(1), 1)
    Close #1
    
    inhoud = Replace(inhoud, "{path}", Replace(App.Path, "\", "/"))
    inhoud = Replace(inhoud, "{mysqlport}", ReadIniValue(App.Path & "\settings\usbwebserver.ini", "mysql", "port"))
    Open App.Path & "/php/php.ini" For Output As #1
        Print #1, inhoud
    Close #1
    
     
    Dim sFiles() As String
    Dim lCtr As Long
    
    
    
    Dim LabelCount As Integer
    LabelCount = 1
    

    If started = False Then
    started = True
        sFiles = AllFiles(App.Path & "/lang/")
        For lCtr = 0 To UBound(sFiles)
                  
                  If sFiles(lCtr) <> "English.ini_sample" Then
                    Load lng_in(LabelCount)
                    
                    'Set lbl(LabelCount) = Me.Controls.Add("vb.label", lng_in(LabelCount), lng_frm)
                    Dim s() As String
                    s = Split(sFiles(lCtr), ".")
                    
                    
                    lng_in(LabelCount).Visible = True
                    lng_in(LabelCount).Left = 0
                    lng_in(LabelCount).Height = 255
                    lng_in(LabelCount).Top = (255 * LabelCount)
                    lng_in(LabelCount).Caption = s(0)
                    lng_in(LabelCount).Width = 1455
                    lng_in(LabelCount).BackColor = &HFFFFFF
                    lng_in(LabelCount).BackStyle = 1
                    lng_in(LabelCount).BorderStyle = 1
                    lng_in(LabelCount).Appearance = 0
                    lng_in(LabelCount).TabIndex = 40
                    lng_in(LabelCount).ZOrder 0
                    
                    LabelCount = LabelCount + 1
                    
                    lng_frm.Height = (255 * LabelCount)
                End If
    
        Next
    End If
    taal = ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "lang")

    If taal = "English" Then
        GoTo defaultlang
    End If
        
  On Error GoTo defaultlang
    ' De taal files
    
    Dim taalini As String

    taalini = App.Path & "\lang\" & taal & ".ini"
    If ReadIniValue(taalini, "translation", "general") = "" Then
        GoTo defaultlang
    End If
    
    lay_menu_alg.Caption = ReadIniValue(taalini, "translation", "general")
    lay_menu_inst.Caption = ReadIniValue(taalini, "translation", "settings")
    lay_menu_over.Caption = ReadIniValue(taalini, "translation", "about")
    
    lbl_status_apache.Caption = ReadIniValue(taalini, "translation", "starting")
    lbl_status_mysql.Caption = ReadIniValue(taalini, "translation", "starting")
    Label13.Caption = ReadIniValue(taalini, "translation", "logfiles")
    Label14.Caption = ReadIniValue(taalini, "translation", "settings")
    Label16.Caption = ReadIniValue(taalini, "translation", "settings")
    
    Label12.Caption = ReadIniValue(taalini, "translation", "language")
    Label6.Caption = ReadIniValue(taalini, "translation", "browser_at_startup")
    hide_caption = ReadIniValue(taalini, "translation", "hide_at_startup")
    
    Label11.Caption = ReadIniValue(taalini, "translation", "root_dir")
    Label8.Caption = ReadIniValue(taalini, "translation", "port_apache")
    Label10.Caption = ReadIniValue(taalini, "translation", "port_mysql")
    
    Label15.Caption = ReadIniValue(taalini, "translation", "save")
    
    Form2.mnu_close.Caption = ReadIniValue(taalini, "translation", "exit")
    
    About_caption.Caption = Replace(ReadIniValue(taalini, "translation", "about_text"), "//", vbNewLine)
    
    GoTo afterdlang
    
defaultlang:
    lay_menu_alg.Caption = "General"
    lay_menu_inst.Caption = "Settings"
    lay_menu_over.Caption = "About"
    
    lbl_status_apache.Caption = "Starting..."
    lbl_status_mysql.Caption = "Starting..."
    Label13.Caption = "Logs"
    Label14.Caption = "Settings"
    Label16.Caption = "settings"
    
    Label12.Caption = "Language"
    Label6.Caption = "Open browser when start"
    hide_caption = "Hide USBWebserver at startup"
    
    Label11.Caption = "Root dir"
    Label8.Caption = "Port apache"
    Label10.Caption = "Port MySQL"
    
    Form2.mnu_close.Caption = "Close"
    
    Label15.Caption = "Save"
    
    About_caption.Caption = "USBWebserver is a Border-IT & Scratch IS product" & vbNewLine & "Made by Leon de Vries" & vbNewLine & vbNewLine & "Designed by Bart Boerendans"

afterdlang:

    
    ' Verberg bij opstarten
    If (ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "hide") = 1) Then
        AddIconToTray
        Visible = False
    End If
    
    ' Verberg bij opstarten
    If (ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "slocal") = 1) Then
        startbrowse = True
    Else
        startbrowse = False
    End If
    
    first = True
    
        
    ' Run httpd en mysqld
    Shell App.Path & "/apache2/bin/httpd_usbwv8.exe", vbHide
    Shell App.Path & "/mysql/bin/mysqld_usbwv8.exe --defaults-file=""" & App.Path & "/mysql/my.ini""", vbHide

End Sub

Private Sub Form_Terminate()
    killprocess ("httpd_usbwv8.exe")
    killprocess ("mysqld_usbwv8.exe")
     DeleteIconFromTray
  End
End Sub

Private Sub Form_Unload(Cancel As Integer)
    killprocess ("httpd_usbwv8.exe")
    killprocess ("mysqld_usbwv8.exe")
     DeleteIconFromTray
End Sub

Private Sub Image1_MouseMove(Button As Integer, Shift As Integer, X As Single, Y As Single)
    Static xx As Integer, yy As Integer
    Select Case Button
    Case 0
        xx = X
        yy = Y
    Case 1
        Me.Left = Me.Left + (X - xx)
        Me.Top = Me.Top + (Y - yy)
    End Select
End Sub

Private Sub Image2_Click()
    form1.WindowState = 1
End Sub

Private Sub Image3_Click()
    killprocess ("httpd_usbwv8.exe")
    killprocess ("mysqld_usbwv8.exe")
    DeleteIconFromTray
  End
End Sub


Private Sub Label15_Click()
    Call Image11_Click
End Sub

Private Sub Label16_Click()
Shell "notepad """ + App.Path + "/settings/my.ini""", vbNormalFocus
End Sub

Private Sub Label6_MouseMove(Button As Integer, Shift As Integer, X As Single, Y As Single)
   ' lng_en.BackColor = &HFFFFFF
    'lng_nl.BackColor = &HFFFFFF
    'lng_du.BackColor = &HFFFFFF
End Sub

Private Sub lay_menu_alg_Click()
    Call lay_menu1_Click
End Sub

Private Sub lay_menu_apache_Click()
    Call lay_menu2_Click
End Sub

Private Sub lay_menu_inst_Click()
Call lay_menu4_Click
End Sub

Private Sub lay_menu_mysql_Click()
Call lay_menu3_Click
End Sub

Private Sub lay_menu_over_Click()
Call lay_menu5_Click
End Sub

Private Sub lay_menu1_Click()
    lay_menu2.Picture = img_menu_2.Picture
    lay_menu3.Picture = img_menu_3.Picture
    lay_menu4.Picture = img_menu_4.Picture
    lay_menu5.Picture = img_menu_5.Picture
    
    lay_menu_apache.ForeColor = &HFFFFFF
    lay_menu_mysql.ForeColor = &HFFFFFF
    lay_menu_inst.ForeColor = &HFFFFFF
    lay_menu_over.ForeColor = &HFFFFFF
    
    frm_apache.Visible = False
    frm_alg.Visible = True
    frm_instellingen.Visible = False
    frm_mysql.Visible = False
    frm_over.Visible = False
    

    
    lay_menu_alg.ForeColor = &H80000012
    lay_menu1.Picture = img_menu_mouseover.Picture
End Sub

Private Sub lay_menu2_Click()
    lay_menu1.Picture = img_menu_1.Picture
    lay_menu3.Picture = img_menu_3.Picture
    lay_menu4.Picture = img_menu_4.Picture
    lay_menu5.Picture = img_menu_5.Picture
    
    frm_apache.Visible = True
    frm_alg.Visible = False
    frm_instellingen.Visible = False
    frm_mysql.Visible = False
    frm_over.Visible = False
    
    lay_menu_alg.ForeColor = &HFFFFFF
    lay_menu_mysql.ForeColor = &HFFFFFF
    lay_menu_inst.ForeColor = &HFFFFFF
    lay_menu_over.ForeColor = &HFFFFFF
    

    
    lay_menu_apache.ForeColor = &H80000012
    lay_menu2.Picture = img_menu_mouseover.Picture
    
End Sub

Private Sub lay_menu3_Click()
    lay_menu1.Picture = img_menu_1.Picture
    lay_menu2.Picture = img_menu_2.Picture
    lay_menu4.Picture = img_menu_4.Picture
    lay_menu5.Picture = img_menu_5.Picture
    
        frm_apache.Visible = False
    frm_alg.Visible = False
    frm_instellingen.Visible = False
    frm_mysql.Visible = True
    frm_over.Visible = False
    
    lay_menu_alg.ForeColor = &HFFFFFF
    lay_menu_apache.ForeColor = &HFFFFFF
    lay_menu_inst.ForeColor = &HFFFFFF
    lay_menu_over.ForeColor = &HFFFFFF
    

    
    
    lay_menu_mysql.ForeColor = &H80000012
    lay_menu3.Picture = img_menu_mouseover.Picture
End Sub

Private Sub lay_menu4_Click()
    lay_menu1.Picture = img_menu_1.Picture
    lay_menu3.Picture = img_menu_3.Picture
    lay_menu2.Picture = img_menu_2.Picture
    lay_menu5.Picture = img_menu_5.Picture
    
    frm_apache.Visible = False
    frm_alg.Visible = False
    frm_instellingen.Visible = True
    frm_mysql.Visible = False
    frm_over.Visible = False
    
    lay_menu_alg.ForeColor = &HFFFFFF
    lay_menu_mysql.ForeColor = &HFFFFFF
    lay_menu_apache.ForeColor = &HFFFFFF
    lay_menu_over.ForeColor = &HFFFFFF
    
    lay_menu_inst.ForeColor = &H80000012
    lay_menu4.Picture = img_menu_mouseover.Picture
       
    lng_frm.Visible = False

    set_root.Text = ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "root")
    lng_lan.Text = ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "lang")
    If (ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "hide") = 1) Then
        vink_hide.Visible = False
        novink_hide.Visible = True
    Else
        vink_hide.Visible = True
        novink_hide.Visible = False
    End If
    
    If (ReadIniValue(App.Path & "\settings\usbwebserver.ini", "algemeen", "slocal") = 1) Then
        vink_local.Visible = False
        novink_local.Visible = True
    Else
        vink_local.Visible = True
        novink_local.Visible = False
    End If

    
    set_apache.Text = ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port")
    set_mysql.Text = ReadIniValue(App.Path & "\settings\usbwebserver.ini", "mysql", "port")
End Sub

Private Sub lay_menu5_Click()
    lay_menu1.Picture = img_menu_1.Picture
    lay_menu3.Picture = img_menu_3.Picture
    lay_menu4.Picture = img_menu_4.Picture
    lay_menu2.Picture = img_menu_2.Picture
    
    lay_menu_alg.ForeColor = &HFFFFFF
    lay_menu_mysql.ForeColor = &HFFFFFF
    lay_menu_inst.ForeColor = &HFFFFFF
    lay_menu_apache.ForeColor = &HFFFFFF
    
    frm_apache.Visible = False
    frm_alg.Visible = False
    frm_instellingen.Visible = False
    frm_mysql.Visible = False
    frm_over.Visible = True
    
    lay_menu_over.ForeColor = &H80000012
    lay_menu5.Picture = img_menu_mouseover.Picture
End Sub



Private Sub lng_in_Click(Index As Integer)
    lng_lan.Text = lng_in(Index).Caption
    lng_frm.Visible = False
End Sub


Private Sub lng_in_MouseMove(Index As Integer, Button As Integer, Shift As Integer, X As Single, Y As Single)
    Dim i As Integer
    Dim tot As Integer
    tot = (lng_in.Count - 1)
    For i = 0 To tot
        lng_in(i).BackColor = &HFFFFFF
    Next i
    lng_in(Index).BackColor = 5647385
End Sub

Private Sub mysql_but_stat_Click()
    If (mysql_start.Visible = True) Then
        Call mysql_start_Click
    ElseIf (mysql_stop.Visible = True) Then
        Call mysql_stop_Click
    End If
End Sub

Private Sub mysql_start_Click()

    Shell App.Path & "/mysql/bin/mysqld_usbwv8.exe --defaults-file=""" & App.Path & "/mysql/my.ini""", vbHide
    mysql_but_stat.Caption = "...."
    mysql_start.Visible = False
    mysql_stop.Visible = False
    Timer1.Enabled = False
    Timer1.Interval = 1000
    Timer1.Enabled = True

End Sub

Private Sub mysql_stop_Click()
    killprocess ("mysqld_usbwv8.exe")
    mysql_but_stat.Caption = "...."
    mysql_start.Visible = False
    mysql_stop.Visible = False
    Timer1.Enabled = False
    Timer1.Interval = 1000
    Timer1.Enabled = True
End Sub

Private Sub novink_hide_Click()
    vink_hide.Visible = True
    novink_hide.Visible = False
End Sub

Private Sub novink_local_Click()
    vink_local.Visible = True
    novink_local.Visible = False
End Sub

Private Sub Timer1_Timer()
    If (IsProcessRunning("httpd_usbwv8.exe") = True) Then
        status_apache.Picture = status_green.Picture
        
        lbl_status_apache.ForeColor = &HFF00&
        apache_start.Visible = False
        apache_stop.Visible = True
        lbl_status_apache.Caption = "Online"
        apache_but_stat.Caption = "STOP"
    Else
        status_apache.Picture = status_red.Picture
        lbl_status_apache.Caption = "Offline"
        lbl_status_apache.ForeColor = &HFF&
        apache_start.Visible = True
        apache_stop.Visible = False
        apache_but_stat.Caption = "START"
    End If
    
    If (IsProcessRunning("mysqld_usbwv8.exe") = True) Then
        status_mysql.Picture = status_green.Picture
        lbl_status_mysql.Caption = "Online"
        lbl_status_mysql.ForeColor = &HFF00&
        mysql_start.Visible = False
        mysql_but_stat.Caption = "STOP"
        mysql_stop.Visible = True
    Else
        status_mysql.Picture = status_red.Picture
        lbl_status_mysql.Caption = "Offline"
        lbl_status_mysql.ForeColor = &HFF&
        mysql_but_stat.Caption = "START"
        mysql_start.Visible = True
        mysql_stop.Visible = False
    End If
    
   
        If ((IsProcessRunning("mysqld_usbwv8.exe") = True) And (IsProcessRunning("httpd_usbwv8.exe") = True)) Then
            If (first = True And startbrowse = True) Then
                browse ("http://localhost:" & ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port"))
            End If
            form1.Icon = sys_online.Picture
        Else
            form1.Icon = sys_offline.Picture
        End If
     If (first = True) Then
        first = False
    End If
    If (Timer1.Interval <> 10000) Then
            Timer1.Interval = 10000
    End If
    
End Sub






Private Sub AddIconToTray()

  Data.Size = Len(Data)
  Data.Handle = hwnd
  Data.ID = vbNull
  Data.Flags = IconFlag Or TipFlag Or MessageFlag
  Data.CallBackMessage = WM_MOUSEMOVE
  Data.Icon = Icon
  Data.Tip = "USBWebserver V8" & vbNullChar
  Call Shell_NotifyIcon(AddIcon, Data)

End Sub

Public Sub DeleteIconFromTray()
  Call Shell_NotifyIcon(DeleteIcon, Data)
End Sub

Private Sub Form_MouseMove(Button As Integer, _
  Shift As Integer, X As Single, Y As Single)
  
  Dim Message As Long
  Message = X / Screen.TwipsPerPixelX
  
  Select Case Message
        Case WM_LBUTTONUP        '514 restore form window
         Me.WindowState = vbNormal
         Me.Visible = True
         DeleteIconFromTray
        Case WM_LBUTTONDBLCLK    '515 restore form window
         Me.WindowState = vbNormal
         Me.Visible = True
         DeleteIconFromTray
        Case WM_RBUTTONUP        '517 display popup menu
         Load Form2
         Call Form2.PopupMenu(Form2.mnu_menu)
         'DeleteIconFromTray
         'Me.WindowState = vbNormal
         'Me.Visible = True

  End Select
End Sub

Private Sub vink_hide_Click()
    vink_hide.Visible = False
    novink_hide.Visible = True
End Sub

Private Sub vink_local_Click()
    vink_local.Visible = False
    novink_local.Visible = True
End Sub
