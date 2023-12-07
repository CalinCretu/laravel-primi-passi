<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="header">
        <div>
            <a href="{{ route('chi-siamo') }}" target="_blank" rel="noopener noreferrer">Chi siamo</a>
        </div>
        <div>
            <a href="{{ route('lorem-ipsum') }}" target="_blank" rel="noopener noreferrer">Lorem Ipsum</a>
        </div>

    </div>
    <div class="container">
        <h1>Hello World!!!!!</h1>
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
        margin: 20px auto;
        display: flex;
        justify-content: center;
        max-width: 800px;
    }

    .container {
        margin: 10px auto;
        display: flex;
        justify-content: center;
        max-width: 400px;
    }

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
</style>
