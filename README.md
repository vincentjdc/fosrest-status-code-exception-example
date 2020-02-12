# Repository to show the FOS Rest Bundle error with Symfony 4.4

To reproduce :

1. Pull this repository
2. configure a database + update the .env file to set up the database
3. run `composer install` to install vendors
4. run `bin/console doctrine:migrations:migrate` to create tables
5. run `bin/console doctrine:fixtures:load` to insert a user in the user table
6. Go to the `/api` route, you should see a list with 1 user "Vincent"
7. Insert an error in `src/Entity/User.php` (by removing a semicolon for example)
8. Refresh the `/api` page, you shoud see the error :
  > Argument 1 passed to FOS\RestBundle\Controller\ExceptionController::getStatusCode() must be an instance of Exception, instance of ParseError given, called in /var/www/vendor/friendsofsymfony/rest-bundle/Controller/ExceptionController.php on line 68