<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    ini_set('display_errors',1);
    error_reporting(E_ALL);

try {
    $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $search = "SELECT * FROM users WHERE name=:name AND email=:email AND password=:password";
    $stmt = $pdo -> prepare($search);
    $stmt -> bindValue(':name',$name);
    $stmt -> bindValue(':email',$email);
    $stmt -> bindValue(':password',$password);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC,0);


} catch(PDOException $e) {
    exit ('it is impossible to connect database'. $e->getMessage());
} finally {

    
    $pdo = null;
}
?>

@if ($result)
    <h1>ログイン完了</h1>
<?php
// var_dump($result);
    $result->session()->put('id',$result['id']);
    // echo $result['id'];
?>
@else
    <h1>正しく入力してください</h1>
    <form action="login">
        <input type="submit" value="戻る">
    </form>
@endif


</body>
</html>