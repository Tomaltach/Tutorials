@echo off
set /a num=0

:top
set /a num=%num%+1
echo %num%
if %num%==100 goto goback
goto top

:goback
set /a num=%num%-1
echo %num%
if %num%==0 pause
goto goback