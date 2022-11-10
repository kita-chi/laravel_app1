<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin1.css">
    <title>Document</title>
</head>
@include('layouts.header')

@if (session('role')==2)
<body>
@yield('header')
<main>
    <div class="users">
        @foreach ($datas as $data)
            @if (session('id')!==$data['id'])
            <h2><?php echo $data['id'] ?>. <a href="/admin2/<?php echo $data['id'] ?>"><?php echo $data['name'] ?></a></h2>

            @else 
            <h2><?php echo $data['id'] ?>.<?php echo $data['name'] ?> <- You</h2>
            @endif
        @endforeach
    </div>
    
</main>
    
</body>
@else 
<h2>You're not authorized</h2>
<a href="/">Home</a>
@endif
</html>