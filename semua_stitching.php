

<?php
include 'koneksi.php';


  	$sql=("SELECT * from hasil ");
	$hasil=$conn->query($sql); ?>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">Home</a>
	<table border='0'>
<?php while($data = $hasil->fetch_assoc()){ ?>
		<tr>
		<td><img  src='stitching/<?php echo $data['file']; ?>' width='800px' height='400px' style='padding:10px;'>
		<center><?php echo $data['file']; ?></td></center>
		</tr>
<?php	}
?>
</table>
</body>
</html>
	