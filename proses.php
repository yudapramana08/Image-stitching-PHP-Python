<?php 

include '/koneksi.php';
$file = $_POST['pilih'];
$judul = $_POST['judul'];
$jumlah_dipilih = count($file);



if($jumlah_dipilih <=1){
	echo "minimal 2";
        
}else{
    $sql = $conn->query("INSERT into hasil values('','$judul.jpg')");
    if($jumlah_dipilih ==2){

            
            $my_command = escapeshellcmd('python 2.py '.$file[0].' '.$file[1].' '.$judul);
            $command_output = shell_exec($my_command);
            echo $command_output;
           header('Location: hasil_stitching.php');
        }else if($jumlah_dipilih ==3){

            $my_command = escapeshellcmd('python 3.py '.$file[0].' '.$file[1].' '.$file[2].' '.$judul);
            $command_output = shell_exec($my_command);
            echo $command_output;

        }else if($jumlah_dipilih ==4){

            $my_command = escapeshellcmd('python 4.py '.$file[0].' '.$file[1].' '.$file[2].' '.$file[3].' '.$judul);
            $command_output = shell_exec($my_command);
            echo $command_output;
        }else{
            echo" baru sampe 4";
        }

}


?>
