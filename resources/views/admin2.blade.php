<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin2.css">
    <title>Document</title>
</head>
@include('layouts.header')

@if (session('role')==2)
<body>
@yield('header')
<main>
    <h1>「<?php echo $data1['name'] ?>」</h1>
    <form action="/delete_user2" method="post" onsubmit="return delete3()">
        @csrf
        <input type="hidden" name="id" value="<?php echo $data1['id'] ?>">
        <input type="submit" value="このユーザーを削除">
    </form>
    @foreach ($datas as $data)
        <h2><?php echo $data['content'] ?></h2>
        <p><?php echo $data['updated_at'] ?></p>
        <form action="/delete3" method="post" onsubmit="return delete2()">
            @csrf
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="submit" value="削除">
        </form>
    @endforeach
</main>
<script src="{{ asset('/js/script.js') }}"></script>
</body>
@else
<h2>You're not authorized</h2>
<a href="/">Home</a>
@endif
</html>