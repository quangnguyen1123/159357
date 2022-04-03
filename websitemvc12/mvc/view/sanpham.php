<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
<?php require_once('./mvc/view/layout/header.php');?> 
<div>
	<?php
	foreach ($danhmucsanpham as $item) {	
	?>
	<h2 align="center"><?php echo $item['tendanhmuc'];?></h2>
	<?php
	}
	?>
	
	
  <div class="container">
 		<div class="content">
        	<div class= "row">

	  		<?php
       		 foreach ($danhmucsp as $item) {
        	?>
	  		<div class ="col-12 col-sm-6 col-md-4 image">
	  		<a href = "chitietsanpham?idsp=<?php echo $item['idsp'];?>"><img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>"></a>
	  		<table>
	  		<tr class="row">
	  		<th  class="row1" align="center"><a href = "chitietsanpham?idsp=<?php echo $item['idsp'];?>"><?php echo $item['tensp'];?></a></th>
	  		<th  class="row1" align="center"><a href = "chitietsanpham?idsp=<?php echo $item['idsp'];?>">chi tiết sản phẩm</a></th>
	  		</tr>
	  		</table>
	  		</div>
	  		<?php
       		}
       		?>
	  	
      		</div>
    	</div>
  	</div>


<?php
  include('layout/footer.php');
  ?>

</body>
</html>