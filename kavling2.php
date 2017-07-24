<?php
include "kon_db.php";
?>
<div class="banner"> <img src="img/denahkavling0.jpg" alt="kavling al huda"> </div>
<div class="content_bottom">
		<h3>Kavling yang Sudah Dipesan</h3>
		<table width="70%">
			<tr>
			<?php
			$index = 0;
			$query=mysqli_query($koneksi, "select * from t_pemesan where app=1 order by kd_kavling");
			while($row=mysqli_fetch_array($query)) {
			?>
				<td valign="middle"><?php echo $row['kd_kavling'];?></td>
				<?php
					$index += 1;
					if ( $index % 3 == 0 ){
						echo( "</tr><tr>" ); 
					} ?>
			<?php 
			} ?>
		</table>
		<h3>Kavling yang Belum Dipesan</h3>
		<table width="70%">
			<tr>
			<?php
			$index1 = 0;
			$query1=mysqli_query($koneksi, "select * from t_kavling where status=0 order by kd_kavling");
			while($row1=mysqli_fetch_array($query1)) {
			?>
				<td valign="middle"><?php echo $row1['kd_kavling'];?> <a href="?page=detail_kavling&kd_kavling=<?php echo $row1['kd_kavling'];?>"><strong>&raquo;&raquo;Detail</strong></a></td>
				<?php
					$index1 += 1;
					if ( $index1 % 3 == 0 ){
						echo( "</tr><tr>" ); 
					} ?>
			<?php  
			} ?>
		</table>
</div>