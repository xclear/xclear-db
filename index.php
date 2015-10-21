<?php include "header.php" ?>   
    <body>
	

<form action="<?php $_SERVER["PHP_SELF"] ; ?>" method="GET">
<table width="600" border="0" align="center" cellpadding="1" bgcolor="#cccccc">
        <tr>
      <td><select name="q" required>
			<option value="t">titulo</option>
			<option value="d">descrição</option></select>
		  <input type="text" name="p" value="<?php echo $procurar ?>" size="28" tabindex="1" />
      <input type="submit" id="submit" value="procurar" tabindex="5" /></td> 
        </tr>
    </table>
 
</form>

<?php
if (($_GET['q']) == "t"){
	$lugar = "titulo";
}else{
	$lugar = "descri";
}
if ($_GET['p'])	{
	$procurar = ($_GET['p']);
$sql = "SELECT * FROM folha WHERE $lugar LIKE '%$procurar%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo ('<a href="http://'.$ip.'/select.php?i=' . $row["id"]. '"> - Name: ' . $row["titulo"]. ' ' . $row["descri"]. '</a><br>');
    }
} else {
    echo "0 results";
}
}
$conn->close();
?> 
