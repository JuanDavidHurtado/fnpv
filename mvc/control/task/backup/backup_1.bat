BACKUP_PATH=d:\backup\
DB_NAME=fisioterapiadelcauca
DB_USER=root
DB_PASS=sena
set FECHA= %date%
set BACKUP_FILE=%DB_NAME%_%fecha%.sql

C:\xampp\mysql\bin\mysqldump -u root -p fisio_ips > %BACKUP_FILE%
C:\xampp\mysql\bin\mysqldump sena