<?php include "header.php" ?>
<?php
// ------------------------------------------------------update
if ($_GET['x']){
	$id = ($_GET['x']); 
	$titulo = ($_GET['t']);
	$descri = ($_GET['d']);
	$texto = ($_GET['c']);
	$url = ($_GET['u']);
	
$sql = "UPDATE folha SET titulo = '$titulo'  WHERE id = $id;";	
if ($conn->query($sql) === TRUE) {
    echo "New update titulo successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE folha SET descri = '$descri'  WHERE id = $id;";
if ($conn->query($sql) === TRUE) {
    echo "New update descrição successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE folha SET texto = '$texto'  WHERE id = $id;";
if ($conn->query($sql) === TRUE) {
    echo "New update notas successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE folha SET url = '$url'  WHERE id = $id;";
if ($conn->query($sql) === TRUE) {
    echo "New update url successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
//---------------------------------------------------------------
?>

 
<form action="<?php $_SERVER["PHP_SELF"] ; ?>" method="GET">
<table width="600" border="0" align="center" cellpadding="1" bgcolor="#cccccc">
        <tr>
            <td>ID<input type="text" name="i" value="<?php echo $id ?>" size="5" tabindex="1" /><input type="submit" id="submit" value="Vizualizar" tabindex="5" />
  <?php if ($_GET['i']){ $id = ($_GET['i']);?><input type="hidden" name="ia" value="<?php echo $id  ?>" size="4" tabindex="1" />"Ok"<input type="text" name="a" value=" " size="5" tabindex="1" /><input type="submit" id="submit" value="Apagar" tabindex="5" /><?php } ?> </td> 
        </tr>
    </table>
 
</form>
<?php
if (($_GET['a']) == "ok"){
	$ia = ($_GET['ia']);
	$sql = "DELETE FROM folha WHERE id = $ia;";
if ($conn->query($sql) === TRUE) {
    echo "New delete texto successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if ($_GET['i']){
	$id = ($_GET['i']);
$sql = "SELECT * FROM folha WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  ?>      
  <table cellpadding="1">
	  <form action="<?php $_SERVER["PHP_SELF"] ; ?>" method="GET">
        <tr>
			<td>Id</td>
			<td><input type="text" name="x" value="<?php echo $row["id"] ?>" size="5" tabindex="1" /></td>
		</tr>
		<tr>
            <td>Keys</td>
            <td><input type="text" name="t" value="<?php echo $row["titulo"] ?>" size="35" tabindex="3" /></td>
            <td>
        </tr>
         <tr>
            <td>Descrição</td>
            <td><input type="text" name="d" value="<?php echo $row["descri"] ?>" size="35" tabindex="4" /></td>
            <td></td>
        </tr>
		<tr>
			<td>Notas:</td>
			<td> <textarea name="c" rows="15" cols="75"><?php echo $row["texto"];?></textarea></td>
		</tr>
		<tr>
            <td>URL</td>
            <td><input type="text" name="u" value="<?php echo $row["url"] ?>" size="35" tabindex="5" />-------></td>
            <td><a href="<?php echo $row["url"] ?>" target="_blank">Link</a></td>
        </tr>
		 <td></td>
            <td><input type="submit" id="submit" value="Update" tabindex="6" /></td>
            <td></td>
            </form>
    </table>      
<?php   



    
    }
} else {
    echo "0 results";
}

}

?>

