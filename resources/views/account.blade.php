<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <title>ユーザー作成</title>
</head>
<body>
    <header>
        <div class="title">
            <h1><a href="/">Blog</a></h1>
        </div>
        <div class="title2">
            <h1>ユーザー作成</h1>
        </div>
    </header>
    <main>
        <div class="modal-wrapper">
            <div id="login-form">
                <form action="create_user" method="post">
                    @csrf
                    <div class="name">
                        <h3>ユーザー名</h3>
                        <input type="text" name="name" class="input name" placeholder="山田花子" required>
                    </div>
                    <div class="email">
                        <h3>email</h3>
                        <input type="text" name="email" class="input email" placeholder="hanako.com" required>
                    </div>
                    <div class="password">
                        <h3>パスワード</h3>
                        <input type="password" class="pass" name="pass1" required>
                        <h3>パスワード確認用</h3>
                        <input type="password" class="pass" name="pass2" required>
                    </div>
                    <div class="btn">
                        <input type="submit" value="作成">
                    </div>
                </form>
            </div>
        </div>
    </main>
       
</body>
</html>