<html>
<body>
<?php
    require('./common.php');
    require('./def.php');
    require('./sec_def.php');
    $station=$_POST['station'];
    $minutes=esc($_POST['minutes']);
    $prefecture=$_POST['prefecture'];

    $sql_search_su="SELECT pre_id,line_id,sta_id FROM $tb_name_info INNER JOIN $tb_name_min ON $tb_name_info.name = $tb_name_min.name where prefecture='$prefecture' and $station<=$minutes and $station<>0";
    $sql_search_mi="SELECT sta_id FROM $tb_name_info2 INNER JOIN $tb_name_min ON $tb_name_info2.name = $tb_name_min.name where prefecture='$prefecture' and $station<=$minutes and $station<>0";
    $sql_con_su="SELECT url FROM $tb_name_con where name='su_most_con'";
    $sql_con_mi="SELECT url,url2 FROM $tb_name_con where name='mi_most_con'";

    //DBアクセス処理開始
    $mysqli=new mysqli($host,$user_name,$pass,$db_name);
    $res1 = $mysqli->query($sql_search_su);
    $res2 = $mysqli->query($sql_con_su);
    $res3 = $mysqli->query($sql_search_mi);
    $res4 = $mysqli->query($sql_con_mi);

    //検索結果取得
    $get_rows_su = mysqli_num_rows($res1);
    $get_rows_mi = mysqli_num_rows($res3);

    while($row = $res1->fetch_assoc()){
         $pre_id_su = '&'.$row['pre_id'];
         $sta_id_su .= '&'.$row['sta_id'];
         $line_id_su .= '&'.$row['line_id'];
    }

    while($row = $res2->fetch_assoc()){
         $url_su = $row['url'];
    }

    while($row = $res3->fetch_assoc()){
         $sta_id_mi .= $row['sta_id'].'|';
    }

    while($row = $res4->fetch_assoc()){
         $url_mi1 = $row['url'];
         $url_mi2 = $row['url2'];
    }

    //DBアクセス処理終了
    $mysqli->close();
    
    /*テスト用
    echo mysqli_num_rows($res1);
    echo mysqli_num_rows($res3);*/

?>

<!-- HPリンク表示処理 -->

<ul class="search_result">
  <?php if ($get_rows_su == 0 && $get_rows_mi == 0) : ?>
     <li><p>該当データはありません<br>検索し直してください</p></li>
  <?php elseif ($get_rows_su == 0) : ?>
     <li><a href=<?php echo $url_mi1.$prefecture.$url_mi2.$sta_id_mi ?> target="_blank">MINIMINIでの検索結果はこちら</a></li>
  <?php elseif ($get_rows_mi == 0) : ?>
     <li><a href=<?php echo $url_su.'&'.$pre_id_su.$sta_id_su.$line_id_su ?> target="_blank">SUUMOでの検索結果はこちら</a></li>
  <?php else : ?>
     <li><a href=<?php echo $url_su.'&'.$pre_id_su.$sta_id_su.$line_id_su ?> target="_blank">SUUMOでの検索結果はこちら</a></li>
     <li><a href=<?php echo $url_mi1.$prefecture.$url_mi2.$sta_id_mi ?> target="_blank">MINIMINIでの検索結果はこちら</a></li>
  <?php endif; ?>
</ul>
 
</body>
</html>