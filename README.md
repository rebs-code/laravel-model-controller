# Model & Controller with Laravel

This project is a simple web application built with Laravel, a popular PHP framework. The application uses the *Model-View-Controller (MVC)* architectural pattern to retrieve movie information from a database and display it in a view.

## Project's General Flow

1- The .env file contains the database connection details. Laravel uses these details to establish a connection to the database.

2- The Movie model is a representation of the movies table in the database. By default, Laravel's Eloquent ORM assumes that the name of the table is the plural form of the model name. So, for the Movie model, it will look for a table named movies.

3- The Movie model provides methods to query the movies table. For example, Movie::all() retrieves all records from the movies table.

4- A controller in Laravel is responsible for handling requests and returning responses. It can use the Movie model to retrieve data from the movies table and then pass that data to a view. Here's an example:

5- The view then displays the data. In the example above, the movies.index view would have access to a $movies variable containing all the movies.

### Model

The Movie model represents the movies table in the database. Laravel's Eloquent ORM (Object-Relational Mapping) is used to interact with the database. The Movie model provides methods to query the movies table. For example, Movie::all() retrieves all records from the movies table (see PageController.php line 14).

### View

The welcome view is responsible for displaying the data retrieved by the controller. In this project, the view displays a list of movies using Bootstrap card class. The view has access to a $movies variable, which contains all the movies retrieved from the database.

### Controller

The MovieController is responsible for handling requests and returning responses. It uses the Movie model to retrieve data from the movies table and then passes that data to the welcome view. The index method of the MovieController retrieves all movies using the Movie::all() method and then passes the movies to the welcome view.

### Database Connection

The .env file contains the database connection details. Laravel uses these details to establish a connection to the database. Make sure to configure these settings according to your database server.

## Tech Stack

- Laravel
- Vite
- Bootstrap