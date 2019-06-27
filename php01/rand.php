<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>
      <?php
      $r = rand(1,5);
      if($r==1){
            echo "大吉";
      }
      if($r==2){
            echo "中吉";
      }
      if($r==3){
            echo "小吉";
      }
      if($r==4){
            echo "小凶";
      }
      if($r==5){
            echo "大凶";
      }
      ?>

</body>
</html>