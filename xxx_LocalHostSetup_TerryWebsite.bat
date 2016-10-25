echo off
cls
echo.
echo          Setup Local Host For Terry's Website
echo.
echo Open up a new browser window. type in the url:  http://localhost:2020
echo.

cd \users\karen\Documents\Project_Terry\terrywebsite
c:\Users\karen\Documents\caddy_windows_amd64_custom\caddy.exe -conf="c:\users\karen\Documents\Project_Terry\caddyfile"