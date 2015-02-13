@echo off

:menu
echo 1. loop
echo 2. Color
set /p udefine=Enter your choice: 

if %udefine%==1 goto loop
if %udefine%==2 goto color

:color
::create and switch to folder
md UniqueTempFolder
cd UniqueTempFolder
::output
echo test
echo.
::create file
echo ^<--- colored! > "This is cool"
echo.
::colored output
findstr /a:0e /s "<--- marked!" "This is cool"
echo.
set /p ".=colored ---> " < nul
echo ^<--- placed differently!>"Somewhere else this time"
findstr /a:0a /s "<--- colored and placed differently!" "Somewhere else this time"
echo.
::return from directory and delete it
cd ..
rd /s /q UniqueTempFolder

goto menu

:loop
set NUM=0 1 2 3 4 5 6 7 8 9 A B C D E F
for %%x in (%NUM%) do ( 
    for %%y in (%NUM%) do (
        color %%x%%y
		echo #
        timeout 1 >nul
    )
)
goto menu