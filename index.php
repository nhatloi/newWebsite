<?php 
	@session_start();
 	require ('include/cc.php'); 
	//kiem Tra Dang Nhap
	$thongbaoTK="";
	if(isset($_POST['txttendangnhap']) && isset($_POST['txtpass']))
	{	
		$tendangnhap=$_POST['txttendangnhap'];
		$pass=$_POST['txtpass'];
		
		$strSQL="SELECT *  FROM khach_hang WHERE ten_dn = '{$tendangnhap}' AND mat_khau = '{$pass}'";
		$khachhang=mysql_query($strSQL,$ung);
		
		//Kiem Tra Du Lieu-Neu Co Luu Vao SS-Neu Khong Bao Loi//
		if(mysql_num_rows($khachhang)>0)
		{
			//lay ten luu vao SS//
			$rowDN=mysql_fetch_array($khachhang);
			$_SESSION['hovaten']=$rowDN['ho_kh']." ".$rowDN['ten_kh'];
			$_SESSION['makhachhang']=$rowDN['ma_kh'];
		}
		else
			$thongbaoTK="Sai Tên Đăng Nhập Hoặc Mật Khẩu";
	}
	
?>
