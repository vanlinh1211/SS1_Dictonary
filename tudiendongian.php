<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type = text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #8E9CB2;
            border-radius: 100px;
            padding: 10px 10px 10px 10px;
        }

        #submit{
            border-radius: 50px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh-Viet</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm kiếm">
    <input type="submit" value="Search" id="submit">
</form>
<?php
$dictionary = [
    "hi" => "xin chao",
    "storm" => "bao to",
    "search" => "tim kiem"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($searchword == $word) {
            echo "tu " . $word . "<br>" . "nghia cua tu " . $description;
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "khong tim thay";
    }
}
?>
</body>
</html>