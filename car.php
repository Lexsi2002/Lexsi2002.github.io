<html>
<head>
<title>Тест флаш</title>
<style>
.outer {
  display: table;
  position: absolute;
  height: 100%;
  width: 100%;
}

.middle {
  display: table-cell;
  vertical-align: middle;
}

.inner {
  margin-left: auto;
  margin-right: auto;
  width: 400px;
  /*whatever width you want*/
}
</style>
</head>
<body>
<div class="outer">
  <div class="middle">
    <div class="inner">
			<!--<object type="application/x-shockwave-flash" data="car.swf" width="450" height="300"><param name="movie" value="car.swf"></object>-->
			<iframe src = "car.swf" width="450" height="300">
    </div>
  </div>
</div>
</body>
</html>