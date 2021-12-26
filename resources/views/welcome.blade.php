<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESTful API</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body{font-family:"Nunito", sans-serif}hr{border:1px solid green;width:80%;margin-top:0;margin-bottom:0}main{display:flex;flex-direction:column}main h1{align-self:center}main h2{margin-left:1em;font-size:1.8em}.container__route{margin-left:3em}.container__route h1{font-size:1.6em}.container__route-content{margin-left:1em}.container__route-content:nth-child(6){margin-bottom:1.8em}@media (min-width: 1024px){hr{width:90%}main h2{margin-left:1.5em;font-size:1.8em}.container__route{margin-left:4em}}
    </style>
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
                <code>GET: /public/api/genres</code>
            </div>
            <div class="container__route-content">
                <h3>Store</h3>
                <p>Description: Stores a new genre in the database</p>
                <code>POST: /public/api/genres</code>
            </div>
            <div class="container__route-content">
                <h3>Show</h3>
                <p>Description: Displays the specified genre</p>
                <code>GET: /public/api/genres/id</code>
            </div>
            <div class="container__route-content">
                <h3>Update</h3>
                <p>Description: Displays the specified genre</p>
                <code>PUT: /public/api/genres/{genre}/id</code>
            </div>
            <div class="container__route-content">
                <h3>Delete</h3>
                <p>Description: Removes the specified genre from database</p>
                <code>DELETE: /public/api/genres/id</code>
            </div>
        </div>
        <hr />
        <div class="container__route">
            <h1>Movie</h1>
            <div class="container__route-content">
                <h3>Index</h3>
                <p>Description: Displays a list of movie</p>
                <code>GET: /public/api/movies</code>
            </div>
            <div class="container__route-content">
                <h3>Store</h3>
                <p>Description: Stores a new movie in the database</p>
                <code>POST: /public/api/movies</code>
            </div>
            <div class="container__route-content">
                <h3>Show</h3>
                <p>Description: Displays the specified movie</p>
                <code>GET: /public/api/movies/id</code>
            </div>
            <div class="container__route-content">
                <h3>Update</h3>
                <p>Description: Displays the specified movie</p>
                <code>PUT: /public/api/movies/{movie}/id</code>
            </div>
            <div class="container__route-content">
                <h3>Delete</h3>
                <p>Description: Removes the specified movie from database</p>
                <code>DELETE: /public/api/movies/id</code>
            </div>
        </div>
    </main>
</body>

</html>