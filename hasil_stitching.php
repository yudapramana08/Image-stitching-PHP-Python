

<?php
include 'koneksi.php';


  	$sql=("SELECT * from hasil order by id desc limit 1");
	$hasil=$conn->query($sql); ?>
<html>
<head>
	<title></title>
</head>
<body>
<?php while($data = $hasil->fetch_assoc()){ ?>
		<a href="index.php">Home</a>
		<img  src='stitching/<?php echo $data['file']; ?>' width='800px' height='400px' style='padding:10px;'>
		<?php echo $data['file']; ?>

<?php	}
?>
</body>
</html>
	