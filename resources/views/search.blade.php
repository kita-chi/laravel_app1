<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <title>検索結果</title>
</head>
<body>
    <h1>検索結果</h1>

<?php 
    ini_set('display_errors',1);
    error_reporting(E_ALL);

try {
    $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $search = $_POST['search'];
    $sql = "SELECT * FROM blogs JOIN users ON blogs.user_id=users.id WHERE content LIKE '%$search%' ORDER BY blogs.created_at DESC";
    $stmt = $pdo->prepare($sql);
    // $stmt -> bindValue(1,$search);
    $stmt -> execute();
} catch (PDOException $e) {
    exit ('データベースに接続不可'. $e->getMessage());
}
?>


<?php foreach($stmt as $data): ?>

        <a href="/">
        <?php date_default_timezone_set('Asia/Tokyo') ;

             echo $data['name'].' '.$data['title'].'<br>'.$data['content'].'<br>'.$data['created_at'] ?>
        </a>
<?php endforeach ?> 

<form action="/">
    <input type="submit" value="戻る">
</form>
</body>
</html>