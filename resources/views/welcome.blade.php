<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- my css -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card movie-card">
                <h3>{{ $movie['title'] }}</h3>
            </div>
        @endforeach
    </div>
</body>

</html>
