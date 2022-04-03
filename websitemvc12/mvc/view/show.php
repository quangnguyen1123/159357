<!DOCTYPE html>
<html>
<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		 <link rel="stylesheet" href="http://localhost:40/websitemvc12/public/css/thongtin.css">
</head>
<body>
<?php require_once('./mvc/view/layout/header.php');?>  

 
<h2>THÔNG TIN NGƯỜI DÙNG</h2>


<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" method="post">
<?php
	foreach ($thongtin as $item) {
			
?>
<div class="formgroup" id="name-form">
    <label for="name">Tên người dùng: <?php echo $item['ten']?></label>
    
</div>
<div class="formgroup" id="name-form">
    <label for="name">Số điện thoại: <?php echo $item['sodt']?></label>
    
</div>
<div class="formgroup" id="email-form">
    <label for="email">E-mail: <?php echo  $item['email']?></label>
    
</div>
<div class="formgroup" id="email-form">
    <label for="email">Tuổi: <?php echo  $item['tuoi']?></label>
    
</div>
<div class="formgroup" id="message-form">
    <a href="showtime"><label for="message">lịch sử đăng nhập</label></a>
    		


</div>
<?php
}
?>
</form>

</div>
<?php require_once('./mvc/view/layout/footer.php');?>
</body>
</html>