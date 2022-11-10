<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    try {
        $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM images';
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();
        $image = $stmt -> fetch();
        // $images = $stmt->fetchAll();
    } catch (PDOException $e) {
        exit ('データベース接続不可'. $e->getMessage());
    } finally {
        $pdo = null;
    }
?>
    @foreach ($stmt as $image)
        <?php echo header('Content-type: '. $image['type']) ?>
        <img src="<?php echo $image['content'] ?>">
    @endforeach
</body>
</html>