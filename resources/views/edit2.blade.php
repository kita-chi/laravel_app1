<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="title">
            <h1><a href="/">Blog</a></h1>
        </div>
        <div class="title2">
            <h1>編集</h1>
        </div>
    </header>
    <main>
        <div class="inputs">
            <form action="update" method="post">
                @csrf
                <div>
                    <div>タイトル <input class="input" type="text" name="title" value='{{ $data['title'] }}'></div>
                </div>
                <div>
                    <h3>本文(255文字以内)</h3>
                    <textarea name="content" >{{ $data['content'] }}</textarea>
                </div>
                <input type="hidden" name="id" value='<?php echo $data['id'] ?>'>
                <input class="submit" type="submit" value="編集">
            </form>
        </div>
        
    </main>
    

    
</body>
</html>
