@echo off

:f1
set return=1
goto function

:r1
echo The function returned to R1
f2
set return=2
goto function

:r2
echo The function returned to R2

:f3
set return=3
goto function

:r3
echo The function returned to R3
goto end

:function
echo The function was called from F%return%
goto r%return%

:end
for %%a in (echo goto:end) do %%a Message