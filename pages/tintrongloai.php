<?php 
    $idLT = $_GET["idLT"];
    settype($idLT, "int");
 ?>

 <?php 
    $bc = breadcrumb($idLT);
    $row_bc = mysqli_fetch_array($bc);
  ?>
<div>
    <strong style="color: red">Trang Chủ >> <?php echo $row_bc['TenTL'] ?> >> <?php echo $row_bc['Ten'] ?></strong>
</div>
<?php 

    $sotin1trang = 4;
    if(isset($_GET["trang"]))
    {
        $trang = $_GET["trang"];
        settype($trang, "int");
    }
    else {
        $trang = 1;
    }
    $from = ($trang - 1) * $sotin1trang;
    $tintheoloai = TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang);
    while ($row_tintheoloai = mysqli_fetch_array($tintheoloai)) {
 ?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="chitiet/<?php echo $row_tintheoloai['idTin'] ?>-<?php echo $row_tintheoloai['TieuDe_KhongDau'] ?>.html"><?php echo $row_tintheoloai['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tintheoloai['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tintheoloai['TomTat'] ?> </div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<div class="clear"></div>
<?php 
    }
 ?>

<div id="phantrang">
 <?php 
 $t = TinTheoLoaiTin($idLT);
 $tongsotin = mysqli_num_rows($t); // Dem tong so tin
 $tongsotrang = ceil ($tongsotin/$sotin1trang); //Dem tong so tang lam tron len dung ceil, tron xuong dung round
 for ($i=1; $i <= $tongsotrang ; $i++) { 
     # code...
  ?>
    <a <?php if($i == $trang) echo "style = 'background-color : red' " ;?> href="index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>
<?php 
    }
 ?>
</div>
