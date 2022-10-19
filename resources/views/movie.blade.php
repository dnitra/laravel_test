<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
    <a href="/search?search=">Search movies</a>
    <a href="/">HomePage</a>
    <h1>Movie</h1>

    <form action="/movie" method="post">

        @csrf
        <input placeholder="name" name="name" type="text">
        <button type="submit">Click me</button>

    </form>

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->name }} -
                {{ $movie->movieType->name }}
                @foreach ($movie->genres as $genre)
                    {{ $genre->name }}
                @endforeach
                <strong>
                    @foreach ($movie->people as $person)
                        {{ $person->name }}
                    @endforeach
                </strong>
            </li>
        @endforeach

    </ul>
</body>

</html>
