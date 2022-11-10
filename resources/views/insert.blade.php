<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/insert.css">
    <title>投稿完了</title>
</head>
<body>
    <h1>投稿完了</h1>
    
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

try {
    $pdo=new PDO('mysql:dbname=blog;host=localhost','root','');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $title=$_POST['title'];
    $content=$_POST['content'];
    $id=$_POST['id'];
    $created_at=date('Y-m-d H:i:s');
    $sql = 'INSERT INTO blogs (title, content, user_id, created_at) VALUES (:title, :content, :id, :created_at)';
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(':title',$title);
    $stmt -> bindValue(':content',$content);
    $stmt -> bindValue(':id',$id);
    $stmt -> bindValue(':created_at',$created_at);
    $stmt -> execute();

} catch (PDOException $e) {
    exit ('データベース接続不可'. $e->getMessage());
} finally {
    $pdo = null;
}
?>

    <form action="/">
        @csrf
        <input type="submit" value="戻る">
    </form>
</body>
</html>