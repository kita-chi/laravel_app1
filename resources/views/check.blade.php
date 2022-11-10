<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規ユーザー作成完了</title>
</head>
<body>

<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $created_at = date('Y-m-d H:i:s');
?>

<?php if ($pass1 != $pass2): ?>
    <form action="login">
        <h1>パスワードを正しく入力してください</h1>
        <input type="submit" value="戻る">
    </form>
<?php else: ?>

<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

try {
    $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'INSERT INTO users (name, email, password, created_at) values (:name, :email, :password, :created_at)';
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindValue(':name', $name);
    $stmt -> bindValue(':email', $email);    
    $stmt -> bindValue(':password', $pass1);
    $stmt -> bindValue(':created_at', $created_at);
    $stmt -> execute();
} catch(PDOException $e) {
    exit ('データベース接続不可'. $e->getMessage());
} finally {
    $pdo = null;
}
?>
    <h3>アカウント作成完了しました</h3>
    <h1>ようこそ</h1>
<?php endif; ?>


</body>
</html>