<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESTful API</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="resources\css\app.css" rel="stylesheet">
</head>

<body>
    <main>
        <h1>RESTful API - Laravel 8</h1>
        <h2>Routes:</h2>
        <hr />
        <div class="container__route">
            <h1>Genre</h1>
            <div class="container__route-content">
                <h3>Index</h3>
                <p>Description: Displays a list of genres</p>
                <code>GET: /api/genres</code>
            </div>
            <div class="container__route-content">
                <h3>Store</h3>
                <p>Description: Stores a new genre in the database</p>
                <code>POST: /api/genres</code>
            </div>
            <div class="container__route-content">
                <h3>Show</h3>
                <p>Description: Displays the specified genre</p>
                <code>GET: /api/genres/id</code>
            </div>
            <div class="container__route-content">
                <h3>Update</h3>
                <p>Description: Displays the specified genre</p>
                <code>PUT: /api/genres/{genre}/id</code>
            </div>
            <div class="container__route-content">
                <h3>Delete</h3>
                <p>Description: Removes the specified genre from database</p>
                <code>DELETE: /api/genres/id</code>
            </div>
        </div>
        <hr />
        <div class="container__route">
            <h1>Movie</h1>
            <div class="container__route-content">
                <h3>Index</h3>
                <p>Description: Displays a list of movie</p>
                <code>GET: /api/movies</code>
            </div>
            <div class="container__route-content">
                <h3>Store</h3>
                <p>Description: Stores a new movie in the database</p>
                <code>POST: /api/movies</code>
            </div>
            <div class="container__route-content">
                <h3>Show</h3>
                <p>Description: Displays the specified movie</p>
                <code>GET: /api/movies/id</code>
            </div>
            <div class="container__route-content">
                <h3>Update</h3>
                <p>Description: Displays the specified movie</p>
                <code>PUT: /api/movies/{movie}/id</code>
            </div>
            <div class="container__route-content">
                <h3>Delete</h3>
                <p>Description: Removes the specified movie from database</p>
                <code>DELETE: /api/movies/id</code>
            </div>
        </div>
    </main>
</body>

</html>