<?php
include 'koneksi.php';



if(isset($_POST['upload'])){
	foreach($_FILES['myfile']['name'] as $key => $val){
		$name = $_FILES['myfile']['name'][$key];
		$tmp  = $_FILES['myfile']['tmp_name'][$key];
		if(trim($name)!=''){
			
			if(move_uploaded_file($tmp,'upload/'.$name)){

				$nama = $name;
				$sql = $conn->query("INSERT into file values('','$nama')");

				if($sql){
				echo 'Berhasil mengupload file '.$name.' ke Folder upload<br/>';
						}else{
							echo "gagal".$conn->error();
						}
			}
		}
	}
}
?>
<form method="post" enctype="multipart/form-data" action="">
<?php
for($i=1; $i<5; $i++){
?>
<input type="file" name="myfile[]"/><br/>
<?php } ?>
<input type="submit" name="upload" value="Upload"/>
</form>