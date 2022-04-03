<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link rel="stylesheet" href="http://localhost:40/websitemvc12/public/css/danhmuc.css">
</head>
<body>
  <?php require_once('./mvc/view/layout/header.php');?> 
<div>
	<?php
	foreach ($danhmuccha as $item) {	
	?>
	<h2 align="center"><?php echo $item['tendanhmuc'];?></h2>
	<?php
	}
	?>

	<?php
	foreach ($danhmuccon as $item) {	
	?>
			<form>
	  		<button ><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['iddmuc'];?> "><?php echo $item['tendanhmuc'];?></a></button>	  		
	  		<div class="dropdown-divider"></div>
	  		</form>
	<?php
	}
	?>
	
	  		
</div>


   <?php
  include('layout/footer.php');
  ?>

</body>
</html>