<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>ログイン</title>
</head>
<body>
    <header>
        <div class="title">
            <h1><a href="/">Blog</a></h1>
        </div>
        <div class="title2">
            <h1>ログイン</h1>
        </div>
    </header>
    <main>
        <form action="log-check2" method="post">
            @csrf
            <div class="name">
                <h3>ユーザー名</h3>
                <input type="text" name="name" required>
            </div>
            <div class="email">
                <h3>email</h3>
                <input type="text" name="email" required>
            </div>
            <div class="password">
                <h3>パスワード</h3>
                <input type="password" name="password" required>
            </div>
            <div class="btn">
                <input type="submit" value="ログイン">
            </div>
        </form>
    </main>

</body>
</html>