<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur

    //
    // adipisicing elit. Et beatae odit porro aliquid, laudantium vel provident ipsum assumenda, magnam incidunt quisquam hic repellat eos culpa. Ut voluptatem cumque tempora atque?";
    // echo $str;
    // ?>
    //
    <!-- // <h2>strlen</h2> -->
    // <?php
    // echo strlen($str);
    // ?>
    //
    <!-- // <h2>na2br</h2> -->
    // <?php
    // echo nl2br($str)
    // ?>

    <?php
    function basic(){
      print("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

    }
    basic();
    ?>

    <?php
    function sum($a, $b){
      print("<br>");
      //echo $a + $b;
      return $a + $b;
    }
      print(sum(5,2));
      print(sum(10,20));

    ?>


</body>
</html>
