<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>
    <style>
        ul {
            list-style-type: none;
        }

        li {
            margin: 1rem 0;
        }

        a {
            font-size: 1.25rem;
            color: darkgreen;
        }
    </style>
</head>

<body>
    <h2>Hello {{ $name }}! Choose a page ;)</h2>
    <ul>
        <li>
            <a href="{{ route('coffeeRef') }}">Coffe Types</a>
        </li>
        <li>
            <a href="{{ route('fishingRef') }}">Fishing Types</a>
        </li>
        <li>
            <a href="{{ route('teaRef') }}">Tea Types</a>
        </li>
    </ul>
</body>

</html>
