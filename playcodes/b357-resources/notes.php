MVC Architecture

- MVC
	- Model - component that corresponds to all data-related logic
	- View - component is used for all the UI logic of the app
	- Controllers - component that act as an interface between Model and View components to process all business logic

- What is the syntax to create a laravel project?

	[1] - composer create-project laravel/laravel <project-name>

- After installation, how do we test if the application is running?

	- [2] php artisan serve

	Note: Make sure that Apache and MySQL is started in XAMPP

- Folder Structure
	
	- app folder
		- this contains the models at its root.
		
		- "http"
			- this contains the project's controllers

	- resources folder
		- This is where all assets such as css, js, images, etc. can be stored and accessed


- Auth Scaffolding - automatically creates a user registation, login, dashboard, logout, etc.

	1. [3]How do we install the laravel/ui package?
	composer require laravel/ui

	2. [4]Build authentication scaffolding
	php artisan ui bootstrap --auth

	3. [5]Compile our fresh scaffolding
	npm install && npm run dev

[6] What is the command where we create a model along with its migration and controllers?

php artisan make:model <model_name> -mc

If Node has Mongoose ODM, Laravel has Eloquent ORM?

Migrations (m) are like version control for your database

Migrations contain methods:
	
	[7] define the up method in the migrations>create_post_table.php

	1. up()
	2. down()

We can also create this component individually:

php artisan make:migration <create_migration_name_table>
php artistan make:controller <ControllerName>

[8] AppServiceProvider - global configuration and settings

[9] create laravel_blog db in myAdmin

[11] change line 14, db name to laravel_blog

[12]How do we migrate?

php artisan migrate

Modify Table Columns (Note: this will drop the existing table first before migration)

php artisan migrate:fresh

[13]Establish Model relationship User and Post 