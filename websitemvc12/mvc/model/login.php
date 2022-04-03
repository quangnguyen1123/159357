<?php
	
class user extends database
{

	public function dangnhap($a,$b)
	{
				
				$sql = "SELECT * FROM user where taikhoan = '$a' and matkhau ='$b' ";
				$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
				$hang = mysqli_fetch_array($ketqua);
				
				if ($hang != 0){
					$_SESSION['id'] = $hang['iduser'];
					return true;	   
				}
					else{
						return false;
						
					}
				//Hiển thị kết quả truy vấn dưới dạng  mảng
				
	}

	public function timedangnhap()
	{
			date_default_timezone_set("Asia/Ho_Chi_Minh");
    		$time = date("Y-m-d H:i:s");
    		$id = $_SESSION['id'];
    		$sql = "INSERT INTO timedangnhap (userid ,timeuser) VALUES('$id','$time')";
    		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
    	

	}


	public function dangki($matkhau,$taikhoan,$tenuser,$tuoi,$sodt,$email)
	{
	
	
			$sql = "INSERT INTO user (matkhau,taikhoan,tenuser,tuoi,sodt,email) VALUES('$matkhau','$taikhoan','$tenuser','$tuoi','$sodt','$email')";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
			
			header("location: ../home/login");
			
	}
	public function show($taikhoan)
	{
    		$sql = "SELECT tenuser,tuoi,email,sodt FROM user WHERE taikhoan = '$taikhoan' ";
			$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error());
			
			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['ten'] = $hang['tenuser'];
				$item['sodt'] =  $hang['sodt'];
				$item['email'] =$hang['email'];
				$item['tuoi'] = $hang['tuoi'];
				$arr[]= $item;
			}
				
			return $arr;
	}
	

	public function showtimeuser()
	{
			$id = $_SESSION['id'];

    		$sql = "SELECT tenuser,timeuser,iduser, userid FROM user,timedangnhap WHERE iduser = '$id' and iduser = userid";
			$ketqua = mysqli_query($this->link, $sql);
			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['time'] =  $hang['timeuser'];
				$arr[]= $item;
			}
				
			return $arr;

	}
	public function index()
	{

	  		$sql ="SELECT tenanh,tensp,idsp FROM hinhanhsp,sanpham where maanhsp = maanh ";
		 	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
			
				$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp']= $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['tensp'] =  $hang['tensp'];
				$arr[]= $item;
			}
			
			return $arr;
	}
	
	public function soluongclicksp()
	{
		if(isset($_GET['idsp'])){
		$_SESSION['idsp']=$_GET['idsp'];
	}
		$idsp =$_SESSION['idsp'];
		$sql = "UPDATE sanpham SET clicksanpham = clicksanpham+1 WHERE idsp = '$idsp'";
		$ketqua = mysqli_query($this->link, $sql);
	}

	public function timeclicksp()
	{
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$time = date("Y-m-d H:i:s");
		$a = 'sanpham';
		$idsp = $_SESSION['idsp'];
		$sql = "INSERT INTO clicksanpham (idparent,timeclick,type) VALUES('$idsp','$time','$a')";
		$ketqua = mysqli_query($this->link, $sql);	
	}

	public function chitietsp()
	{
		$idsp = $_SESSION['idsp'];
		$sql ="SELECT tensp,idsp,mota,ngaysx,gia,clicksanpham,tenanh FROM sanpham,hinhanhsp where idsp = '$idsp'and maanh = maanhsp ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 

			$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['tensp'] = $hang['tensp'];
				$item['mota'] =  $hang['mota'];
				$item['ngaysx'] =$hang['ngaysx'];
				$item['gia'] = $hang['gia'];
				$item['clicksanpham'] = $hang['clicksanpham'];
				$item['tenanh'] = $hang['tenanh'];
				$arr[]= $item;
			}
				
			return $arr;
	}

	public function clickdanhmuc()
	{
		if(isset($_GET['iddmuc'])){
		$_SESSION['iddm']=$_GET['iddmuc'];
		}
		$iddmuc = $_SESSION['iddm'];
		$sql = "UPDATE danhmuc SET clickdanhmuc = clickdanhmuc+1 WHERE id = '$iddmuc'";
		$ketqua = mysqli_query($this->link, $sql);

	}
	public function timeclickdanhmuc()
	{
		$iddmuc = $_SESSION['iddm'];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$time = date("Y-m-d H:i:s");
		$sql = "INSERT INTO clicksanpham (idparent,timeclick) VALUES('$iddmuc','$time')";
		$ketqua = mysqli_query($this->link, $sql);
	}
	public function danhmuccha()
	{
		$iddmuc = $_SESSION['iddm'];
		$sql ="SELECT tendanhmuc FROM danhmuc where id = '$iddmuc' ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				
				$item['tendanhmuc'] = $hang['tendanhmuc'];
				
				$arr[]= $item;
			}
				
			return $arr;
	}
	public function danhmuccon()
	{
		$iddmuc = $_SESSION['iddm'];
		$sql ="SELECT tendanhmuc,id,clickdanhmuc,parent FROM danhmuc where parent = '$iddmuc' ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['iddmuc'] = $hang['id'];
				$item['tendanhmuc'] = $hang['tendanhmuc'];
				$arr[]= $item;
			}
				
			return $arr;
	}
	
	public function sanpham()
	{
		$iddmuc = $_SESSION['iddm'];
	  	if('parent' == 0){
	  			
	  	$sql ="SELECT tenanh,tensp,iddanhmuc,idsp,id,parent FROM hinhanhsp,sanpham,danhmuc where maanhsp = maanh and parent = '$iddmuc' and id = iddanhmuc ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp']= $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['tensp'] =  $hang['tensp'];
				$arr[]= $item;
			}
			
			return $arr;
	  		
	  	}else{			
	  	$sql ="SELECT tenanh,tensp,iddanhmuc,idsp FROM hinhanhsp,sanpham where maanhsp = maanh and iddanhmuc = '$iddmuc' ";
		$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
		$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['idsp']= $hang['idsp'];
				$item['tenanh'] = $hang['tenanh'];
				$item['tensp'] =  $hang['tensp'];
				$arr[]= $item;
			}
			return $arr;
	  		} 
	}

	public function danhmuc1()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 1 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;

	}	
	public function danhmuc2()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 2 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
       	
	}
	public function danhmuc3()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 3 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
       	
	}
	public function danhmuc4()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 4 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
       	
	}
	public function danhmuc5()
	{
		$sql ="SELECT tendanhmuc,id FROM danhmuc where id = 5 ";
        $ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
       	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
       	
	}


	public function danhmuccon1()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '1' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}
	public function danhmuccon2()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '2' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}
	public function danhmuccon3()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '3' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}
	public function danhmuccon4()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '4' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		 

	}
	public function danhmuccon5()
	{
		$sql ="SELECT tendanhmuc,parent,id FROM danhmuc where parent = '5' ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tendanhmuc']= $hang['tendanhmuc'];
				$item['id'] = $hang['id'];
				$arr[]= $item;
			}
			return $arr;
	  		

	}	

	public function spgiohang($soluong)
	{	
		
		
		$idsp = $_SESSION['idsp'];
		$id = $_SESSION['id'];
		
		$sql = "INSERT INTO giohang (idtaikhoan,idspgiohang,soluong) VALUES('$id','$idsp','$soluong')";
		$ketqua = mysqli_query($this->link, $sql);
		header("location: ../home/index");

	}

	public function giohang()
	{	
		$id = $_SESSION['id'];
		$sql ="SELECT tenanh,tensp,idsp,mota,gia,soluong FROM hinhanhsp,sanpham,giohang where maanhsp = maanh and idtaikhoan = '$id' and idspgiohang=idsp ";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	$arr =[];
			while ($hang = mysqli_fetch_array($ketqua)) {
				$item['tenanh']= $hang['tenanh'];
				$item['tensp']= $hang['tensp'];
				$item['mota']= $hang['mota'];
				$item['gia']= $hang['gia'];
				$arr[]= $item;
			}
			return $arr;
	}

	public function xoa(){
		$idsp = $_SESSION['idsp'];
		$sql ="DELETE FROM giohang where  idspgiohang = '$idsp'";
      	$ketqua = mysqli_query($this->link, $sql) or die (mysqli_error()); 
      	header("location: ../home/giohang");
	}






}
	
			
?>