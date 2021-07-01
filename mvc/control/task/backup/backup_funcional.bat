set FECHA= %date% 
set FECHA=%FECHA:/=% 
set FECHA=%FECHA::=% 
set FECHA=%FECHA:,=% 
set FECHA=%FECHA: =% 

set HORA_ACTUAL=%TIME%
set HORA=%HORA_ACTUAL:~0,2%
set MINUTOS=%HORA_ACTUAL:~3,2%
set SEGUNDOS=%HORA_ACTUAL:~6,2%

C:\xampp\mysql\bin\mysqldump -u acc -psena fisio_ips > d:\backup\fisio_ips_%FECHA: =%_%HORA: =%%MINUTOS: =%%SEGUNDOS: =%.sql