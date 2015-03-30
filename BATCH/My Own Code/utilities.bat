@echo off

title Utilities
:menu
cls
echo #########################################
echo #                                       #
echo # Welcome to the Utilities console      #
echo #                                       #
echo #########################################
echo #                                       #
echo # 1. List files in current directory.   #
echo # 2. List files in chosen directory.    #
echo # 3. List files with type.              #
echo # 4. List files with name.              #
echo # 5. Test ipconfig.                     #
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
if %udefine%==5 goto f5
if %udefine%==q goto quit
:f1
cls
::#############################
::#print the current directory#
::#############################
echo %cd%
echo.
::redirect the directory list to echo to print to screen
:: /b make the list short hand. ie. file names only
echo | dir *.* /b
echo.
pause
goto menu
:f2
::################################################################
::#create a file with all of the contents in the chosen directory#
::################################################################
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
::####################################################
::#search every directory for the chosen type of file#
::####################################################
::Build YYYYMMDD_hhmmss format date/time stamp for new file name
set stamp=%DATE:~-4%%DATE:~-10,2%%DATE:~-7,2%_%TIME:~0,8%
set stamp=%stamp::=%
set stamp=%stamp: =0%
::get file type to search
set /p type=Search type: 
::loop to check every drive
for %%d in (A B C D E F G H I J K L M N O P Q R S T U V W X Y Z) do (
if not exist %%d:\nul (
echo %%d:\ drive is not connected
)
if exist %%d:\nul (
echo checking %%d:\ now
echo | dir /s %%d:\*.%type% >> "All %type% files INFO - %stamp%.txt" | more
echo | dir /b /s %%d:\*.%type% >> "All %type% files NAME - %stamp%.txt" | more
)
)
goto menu
:f4
::######################################################
::#search every directory for the chosen name of a file#
::######################################################
::Build YYYYMMDD_hhmmss format date/time stamp for new file name
set stamp=%DATE:~-4%%DATE:~-10,2%%DATE:~-7,2%_%TIME:~0,8%
set stamp=%stamp::=%
set stamp=%stamp: =0%
::get file name to search
set /p name=Search name: 
::loop to check every drive
for %%d in (A B C D E F G H I J K L M N O P Q R S T U V W X Y Z) do (
if not exist %%d:\nul (
echo %%d:\ drive is not connected
)
if exist %%d:\nul (
echo checking %%d:\ now
echo | dir /b /s %%d:\%name%.* >> "All %name% files - %stamp%.txt" | more
)
)
goto menu
:f5
call ipconfig.bat
goto menu
:quit
echo.
echo Goodbye...
timeout 3 > nul