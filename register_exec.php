<html>
<body>
<?php
    require('./common.php');
    require('./def.php');
    require('./sec_def.php');
    $prefecture=$_POST['prefecture'];
    $name=$_POST['name'];
    $tokyo=$_POST['tokyo'];
    $sinjuku=$_POST['sinjuku'];
    $sibuya=$_POST['sibuya'];
    $aoyama=$_POST['aoyama'];

    //登録処理
    $sql_ins_min="INSERT INTO to_minutes (prefecture,name,to_tokyo,to_sinjuku,to_sibuya,to_aoyama) VALUES ('$prefecture','$name','$tokyo','$sinjuku','$sibuya','$aoyama')";
    $mysqli=new mysqli($host,$user_name,$pass,$db_name);
    $res = $mysqli->query($sql_ins_min);
    $mysqli->close();
?>
<div class="headline">
   <h1><?php echo $name.'の登録に成功しました'; ?></h1>
</div>
</body>
</html>