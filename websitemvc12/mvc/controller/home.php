<?php 
    
    class home extends controller{


    public function check()
    {
        if (!isset($_SESSION['CheckLogin'])) {
            $dn = $this->view('login');
        }
        
        $this->view('index',[
            'controller'    => 'home',
            'view'          => 'home'
        ]);
    }

     public function index()
    {
        $this->model('login');
        $db = new user;
        $sanpham = $db->index(); 

        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();

        include "./mvc/view/index.php";
    }

    public function login()
    {
        unset($_SESSION['CheckLogin']);
        if(isset($_POST['taikhoan']) && $_POST['matkhau']) 
                {

                $taikhoan =$_POST['taikhoan'];
                $matkhau=$_POST['matkhau'];
                 $this->model('login');
                $db = new user;
                $login = $db->dangnhap($taikhoan,$matkhau);
                $_SESSION['taikhoan'] = $taikhoan;
                if ($login==true)
                {
               //kết nối đến trang khác
                    $db->timedangnhap();
                    $_SESSION['CheckLogin']='cmdjcndjm';
                header("location: ../home/index");
                } 
                else
                {echo '<script language="javascript">';
echo 'alert("thông tin sai nhập lại thông tin")';
echo '</script>';}
                
    }else{
    $this->view('login');
        }

}

    public function dangki()
    {
    if(isset($_POST['them']))
        {
        
        $matkhau=$_POST['matkhau'];
        $taikhoan=$_POST['taikhoan'];
        $tenuser=$_POST['tenuser'];
        $tuoi=$_POST['tuoi'];
        $sodt=$_POST['sodt'];
        $email=$_POST['email'];

        $this->model('login');
          $db = new user;
        $dangki = $db->dangki($matkhau, $taikhoan, $tenuser, $tuoi, $sodt, $email);
        
    }else{
         $this->view('dangki');
    }
}
 


public function show()
    {

     $this->model('login');
       $db = new user;
       $thongtin = $db->show($_SESSION['taikhoan']);  


       $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();   
        include "./mvc/view/show.php";

     }

     public function showtime()
    {

     $this->model('login');
       $db = new user;
       $lichsu = $db->showtimeuser(); 
        $thongtin = $db->show($_SESSION['taikhoan']);  

        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();  
        include "./mvc/view/showtimeuser.php";

     }

    public function chitietsanpham()
    {
        if(isset($_POST['soluong']))
        {
        $soluong=$_POST['soluong'];
        $_SESSION['soluong']=$soluong;
        }
        
        $this->model('login');
        $db = new user;
        $db->soluongclicksp(); 
        $db->timeclicksp();  
        $chitiet = $db->chitietsp(); 

        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();
        
        include "./mvc/view/chitietsp.php";
        
    }

    public function danhmuc()
    {
        $this->model('login');
        $db = new user;
        $db->clickdanhmuc(); 
        $db->timeclickdanhmuc();
        $danhmuccha = $db->danhmuccha();  
        $danhmuccon = $db->danhmuccon(); 

        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();
        include "./mvc/view/danhmuc.php";
    }

    public function sanpham()
    {
        $this->model('login');
        $db = new user;
        $db->clickdanhmuc(); 
        $db->timeclickdanhmuc();
        $danhmucsanpham = $db->danhmuccha();
        $danhmucsp = $db->sanpham(); 

        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();
        include "./mvc/view/sanpham.php";

    }
    public function spgiohang(){
        $this->model('login');
        $db = new user;
        $sp = $db->spgiohang($_SESSION['soluong']);

        

    }

    public function giohang()
    {

        $this->model('login');
        $db = new user;
        $giohang = $db->giohang();

        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();
        include "./mvc/view/giohang.php";
    }
     
    

    public function head()
    {
        $this->model('login');
        $db = new user;
        $danhmuc1 = $db->danhmuc1();
        $danhmuc2 = $db->danhmuc2();
        $danhmuc3 = $db->danhmuc3();
        $danhmuc4 = $db->danhmuc4();
        $danhmuc5 = $db->danhmuc5();
        $danhmuccon1 = $db->danhmuccon1();
        $danhmuccon2 = $db->danhmuccon2();
        $danhmuccon3 = $db->danhmuccon3();
        $danhmuccon4 = $db->danhmuccon4();
        $danhmuccon5 = $db->danhmuccon5();
        include "./mvc/view/layout/header.php";

    }

    public function logout()
    {
        unset($_SESSION['CheckLogin']);
           header("location: ../home/login");
                
    }

    
}




 ?>