<?php
include 'koneksi.php';


  	$sql=("SELECT * from file ");
	$hasil=$conn->query($sql); ?>

<a href="semua_stitching.php">hasil Stitching</a>
<form action="proses.php" method="post">	   
<table border="0" cellpadding="10" align=center margin="10">
  <tr>


		
	<?php	if($hasil->num_rows > 0){
		$jml_kolom=9; 
  		$cnt = 0;

						while($data = $hasil->fetch_assoc()){ 
						if ($cnt >= $jml_kolom) 
      						{
        					echo "</tr><tr>";
         					$cnt = 0;
 							}
  							$cnt++;
						?>
						 <td align=center>       
  					     <div>
  					     <img  src='upload/<?php echo $data['nama']; ?>' width='100px' height='200px' style='padding:10px;'>
     					 </div>     
    					 <table  align=center>
    					 <tr><td><?php echo $data['nama']; ?></td></tr>
			             <tr><td><input type="checkbox" name="pilih[]" value="<?php echo $data['nama']; ?>"></td></tr>
			             
    					 <tr><td><br></td></tr>
   						 </table>

						
							
							
						<?php } ?>
						
						</tr>

						</table>
						nama file :
						<input type="text" name="judul" textbox="masukan nama panorama" required><br><br>
						<input type="submit" name="submit" value="submit">
						</form>
						<br>

 						
 
 
		



<?php }else{
	echo"<center>Data tidak ditemukan</center>";
}

?>
