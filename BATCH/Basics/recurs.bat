@ECHO OFF
IF "%1"=="" GOTO SETUP
goto %1
:a
Echo Value is currently %1 - resetting value to B
set value=B
call recurs.bat %value%
goto end
:b
Echo Value is currently %1 - resetting value to C
set value=C
call recurs.bat %value%
goto end
:c
echo Final Amount is: %value%
goto end
:setup
echo There is no current Value, setting value to A
set value=A
call recurs.bat %value%
:end
pause