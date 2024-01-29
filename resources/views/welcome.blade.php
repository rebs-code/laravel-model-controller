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
    <header class="text-center">
        <h1>Movie List</h1>
    </header>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card movie-card">
                <div class="card-title p-2">
                    <h3>{{ $movie['title'] }}</h3>
                    <h4>{{ $movie['original_title'] }}</h4>
                </div>
                <hr>
                <div class="card-body">
                    <h5>Nationality: {{ $movie['nationality'] }}</h5>
                    <h5>Year: {{ substr($movie['date'], 0, 4) }}</h5>
                    <h5>Vote: {{ $movie['vote'] }}</h5>
                </div>
                <div class="card-footer">
                    <a href="/" class="btn btn-primary w-100">Show</a>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
