<html>
<head>
	<meta charset = "UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:40/websitemvc12/public/css/index.css">
</head>
<body>
<div class = "logo">
    <img src="http://localhost:40/websitemvc12/public/anh/logo.jpg" width="500" height="230">
  </div>
    
 
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">AKASAI Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link" href = "index" id="navbarDropdown">Trang chủ</a>
        </li>

        <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc1 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon1 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        <div class="dropdown-divider"></div>
          <?php } ?>
          </ul>
        </li>

         <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc2 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon2 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        <div class="dropdown-divider"></div>
          <?php } ?>
          </ul>
        </li>

         <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc3 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon3 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        <div class="dropdown-divider"></div>
          <?php } ?>
          </ul>
        </li>


         <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc4 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon4 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        <div class="dropdown-divider"></div>
          <?php } ?>
          </ul>
        </li>

         <li class="nav-item dropdown">
        <?php
          foreach ($danhmuc5 as $item) {
          ?>
           <a class="nav-link" href = "danhmuc?iddmuc=<?php echo $item['id'];?>" id="navbarDropdown"><?php echo $item['tendanhmuc'];?></a>
          <?php
           }
         ?>
         <ul class="dropdown-content">
        <?php
          foreach ($danhmuccon5 as $item) {
          ?>
        <li><a class="dropdown-item" href = "sanpham?iddmuc=<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];?></a></li>
        <div class="dropdown-divider"></div>
          <?php } ?>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
           <a class="nav-link" href = "index.php" id="navbarDropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
</svg></a>
          <ul class="dropdown-content">
           
        <li><a class="dropdown-item" href = "show">thông tin user</a></li>
        <li><a class="dropdown-item" href = "logout">đăng xuất</a></li>
        <div class="dropdown-divider"></div>
          </ul>
        </li>
        <li class="nav-item dropdown">
           <a class="dropdown-item" href = "giohang"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg></a>
         
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>