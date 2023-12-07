<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lorem Ipsum</title>
</head>

<body>

    <div class="header">
        <div>
            <a href="{{ route('chi-siamo') }}" target="_blank" rel="noopener noreferrer">Chi siamo</a>
        </div>
        <div>
            <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer">Home</a>
        </div>
    </div>
    <div class="container">
        <h4>{{ $lorem }}</h4>
    </div>

</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .header {
        margin: 10px auto;
        display: flex;
        justify-content: center;
        max-width: 800px;
    }

    .container {
        margin: 10px auto;
        display: flex;
        align-items: center;
        flex-direction: column;
        max-width: 400px;
    }

    .list {}

    a {
        margin: 0 10px;
        text-decoration: none;
        color: black;
        border: 1px solid black;
        padding: 5px 10px;
    }

    a:hover {
        background-color: black;
        color: white;
    }

    ul,
    ol,
    menu {
        list-style: none;
    }

    li {
        margin: 10px 0;
    }

    .names {
        border: none;
    }
</style>
