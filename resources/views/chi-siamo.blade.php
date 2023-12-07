<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chi siamo</title>
</head>
<body>
  <div class="header">
    <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer">Home</a>
    <a href="{{ route('lorem-ipsum') }}" target="_blank" rel="noopener noreferrer">Lorem Ipsum</a>
  </div>
  <div class="container">
    <h2>{{ $title }}</h2>
  <ul class="list">
    @foreach ($users as $user)
        <li><a class="names" href="http://" target="_blank" rel="noopener noreferrer">{{ $user }}</a></li>
    @endforeach
  </ul>
  </div>
  
</body>
</html>

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
  .header{
  margin: 10px auto;
    display: flex;
    justify-content: center;
    max-width: 800px;
}
.container{
    margin: 10px auto;
    display: flex;
    align-items: center;
    flex-direction: column;
    max-width: 400px;
  }
  .list {

  }
  a{
   margin: 0 10px;
   text-decoration: none;
   color: black;
   border: 1px solid black;
   padding: 5px 10px;
  }

  a:hover{
    background-color: black;
    color: white;
  }

  ul,ol,menu{
    list-style: none;
  }
  li {
    margin: 10px 0;
  }
  .names {
    border: none;
  }
</style>