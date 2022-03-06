<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About

Dokumentasi belajar laravel 8

1. Saat Bikin API Post (PostController) seluruh route di daftarkan di file VerifyCsrfToken

protected $except = [
//
'post/*',
];

berguna agar saat di tes dengan postman tidak error 419 alias mengabaikan csrf token yang di generate otomatis olh form laravel.
