<?php 
	function TinMoiNhat_MotTin() {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$sql = "
			SELECT * FROM tin
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		return $result;
	}	
	function TinMoiNhat_BonTin() {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$sql = "
			SELECT * FROM tin
			ORDER BY idTin DESC
			LIMIT 1,4
		";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		return $result;
	}

	function TinXemNhieuNhat() {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$sql = "
			SELECT * FROM tin
			ORDER BY SoLanXem DESC
			LIMIT 0,6
		";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		return $result;
	}

	function TinMoiNhat_TheoLoaiTin_MotTin($idLT) {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$sql = "
			SELECT * FROM tin
			WHERE idLT = $idLT
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		return $result;
	}	
	function TinMoiNhat_TheoLoaiTin_BonTin($idLT) {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$sql = "
			SELECT * FROM tin
			WHERE idLT = $idLT
			ORDER BY idTin DESC
			LIMIT 1,4
		";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		return $result;
	}

	function TenLoaiTin($idLT) {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$sql ="
			SELECT Ten
			FROM LoaiTin 
			WHERE idLT = $idLT
		";
		$loaitin = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($loaitin);
		return $row['Ten'];
	}

	function QuangCao($vitri){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qc = "
			SELECT * FROM quangcao 
			WHERE vitri = $vitri
		";
		return mysqli_query($con,$qc);
	}
	function DanhSachTheLoai() {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM theloai
		";
		return mysqli_query($con,$qr);
	}
	function DanhSachTinTheoTheLoai($idTL) {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM loaitin 
			WHERE idTL = $idTL
		";
		return mysqli_query($con,$qr);
	}
	function TinMoi_BenTrai($idTL){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM tin
			WHERE idTL = $idTL
			ORDER BY idTin DESC
			LIMIT 0,1
		";	
		return mysqli_query($con,$qr);
	}
	function TinMoi_BenPhai($idTL){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM tin
			WHERE idTL = $idTL
			ORDER BY idTin DESC
			LIMIT 1,2
		";	
		return mysqli_query($con,$qr);
	}
	function TinTheoLoaiTin($idLT){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM tin
			WHERE idLT = $idLT
			ORDER BY idTin DESC
		";
		return mysqli_query($con,$qr);
	}
	function TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM tin
			WHERE idLT = $idLT
			ORDER BY idTin DESC
			LIMIT $from, $sotin1trang
		";
		return mysqli_query($con,$qr);
	}
	function breadcrumb($idLT){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT TenTL, Ten
			FROM theloai, loaitin
			WHERE theloai.idTL = loaitin.idTL
			AND idLT = $idLT
		";
		return mysqli_query($con,$qr);
	}
	function ChiTietTin($idTin) {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM tin
			WHERE idTin = $idTin
		";
		return mysqli_query($con,$qr);
	}
	function TinCungLoaiTin($idTin, $idLT){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr = "
			SELECT * FROM tin
			WHERE idTin <> $idTin
			AND idLT = $idLT
			ORDER BY rand()
			LIMIT 0,3 
		";
		return mysqli_query($con,$qr);
	}
	function CapNhatSoLanXemTin($idTin) {
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr = "
			UPDATE tin
			SET SoLanXem = SoLanXem + 1
			WHERE idTin = $idTin
		";
		mysqli_query($con,$qr);
	}
	function TimKiemTin($tukhoa){
		$con = mysqli_connect("localhost","root");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_select_db($con,"thachle.vn");
		$qr ="
			SELECT * FROM tin
			WHERE TieuDe  REGEXP '$tukhoa'
			ORDER BY idTin DESC
		";
		return mysqli_query($con,$qr);
	}
 ?>