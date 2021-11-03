# Huia Store Test
A tech challenge for Huia, based on a Store API with Users, Consumers, Products and Sales, developed in PHP 8 + Laravel 8 with Sqlite.

## Installation
This test was developed in Laradock project, but can be used in any other development or production environment prepared for Laravel 8. For more instructions to use Laradock, please access [Laradock] website.

To install this project, follow these steps :
- Clone this repository into the desired path;
- Run the command "composer install" to add all project depencies;
- Create a new .env file based on .env.example using "cp .env.example .env"
- Setup the .env as you like, you can use sqlite or mysql as database driver
- Run the command "php artisan migrate" to create all database structure
- If you want some test data, run the command "php artisan db:seed"
- In the end, run the command "php artisan key:generate"

With this, the application should be available in the domain that you choosed on your nginx

## Usage

This API has four modules with basic CRUD operation : Customers, Products, Users, Sales. All of them are protected by authentication, to access, get the Bearer token using the login endpoint with the master admin and add to all your requests :


| email | password |
| ------ | ------ |
| admin@admin.com | masterpassword |

All requests must have `Accept: application/json` in their headers.
In case of POST/PUT method, add too the `Content-Type: application/json` header and send all body data in JSON format.

All endpoins will be displayed below and how to use them.
If you're using Postman, you can import the API collection file using this : [Collectionfile]


## Login
Endpoint to retrieve Bearer token to access others api operations.
`POST /login`
##### Body
    {
         "email" : "admin@admin.com",
         "password" : "masterpassword"
    }


## Logout
Endpoint to logout user and destroy the active token
`POST /logout`
##### Body
    {
    }
    
## Get Auth User
Endpoint to retrieve authenticated user
`GET /me`



## List Customer
Endpoint to retrieve all customers paginated.
`GET /customers`
#### Query params
|Param | Description|
| ----------- | --------------- |
| page     | Selected Page index          |

## Show customer
Endpoint to retrieve a specific customer
`GET /customers/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active customer          |

## Create Customer
Endpoint to create a customer
`POST /customers`
#### Body

    {
        "name": "Bruno de Souza Rocha",
        "tax_number": "111.111.111-12",
        "birth_date": "1993-06-02"
    }

## Update Customer
Endpoint to update a  customer
`PUT /customers/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active customer          |
#### Body

    {
        "name": "Bruno de Souza Rocha",
        "tax_number": "111.111.111-12",
        "birth_date": "1993-06-02"
    }
    
    
## Delete Customer
Endpoint to delete a customer
`DELETE /customers/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active customer          |


## List products
Endpoint to retrieve all products paginated.
`GET /products`
#### Query params
|Param | Description|
| ----------- | --------------- |
| page     | Selected Page index          |

## Show product
Endpoint to retrieve a specific product
`GET /products/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active product          |

## Create product
Endpoint to create a product
`POST /products`
#### Body

    {
        "name": "Cool Shoe",
        "custom_id": "58455214541",
        "batch_number": 202546,
        "color": "Yellow",
        "description": "A cool yellow shoe",
        "value": 8001.00
}

## Update product
Endpoint to update a  product
`PUT /products/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active product          |
#### Body

    {
        "name": "Cool Shoe",
        "custom_id": "58455214541",
        "batch_number": 202546,
        "color": "Yellow",
        "description": "A cool yellow shoe",
        "value": 8002.00
    }
    
    
## Delete product
Endpoint to delete a product
`DELETE /products/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active product          |


## List product batches
Endpoint to retrieve all batches from a product paginated.
`GET /products/:product_id/batches`

#### Path variables
|Param | Description|
| ----------- | --------------- |
| :product_id     | UUID of an active product          |
| :id     | UUID of an active product batch          |

#### Query params
|Param | Description|
| ----------- | --------------- |
| page     | Selected Page index          |

## Show product batch
Endpoint to retrieve a specific product batch
`GET /products/:product_id/batches/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :product_id     | UUID of an active product          |
| :id     | UUID of an active product batch          |

## Create product batch
Endpoint to create a product batch
`POST /products/:product_id/batches`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :product_id     | UUID of an active product          |
| :id     | UUID of an active product batch          |

#### Body

    {
        "custom_id": "58455214541",
        "manufactured_at": "2016-12-14 06:44:05",
        "batch_quantity": 202546    
    }

## Update product batch
Endpoint to update a  product batch
`PUT /products/:product_id/batches/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :product_id     | UUID of an active product          |
| :id     | UUID of an active product batch          |

#### Path variables
|Param | Description|
| ----------- | --------------- |
| :product_id     | UUID of an active product          |
| :id     | UUID of an active product batch          |
#### Body

    {
        "custom_id": "58455214541",
        "manufactured_at": "2016-12-14 06:44:05",
        "batch_quantity": 202546    
    }
    
    
## Delete product batch
Endpoint to delete a product batch
`DELETE /products/:product_id/batches/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :product_id     | UUID of an active product          |
| :id     | UUID of an active product batch          |


## List users
Endpoint to retrieve all users paginated.
`GET /users`
#### Query params
|Param | Description|
| ----------- | --------------- |
| page     | Selected Page index          |

## Show user
Endpoint to retrieve a specific user
`GET /users/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active user          |

## Create user
Endpoint to create a user
`POST /users`
#### Body

    {
        "name": "Joe Doe",
        "email": "joe.doe@huia-test.com",
        "password": "password"
    }

## Update user
Endpoint to update a  user
`PUT /users/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active user          |
#### Body

    {
        "name": "Joe Doe",
        "email": "joe.doe@huia-test.com",
        "password": "password"
    }
    
    
## Delete user
Endpoint to delete a user
`DELETE /users/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active user          |



## List sales
Endpoint to retrieve all sales paginated.
`GET /sales`
#### Query params
|Param | Description|
| ----------- | --------------- |
| page     | Selected Page index          |
| report     | Activate report mode, with detailed data from sales. Set `true` to activate|
| sort     | Sort sales by field : created_at, value |
| direction     | Sort direction : asc, desc |

## Show sale
Endpoint to retrieve a specific sale
`GET /sales/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active sale          |

## Create sale
Endpoint to create a sale
`POST /sales`
#### Body

    {
    "customer_id": "00df0b41-435e-4677-b896-c0234f9311a6",
    "seller_id": "31b84cfe-4c67-484e-86d8-1c6065528942"
    }

## Update sale
Endpoint to update a  sale
`PUT /sales/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active sale          |
#### Body

    {
        "customer_id": "00df0b41-435e-4677-b896-c0234f9311a6",
        "seller_id": "31b84cfe-4c67-484e-86d8-1c6065528942"
    }
    
    
## Delete sale
Endpoint to delete a sale
`DELETE /sales/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :id     | UUID of an active sale          |



## List sale products
Endpoint to retrieve all products from a sale paginated.
`GET /sales/:sale_id/products`

#### Path variables
|Param | Description|
| ----------- | --------------- |
| :sale_id     | UUID of an active sale          |
| :id     | UUID of an active sale product          |

#### Query params
|Param | Description|
| ----------- | --------------- |
| page     | Selected Page index          |

## Show sale product
Endpoint to retrieve a specific sale product
`GET /sales/:sale_id/products/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :sale_id     | UUID of an active sale          |
| :id     | UUID of an active sale product          |

## Create sale product
Endpoint to create a sale product
`POST /sales/:sale_id/products`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :sale_id     | UUID of an active sale          |
| :id     | UUID of an active sale product          |

#### Body

    {
        "product_id" : "f59cdd22-d4ef-4408-81c9-eb1e01abe229",
        "quantity" : 500
    }

## Update sale product
Endpoint to update a  sale product
`PUT /sales/:sale_id/products/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :sale_id     | UUID of an active sale          |
| :id     | UUID of an active sale product          |

#### Path variables
|Param | Description|
| ----------- | --------------- |
| :sale_id     | UUID of an active sale          |
| :id     | UUID of an active sale product          |
#### Body

    {
       "product_id" : "f59cdd22-d4ef-4408-81c9-eb1e01abe229",
        "quantity" : 500
    }
    
    
## Delete sale product
Endpoint to delete a sale product
`DELETE /sales/:sale_id/products/:id`
#### Path variables
|Param | Description|
| ----------- | --------------- |
| :sale_id     | UUID of an active sale          |
| :id     | UUID of an active sale product          |


## Roadmap

### Step 1 - Basic CRUD operations ✅

  Create basic CRUD operations for each module below:

- customers
- products
- users
- sales

### Step 2 - Inventory and product sale control ✅

  

Both products and sales modules will gain more complex layers, making possible to control batches and detailing which product was sold

  

### Step 3 - Security layer ✅


Now all operations will need an user, password
Trying to use Laravel Sanctum or OAuth  
  

### Step 4 - Report sales ✅

Add options to return customer and product details into sales GET endpoint using Laravel Resource Collection

### Step 5 - JSON API

Convert project responses into JSON API patterns

### Step 6 - Units tests

Write units for each module created

### Step 7 - Dockerize

Create a Dockerfile for this project

## More steps will come


[Laradock]: <https://laradock.io/>
[Collectionfile]: <https://github.com/soubrunorocha/huia-store-test/blob/develop/Huia%20Store%20Test.postman_collection.json>
