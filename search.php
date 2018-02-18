<html>
<head>

<style type="text/css">
input{
  margin-top:10px;
}
</style>
</head>
<body>
<?php require('./common.php'); ?>

<!-- 検索フォーム表示 -->
<div class="headline">
  <h1>お好みの物件が検索できます</h1>
  <form action="http://home11.php.xdomain.jp/search_exec.php" method="post">
    <select name="station">
      <option value="to_tokyo">東京駅</option>
      <option value="to_sinjuku">新宿駅</option>
      <option value="to_sibuya">渋谷駅</option>
      <option value="to_aoyama">青山駅</option>
    </select>まで電車で
    <input type="number" name="minutes" step="5" style="width:5%;" min="0" required>分以内の物件を
    <select name="prefecture">
      <option value="tokyo">東京都</option>
      <option value="saitama">埼玉県</option>
      <option value="chiba">千葉県</option>
      <option value="kanagawa">神奈川県</option>
      <option value="kyoto">京都府</option>
      <option value="osaka">大阪府</option>
      <option value="hyogo">兵庫県</option>
    </select>内から検索します
    <br><input type="submit" value="検索">
  </form>
</div>
</body>
</html>