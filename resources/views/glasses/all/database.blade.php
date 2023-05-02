<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>DataBase</h1>
<?php
try {
    $local = "localhost";
    $db_name = "registration";
    $user = "root";
    $pass = "root";
    $connect = new PDO("mysql:host=$local; dbname=$db_name", $user, $pass);
} catch (PDOException $e) {
    echo $e;
}

try {
    $res = $connect->query("SELECT * FROM `users`");
    $res = $res->fetchAll();
//    var_dump($res);
    foreach ($res as $r){
         print_r($r['email']);
         echo "////////////////////////////////////";
    }
} catch (Exception $e) {
    echo "Error DB: " . $e;
}
?>
<h1>DataBase2</h1>
</body>
</html>
