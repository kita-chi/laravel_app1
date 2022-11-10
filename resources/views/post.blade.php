<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <title>投稿作成</title>
</head>
@include('layouts.header')
@if (session('id'))
<body>
    @yield('header')
    <main>
        <div class="inputs">
            <form action="post2" method="post">
                @csrf
                <div>
                    <div>タイトル <input class="input" type="text" name="title" required></div>
                </div>
                <div>
                    <h3>本文(255文字以内)</h3>
                    <textarea name="content" required></textarea>
                </div>
                <input class="submit" type="submit" value="投稿">
            </form>
        </div>
    </main>
<script src="{{ asset('/js/script.js') }}"></script>
@endif  
</body>
</html>