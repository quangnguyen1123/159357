<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <link rel="stylesheet" href="http://localhost:40/websitemvc12/public/css/thongtin.css">
</head>
<body>
<?php require_once('./mvc/view/layout/header.php');?>  

<h2>LỊCH SỬ NGƯỜI DÙNG</h2>
<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" method="post">
	<?php
	foreach ($thongtin as $item) {
	
		
?>
<div class="formgroup" id="name-form">
    <label for="name">Tên người dùng:<?php echo $item['ten']?> </label>
    
</div>
<?php
}
?>
<div class="formgroup" id="name-form">
    <label for="name">lịch sử người dùng:</label>
<?php
	foreach ($lichsu as $item) {
	
		
?>
<div class="formgroup" id="name-form">
    <label for="name"><?php echo $item['time']?></label>
    
</div>
<?php
}
?>
</form>
</div>

 <?php require_once('./mvc/view/layout/footer.php');?>
</body>
</html>