<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/profile.css">
    <title>Document</title>
</head>
@include('layouts.header')
@if (session('id')===$user['id'])
<body>
    @yield('header')
    <main>
        <div class="profile">
            <form action="/update3" method="post">
                @csrf
                <div>名前：<input type="text" name="name" value="{{ $user['name'] }}" required></div>
                <div>メールアドレス：<input type="text" name="email" value="{{ $user['email'] }}" required></div>
                <div>新規パスワード：<input type="password" name="pass1" id="pass1" required></div>
                <div>新規パスワード確認用：<input type="password" name="pass2" id="pass2" required></div>
                <br>
                <input type="submit" value="更新" name="btn1" onClick="hello()">
            </form>
            <br>
            <form action="/show/{{session('id')}}">
                @csrf
                <input type="submit" value="戻る">
            </form>
            <br>
            <a href="#" onClick='delete_user()'>アカウントを削除</a>
        </div>
    </main>
    
    <script src="{{ asset('/js/script.js') }}"></script>
@else 
<h2>You're not authorized</h2>
<a href="/">Home</a>
@endif
</body>
</html>