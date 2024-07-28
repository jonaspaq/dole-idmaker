# dole-idmaker
Create a template ID to be printed for DOLE intern employees

## Docker setup
Required 
- Docker

1. Clone repository
2. Run command in the root of the project
```
docker compose up -d
```
3. Visit app at http://localhost:8000

## Manual setup 
Required

- XAMPP


1. Clone this repository to:
> /xampp/htdocs

2. Database setup
- Start xampp apache and mysql service
- Open http://localhost/phpmyadmin
- Create database 'idtest'
- import idtest.sql from the cloned repo to the db


3. Open application at http://localhost/dole-idmaker

> Note: if you cannot connect to the db, check for additional configurations: /controllers/MyConnect.php


## Usage

After adding a person, you will be able to print.

To print properly:
- enable background color on print settings
- set print layout to landscape
- recommended paper size is 'letter'
