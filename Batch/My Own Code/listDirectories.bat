@echo off

title List Directories
:menu
cls
echo #########################################
echo #                                       #
echo # Welcome to the console                #
echo #                                       #
echo #########################################
echo #                                       #
echo # 1. List files in current directory.   #
echo # 2. List files in chosen directory.    #
echo # 3. List files with type.              #
echo # 4. List files with name.              #
echo #                                       #
echo # q. Quit                               #
echo #                                       #
echo #########################################
echo.
set /p udefine=Enter your choice: 
echo.
if %udefine%==1 goto f1
if %udefine%==2 goto f2
if %udefine%==3 goto f3
if %udefine%==4 goto f4
if %udefine%==q goto quit
:f1
cls
::print the current directory
echo %cd%
echo.
::redirect the directory list to echo to print to screen
:: /b make the list short hand. ie. file names only
echo | dir *.* /b
echo.
pause
goto menu
:f2
cls
set /p directory=Enter the directory you want to view: 
echo.
::redirect the directory list to echo to print to screen
:: /b make the list short hand. ie. file names only
echo | dir %directory% /b
echo.
set /p choice=Copy data to file? [y/n]: 
if %choice%==y (
echo | dir %directory% > DirectoryInfo.txt
cls
echo Done...
echo.
pause
)
if %choice%==n goto menu
goto menu
:f3
::Build YYYYMMDD_hhmmss format date/time stamp for new file name
set stamp=%DATE:~-4%%DATE:~-10,2%%DATE:~-7,2%_%TIME:~0,8%
set stamp=%stamp::=%
set stamp=%stamp: =0%
::get file type to search
set /p type=Search type: 
echo | dir /s c:\*.%type% > "All %type% files INFO - %stamp%.txt" | more
echo | dir /b /s c:\*.%type% > "All %type% files NAME - %stamp%.txt" | more
goto menu
:f4
::Build YYYYMMDD_hhmmss format date/time stamp for new file name
set stamp=%DATE:~-4%%DATE:~-10,2%%DATE:~-7,2%_%TIME:~0,8%
set stamp=%stamp::=%
set stamp=%stamp: =0%
::get file name to search
set /p name=Search name: 
echo | dir /b /s c:\%name%.* > "All %name% files - %stamp%.txt" | more
goto menu
:quit
echo.
echo Goodbye...