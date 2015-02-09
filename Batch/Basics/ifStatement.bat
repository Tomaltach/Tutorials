@echo off
set v1=hi!!
set v2=bye!!
:top
echo Press 1 to say HI!
echo Press 2 to say BYE!
set /p you=
if %you%==1 (
echo %v1%
goto top
)
if %you%==2 echo %v2%
pause