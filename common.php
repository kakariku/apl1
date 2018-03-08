<head>
<title>Find My Home</title>

<!-- CSS設定 -->
<style type="text/css">
.header_text {
  background-color: #F5B2B2;
  font-size: 25px;
  width: 100%;
  text-align:center;
}
.header_menus {
  padding-right: 20px;
  left: 75%;
  position:relative;
}

.header_menus li {
  font-size: 13px;
  top:-54px;
  color: #000000;
  list-style:none;
  position:absolute;
  overflow:hidden;
  display:block;
  width:40px;
  text-align:center;
}

.li1{
  left:0%;
}

.li2 {
  left:10%;
}

.li3 {
  left:20%;
}

.search_result li {
  display:block;
  text-align:center;
}

.headline,.top_page,p{
  text-align: center;
}

a {
  text-decoration: none;
  color:black;
}

a:hover {
  cursor: pointer;
}

.header_menus li:hover {
  background-color:#FFF9B1;
}

</style>
</head>
<html>
<!-- 共通ヘッダー -->
<body>
  <header>
    <div class="header_text">
      <h1>Find My Home</h1>
    </div>
      <ul class="header_menus">
        <li class="li1">
          <a href="http://home11.php.xdomain.jp">TOP</a>
        </li>
        <li class="li2">
          <a href="http://home11.php.xdomain.jp/search.php">検索</a>
        </li>
        <li class="li3">
          <a href="http://home11.php.xdomain.jp/register.php">登録</a>
        </li>
      </ul>
    </header>
</body>
</html>

<!-- 共通関数 -->
<?php 
  function esc($str) {
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
 }
?>

