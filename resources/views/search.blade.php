<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titles['document_title'] }}</title>
</head>

<body>

    <h1>{{ $titles['h1'] }}</h1>

    <h2>{{ $titles['h2'] }}</h2>

    <form action="/search" method="get">
        <input type="text" name="search" placeholder="search by name">
        <button type="submit">SEARCH</button>
    </form>

    <ol>

        <?php


foreach ($results as $result ):
?>
        <li>{{ $result->name }} </li>

        <?php endforeach ?>
    </ol>

    <a href="/"><button>BACK</button></a>


</body>

</html>
