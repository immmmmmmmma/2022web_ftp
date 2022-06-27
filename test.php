<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box{background-color: #f0f;}
</style>
<body>
    <?php
        echo "test1111";
        $string = "i see you";
        echo $string;

        $num = $_GET['point'];
        echo $num
    ?>

    <h1>나의 인생점수</h1>
    <?php
    if($num == 100){
    ?>
        <div class="box">나의 인생점수는 0점</div>
    <?php
    } else{
    ?>
        <div class="box">나의 인생점수는 <?php echo $num ?>점 입니다.</div>

    <?php
    }
    ?>
</body>
</html>