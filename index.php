<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <!-- 반복문 사용하기 전 Data 목록 불러오기 -->
    <!-- <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li>
    </ol> -->
    <!-- 반복문 사용하기 -->
    <?php
     $list = scandir('./data');
     $i = 0;
     while($i<count($list)){
       if($list[$i] != '.'){
         if($list[$i] != '..'){
           ?>
           <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
           <?php
         }
       }
       $i = $i +1;
     }
     ?>

    <h2>
      <?php
      if(isset($_GET['id'])){  // isset(~) 괄호안에 값이 있으면 참
        echo $_GET['id'];
      } else {
        echo "Welcome";
      }

      ?>
    </h2>

    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    }else{
      echo "Hello PHP";

    }

    ?>
<!-- id값 유무에 따른 조건문 설정 -->


</body>
</html>
