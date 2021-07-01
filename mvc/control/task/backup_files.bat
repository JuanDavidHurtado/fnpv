set FECHA= %date% 
set FECHA=%FECHA:/=% 
set FECHA=%FECHA::=% 
set FECHA=%FECHA:,=% 
set FECHA=%FECHA: =% 

set HORA_ACTUAL=%TIME%
set HORA=%HORA_ACTUAL:~0,2%
set MINUTOS=%HORA_ACTUAL:~3,2%
set SEGUNDOS=%HORA_ACTUAL:~6,2%

mkdir d:\BACKUP_FISIOSALUD\FILES\BACKUP_FILES_%FECHA: =%_%HORA: =%%MINUTOS: =%%SEGUNDOS: =% 
copy C:\xampp\htdocs\fisiosalud\mvc\files\users\files\*.* d:\BACKUP_FISIOSALUD\FILES\BACKUP_FILES_%FECHA: =%_%HORA: =%%MINUTOS: =%%SEGUNDOS: =%

exit;