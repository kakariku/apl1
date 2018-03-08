<head>
<title>Find My Home</title>
<style type="text/css">

a.search,a.register{
  display:block;
  font-size:35px;
  height:60px;
  width: 250px;
  background-color:#CC000A;
  color: white;
  margin-right: auto;
  margin-left: auto;
  margin-bottom: 10px;
}
a.search:active,a.register:active{
  background-color:#CC000A;
  transform: translateY(2px);
}
</style>
</head>

<html>
<body>
<?php require('./common.php'); ?>

<!-- メニュー画面表示 -->
<div class="headline">
    <h1>メニューを選択してください</h1>
    <div class="button">
         <a href="http://home11.php.xdomain.jp/search.php" class="search">物件検索</a>
         <a href="http://home11.php.xdomain.jp/register.php" class="register" >駅情報登録</a>
    </div>
</div>
 
</body>
</html>
