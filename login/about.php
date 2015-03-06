

<?php
$con = mysql_connect('localhost', 'root', 'root');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("new_site", $con);

$id =$_REQUEST['Id'];

$result = mysql_query("SELECT * FROM About WHERE Id  = '1'");
$row = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Title=$row['about'] ;
				
				

if(isset($_POST['save']))
{	
	$title_save = $_POST['content'];
	
	

	mysql_query("UPDATE About SET about ='$title_save' WHERE Id = '1'")
				or die(mysql_error()); 
	echo "<h3>About Info Has Been Updated!</h3>";

	//echo "<script>function reloadPage() { location.reload() } </script>";
	echo "<script>location.reload()</script>";
}
mysql_close();
?>

<head>
<title>Edit About Info</title>
<link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>
<form method="post" enctype="multipart/form-data">

<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	plugins: "anchor,preview,media,link,image,table,spellchecker",
    selector: "textarea",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | image | anchor | fontsizeselect"
 
 });
</script>
<body>
<h1 style="text-align: center;">Edit Your About Information</h1>
<br>

<a href="index.php">Back to admin index</a>
<br>
<br>
<textarea name="content" id='content' style="width:100%; height:500px;" ><?php echo $Title ?></textarea>
<input TYPE="submit" name="save" value="Submit"/>
</form>


</body>