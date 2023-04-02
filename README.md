<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

The task:

- We have three providers that make transfers using a phone number. We need to read and create some filters on them to get the  aspired results.

 

Files:
------------
- DataW.json
- DataX.json
- DataY.json

 

-DataW schema is:
{
amount:200,
mobile:0020111111111,
status: done,
currency: EGP,
created_at: 2021-03-29 09:63:11,
id:123456789
}

 

-DataX schema is:
-----------------------
{
transactionAmount:200,
currency: EGP,
mobile:0020111111111,
date: 2021-03-29 09:63:11,
transaction_id:2223665411136
}

 

-DataY schema is:
--------------------
{
amount:200,
mobile:0020111111111,
status: 100,
currency: EGP,
created_at: 2021-03-29 09:63:11,
id:2fc2-a8dl
}

 

Requirements:
------------------
-   Using PHP Laravel

-   Implement API endpoint

-    It should list all transactions from all providers (W, X, Y)

-    It should be able to filter results by status (paid, pending, reject)

-   It should be able to filter results by currency

 

This task will be evaluated based on:
-----------------------------------------
- Code quality
-  Application performance in reading large files
- Unit test coverage


-[POSTMAN_COLLECTION] https://api.postman.com/collections/9381437-e991ddc8-3633-4490-a9ad-db9332e54983?access_key=PMAT-01GWZPDPRZH17JP7EXQ2A5M9A8
 