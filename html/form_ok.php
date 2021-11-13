<?php
    $id = $_POST['id'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $color = $_POST['color'];
    $birth = $_POST['birth'];
    $value = $_POST['value'];
    $content = $_POST['content'];
?>
<!DOCTYPE html>
<html lang="en">
<style>
    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>
<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>입력하신 데이터는 다음과 같습니다 :)</h3>
    <div>id: <?=$id?></div>
    <div>password: <?=$password?></div>
    <div>fname: <?=$fname?></div>
    <div>lname: <?=$lname?></div>
    <div>birth: <?=$birth?></div>
    <div>color: <?=$color?></div>
    <div>value: <?=$value?></div>
</body>
</html>
    
