This is a simple project as an entry point for learn how to make restful apis in laravel.
 
so let's get started!
 
<h2> Requirements:</h2>
 First you should have a proper undrestanding of these concepts on laravel:

- routes
- models & controllers
- migrations


<h2>How to use & Learn?</h2>

1 - first create a database and call it whatever you like.
then edit the `.env` file on the root of this project with your database configurations.

2 - open a terminal and go to the project directory, then run bellow command for install php dependencies:

`composer install`

3 - migrate the database using bellow artisan command:

`php artisan migrate`

4 - run the server by `php artisan serve` and open your browser.


**Now** at this point you will start to learning by manupulating these files:

- `route/api.php`  // which is used for define api routes

- `\App\Api\Country.php` // which is a dummy model for intract with our database

- `\App\Http\Controllers\Api\CountryController.php` // which is stores the logic of our apis!


**_Note:)_** All route that write in api.php, should be called with an extra api prefix on url. 

for example if you have a route with `country` url, you should call that with `api/county` url. 
