<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Document</title>
</head>
<body>
    @section('header')
    <header>
        <div class="title">
            <h1><a href="/">Blog</a></h1>
            @if (session('name'))
                <h1>Welcome!! "{{ session('name') }}"</h1>
            @endif
        </div>
        
        <div class="right">
            <form action="search" method="post" class="search">
                @csrf

                <input type=text name="search"  placeholder="内容を検索">
                <input type="submit" value="&#xf002">
            </form>
            <ul>
                @if(session('id'))
                <li><a href="#" onClick="check()">ログアウト</a></li>
                <li><a href="/show/{{session('id')}}">アカウント</li>
                <li><a href="/post">投稿作成</a></li>
                    @if (session('role') == 2)
                    <li><a href="/admin1">管理画面</a></li>
                    @endif
                @else 
                <li><a href="/account">新規登録</a></li>
                <li><a href="/login">ログイン</a></li>
                @endif
            </ul>
        </div>
    </header>
    @endsection
   
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>