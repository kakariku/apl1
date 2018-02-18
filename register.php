<html>
<body>
<?php require("./common.php"); ?>

<!-- 登録フォーム -->
<div class="top_page">
  <form action="http://home11.php.xdomain.jp/register_exec.php" method="post">
    県名:<select name="prefecture">
      <option value="tokyo">東京都</option>
      <option value="chiba">千葉県</option>
      <option value="saitama">埼玉県</option>
      <option value="kanagawa">神奈川県</option>
    </select><br>
    駅名:<input type="text" name="name" size="10"><br>
    東京まで:<input type="number" name="tokyo" min="1" style="width:5%;">分<br>
    新宿まで:<input type="number" name="sinjuku" min="1" style="width:5%;">分<br>
    渋谷まで:<input type="number" name="sibuya" min="1" style="width:5%;">分<br>
    青山まで:<input type="number" name="aoyama" min="1" style="width:5%;">分<br>
    <input type="submit" value="登録">
  </form>
</div>
</body>
</html>