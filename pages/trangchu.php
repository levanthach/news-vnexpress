<?php 
     $theloai = DanhSachTheLoai();
    while($row_theloai = mysqli_fetch_array($theloai)) {
    $idTL = $row_theloai['idTL'];
 ?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $row_theloai['TenTL'] ?></a>
        </div>
        <div class="child-cat">
        	<?php 
              $tintheoloai = DanhSachTinTheoTheLoai($idTL);
              while($row_tintheoloai = mysqli_fetch_array($tintheoloai)){
             ?>
            <a href="./index.php?p=tintrongloai&idLT=<?php echo $row_tintheoloai['idLT'] ?>"><?php echo $row_tintheoloai['Ten'] ?></a>
            <?php 
                }
             ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <?php 
                        $tinmoitrai = TinMoi_BenTrai($idTL);
                        $row_tinmoitrai = mysqli_fetch_array($tinmoitrai);
                     ?>
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoitrai['idTin'] ?>"><?php echo $row_tinmoitrai['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoitrai['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoitrai['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
             <?php 
                $tinmoiphai =  TinMoi_BenPhai($idTL);
                while ($row_tinmoiphai = mysqli_fetch_array($tinmoiphai)) {
              ?> 
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoiphai['idTin'] ?>"> <?php echo $row_tinmoiphai['TieuDe'] ?> </a>
                </a></p>
                
             <?php 
                }
              ?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>

<?php 
    }
 ?>
<!-- box cat-->


