<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About The App

This app is created as a proof of concept for Zippin technical interview. The requirements are:

- Simple application capable of generating orders for an ecommerce
- models, tables and respective migrations
- shipping information, billing information, and products in each order

The app provides all asked but leaves room for improvement, described as "ToDo" in each section, as new relationships or different
approaches that may be taken in consideration given that this is a simple demo app to be done in short time.

## Installation

 - Download the repo, clone or install.
 - Install dependencies, create .env file, regular Laravel installation (npm included) 
 - Create database with `php artisan migrate:refresh --seed` command. No .sql file required

## Usage:

 - You may use the dashboard to see existing orders. To access you will need an admin user. 
 - Run `php artisan user:create {name} {email} {password}` command to create a new user and access the panel.

### Endpoints 
 - All orders: http://127.0.0.1:8000/api/v1/orders/ HTTP GET
 - Single order: http://127.0.0.1:8000/api/v1/order/{id} HTTP GET
 - Create new: http://127.0.0.1:8000/api/v1/order HTTP POST

Post request sample:

    
    {
        "name": "Santiago",
        "address": "Av. del Sol 3311",
        "city": "Miami",
        "state": "Florida",
        "payment_method": 1,
        "products": [
            {
                "id": 3
            },
            {
                "id": 4
            }
        ],
        "shipping_address": {
            "address": "Mapple Street 3311",
            "city": "Sacramento",
            "state": "California"
            }
    }
    
