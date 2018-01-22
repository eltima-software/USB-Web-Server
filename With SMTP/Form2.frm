VERSION 5.00
Begin VB.Form Form2 
   Caption         =   "Form2"
   ClientHeight    =   3030
   ClientLeft      =   225
   ClientTop       =   855
   ClientWidth     =   4560
   Icon            =   "Form2.frx":0000
   LinkTopic       =   "Form2"
   ScaleHeight     =   3030
   ScaleWidth      =   4560
   StartUpPosition =   3  'Windows Default
   Begin VB.Menu mnu_menu 
      Caption         =   "Menu"
      Begin VB.Menu mnu_localhost 
         Caption         =   "Localhost"
      End
      Begin VB.Menu mnu_root 
         Caption         =   "Root"
      End
      Begin VB.Menu mnu_phpmyadmin 
         Caption         =   "PhpMyAdmin"
      End
      Begin VB.Menu mnu_usbw 
         Caption         =   "USBWebserver.com"
      End
      Begin VB.Menu mnu_close 
         Caption         =   "Afsluiten"
      End
   End
End
Attribute VB_Name = "Form2"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False


Private Sub mnu_close_Click()
    killprocess ("httpd_usbwv8.exe")
    killprocess ("mysqld_usbwv8.exe")
    Call Form1.DeleteIconFromTray
  End
End Sub

Private Sub mnu_localhost_Click()
browse ("http://localhost:" & ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port"))
End Sub

Private Sub mnu_phpmyadmin_Click()
browse ("http://localhost:" & ReadIniValue(App.Path & "\settings\usbwebserver.ini", "apache", "port") + "/phpmyadmin")

End Sub

Private Sub mnu_root_Click()
 Dim sRoot As String
sRoot = App.Path + "\root"
Shell "explorer /n, /root," & sRoot, vbNormalFocus
End Sub

Private Sub mnu_usbw_Click()
browse ("http://www.usbwebserver.com")
End Sub
