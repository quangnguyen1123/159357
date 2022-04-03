<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost:40/websitemvc12/public/css/chitietsp.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require_once('./mvc/view/layout/header.php');?> 

<div class="card">
		
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                        action="/php/twig/frontend/giohang/themvaogiohang">
                        
                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <?php
                                     foreach ($chitiet as $item) {
  
                                    ?>
                                    <div class="tab-pane" id="pic-1">
                                        <img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>">
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                        <img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>">
                                    </div>
                                    <div class="tab-pane active" id="pic-3">
                                        <img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>">
                                    </div>
                                    <?php
                                     }
  
                                    ?>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <?php
                                     foreach ($chitiet as $item) {
  
                                    ?>
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                            <img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                            <img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                            <img src="http://localhost:40/websitemvc12/public/anh/<?php echo $item['tenanh'];?>">
                                        </a>
                                    </li>
                                    <?php
                                    }
  
                                    ?>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <?php
                                     foreach ($chitiet as $item) {
  
                                    ?>
                            
                                <h3 class="product-title"><?php echo $item['tensp'];?></h3>
                                <div class="rating">
                                 
                                    <span class="review-no">View: <?php echo $item['clicksanpham'];?></span>
                                </div>
                            
                                <small class="text-muted">Giá cũ: <s><span><?php echo $item['gia'];?> đ</span></s></small>
                                <h4 class="price">Giá hiện tại: <span><?php echo $item['gia'];?> đ</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!</p>
                                
                                
                                <div class="form-group">
                                    <form method="POST" action = "">

                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="text" class="form-control" id="soluong" name="soluong">
                                </form>
                                </div>
                                <div class="action">
                                    <a class="add-to-cart btn btn-default"href="spgiohang" id="btnThemVaoGioHang">Thêm vào giỏ hàng</a>
                                  <a class="like btn btn-default" href="giohang"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg></a>
                                </div>
                                <?php
                                     }
                                    ?>
                            </div>

                        </div>
                    </form>
                </div>
            

            <div class="card">
                <div class="container-fluid">
                    <?php
                     foreach ($chitiet as $item) {
                   ?>
                    <h3>Thông tin chi tiết về Sản phẩm</h3>
                    <div class="row">
                        <div class="col">
                            <?php echo $item['mota'];?>
                        </div>
                    </div>
                    <?php
                     }
  
                     ?>
                </div>
            </div>
        </div>




  <?php require_once('./mvc/view/layout/footer.php');?>
  
</body>
</html>

