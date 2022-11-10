<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/show.css">
    
    <title>show</title>
</head>
@include('layouts.header')
@if (session('id')===$data1['id'])
<body>
    @yield('header')
    
    <main>
        <div class="user_info">
                <div>名前：{{ $data1['name'] }}</div>
                <div>メールアドレス：{{ $data1['email'] }}</div>
                <input type="submit" name="edit" value="アカウント編集" onclick="check_pass()">
        </div>
        <br>
        <div class="user-blog">
            @foreach ($data2 as $data)
                <div>「{{ $data['title'] }}」</div>
                <div>{!! ($data['content']) !!}</div>
                <div>{{ $data['updated_at'] }}</div> 
                    <ul>
                        <form action="/edit" method="post">
                        @csrf
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                            <li><input type="submit" name="edit" value="編集"></li>
                        </form>
                        <form action="/delete2" name="delete" onSubmit="return delete2()">
                        @csrf
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                            <li><input type="submit" name="btn" value="削除"></li>
                        </form>
                    </ul>
            @endforeach
        </div>
    </main>
    <script type="text/javascript">
        var password='{{ $data1['password'] }}';
        var id = '{{$data1['id']}}';
        
    </script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
@else
<h2>You're not authorized</h2>

<a href="/">Home</a>
@endif
</html>