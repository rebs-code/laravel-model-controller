# Model & Controller with Laravel

Create un nuovo progetto Laravel

tramite phpMyAdmin create un nuovo database laravel_model_controller

Importate nel vostro database la tabella movies in allegato

Inserite le vostre credenziali per il database nel file .env

Create un model Movie -> php artisan make:model Movie

Create un controller che gestirà la rotta / -> php artisan make:controller Guest/PageController

All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

Here's the general flow:

The .env file contains the database connection details. Laravel uses these details to establish a connection to the database.

The Movie model is a representation of the movies table in the database. By default, Laravel's Eloquent ORM assumes that the name of the table is the plural form of the model name. So, for the Movie model, it will look for a table named movies. If your table name doesn't follow this convention, you can specify the actual table name in the model like so:

The Movie model provides methods to query the movies table. For example, Movie::all() retrieves all records from the movies table.

A controller in Laravel is responsible for handling requests and returning responses. It can use the Movie model to retrieve data from the movies table and then pass that data to a view. Here's an example:

In this example, the index method of the MovieController retrieves all movies using the Movie::all() method and then passes the movies to the movies.index view.

The view then displays the data. In the example above, the movies.index view would have access to a $movies variable containing all the movies.