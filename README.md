# Micro-service architecture based on Docker, PHP, Symfony framework and flex

This is sample project to demonstrate how to use Symfony 5 (https://symfony.com/) and flex (https://flex.symfony.com/) to create a microservice for an application.
I build this microservice inside Docker (https://www.docker.com/)

## Running and Deployment :

for running this project in your local environment you can use below command :

### Runinng Docker:

```
docker-compose  up -d
```

### PHP Dependencies:

please run below command inside of php container:

```
cd survey/
composer install 
```

### Update enviorment variables:

open .env file and set params like this:

```
DATABASE_URL=mysql://azki_user:secret@azki-microservice-mariadb:3306/azki_db
```

### CREATE DB SCHEMA:

please run below command inside of php container:
```
cd survey/
./bin/console make:migration
./bin/console doctrine:migrations:migrate
```

you can check database schema with phpMyadmin by this URL: 
http://localhost:6973/

Credentials | USER | Password
 --- | --- | ---
 Root | root | very_secret
 Instance user | azki_user | secret


## Usage :

navigate your browser to http://localhost:6999/api

### creating new api :

```
./bin/console make:entity --api-resource
```

Enter the name of entity and the field details of every entity. Your new entity api is available and ready to use.

## Documentions :

please visit: https://api-platform.com/docs/core/