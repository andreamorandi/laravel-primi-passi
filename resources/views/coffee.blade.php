<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Types</title>
</head>

<body>
    <h2>{{ $title }}</h2>
    <h3>{{ $description }}</h3>
    <ul>
        @foreach ($types as $type)
            <li>{{ $type }}</li>
        @endforeach
    </ul>
</body>

</html>
