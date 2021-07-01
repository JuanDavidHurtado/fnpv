set FECHA= %date% 
set FECHA=%FECHA:/=% 
set FECHA=%FECHA::=% 
set FECHA=%FECHA:,=% 
set FECHA=%FECHA: =% 

set HORA_ACTUAL=%TIME%
set HORA=%HORA_ACTUAL:~0,2%
set MINUTOS=%HORA_ACTUAL:~3,2%
set SEGUNDOS=%HORA_ACTUAL:~6,2%

C:\xampp\php\php-cgi -f C:\xampp\htdocs\fisioterapia2\mvc\vista\admin\backup_php.php