1) first create the model with the migration at the same time[it will create the a model file and  a migration file]
    =>php aetisan make:model Article -m
    the model is inside the migration folder
    add the Schema in the migration file
    not the model file

    
2) add the fillable column in the models file
    fillable will be the title and the body
3)make a seeder
    => php artisan make:seeder ArticlesTableSeeder
    write code
4) execute the seeder
    =>php artisan db:seed --class ArticleTableSeeder

5) now we need a lot of users we seed that too
    make another seeder name UserTableSeeder
    we need a administration user too so add it too
    => php artisan make:seeder UserTableSeeder
    =>php artisan db:seed --class UsreTableSeeder



    and add the user name space

    use \App\User; 

    // this is a big command 
    // you can add a call method the main Databaseseeder file to call them with just seend command
    so adding two call method in the databaseseeder.php file

    although you can do it with the previous command
    now this command
    =>php artisan db:seed

    we can refresh the seed with that
    => php artisan migrate:refresh --seed

OK database finished now go to the api.php
to make the route

to test with postman you may need to run the dev serer
and 
url starts with this

localhost:8000/api/articles/


now with the controller 
make a controller

=> php artisan make:controller ArticleController


in the Route folder add all the route for the 

and we put the logic under the controller


but the problem is if anything wrong happen we get
a html error message

we are changing that


we handle it with the /app/Exception/handler.php file

so they send the error in html format with render()

function so we are going change the file to send a json response



Authrntication function

we extend the users table and add a column 'api_token'

we do not edit the users file we only add another migration but we it will be an extension of the current user table

    => php artisan make:migration --table=users adds_api_token_to_users_table

add the api_token column

now migrate it again

now we create a registration end point 
we will use Auth/RegistrationController.php

to use its functionality
we do not create any controller now

we edit the Auth/RegisterController.php and add a 
function name registered()

        // there is a method generateToken()
        /// ths generateToken is under the User class
        /// because we call it from users
        /// so we have to make it on the user model
        /// go to the User.php and add the function
        /// under class Authenticable
        // and the str_random we cant use
        // we use a different function from different 
        // namespace
        // and you may wondered where the regertered method is called
        // it is called in the RegisterUser class when the auth is done
        // previously it was not there but it was mentinoed
        // in the class
        // and when we write it it started to use it
        // and the registed function will not be

        function registered(Request $request,$user)

        it will be just

        function registered($request,$user)


        and you have to increase the size of the api_token colum to 300




        next login

make an endpont for the registration