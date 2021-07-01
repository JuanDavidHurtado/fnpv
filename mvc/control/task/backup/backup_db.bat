set FECHA= %date% 
set FECHA=%FECHA:/=% 
set FECHA=%FECHA::=% 
set FECHA=%FECHA:,=% 
set FECHA=%FECHA: =% 

set HORA_ACTUAL=%TIME%
set HORA=%HORA_ACTUAL:~0,2%
set MINUTOS=%HORA_ACTUAL:~3,2%
set SEGUNDOS=%HORA_ACTUAL:~6,2%

C:\xampp\mysql\bin\mysqldump -u acc -pfisiosalud fisiosalud > d:\backup\fisiosalud_%FECHA: =%_%HORA: =%%MINUTOS: =%%SEGUNDOS: =%.sql
C:\xampp\php\php.exe C:\xampp\htdocs\fisiosalud\mvc\vista\admin\backup_php.php

exit;