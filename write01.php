<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="write.css">
    <title>Document</title>
</head>
<body>

    <div class="ohbo">応募がありました</div>
    <div class="ohbo-txt">応募者を管理しましょう</div>

    <ul>
        <li><a id="kanri" href="read01.php">管理画面</a></li>
        <li><a id="return" href="input01.php">戻る</a></li>
    </ul>

    <?php
      $naiyou = $_POST['応募内容'];
      $name = $_POST['お名前'];
      $age = $_POST['年齢'];
      $job = $_POST['勤務先'];
      $tel = $_POST['電話番号'];
      $mail = $_POST['Email'];
      $sex = $_POST['性別'];
      $ex = $_POST['お問い合わせ内容'];
      $time = date('Y-m-d H:i:s') ;

      $data = "$time $naiyou $name $age $job $tel $mail $sex $ex\n";
      
      file_put_contents('data01/data01.txt', $data , FILE_APPEND);
    ?>

    
</body>
</html>
