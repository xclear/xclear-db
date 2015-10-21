<?php include "header.php" ?>

 

<form action="<?php $_SERVER["PHP_SELF"] ; ?>" method="GET">
<table cellpadding="1">
        <tr>
            <td>Confirmar</td>
            <td><input type="text" name="i" value="<?php $i ?>" size="5" tabindex="1" />"ok"</td>
        </tr>
        <tr>
            <td>Keys</td>
            <td><input type="text" name="t" value="<?php $t ?>" size="35" tabindex="3" /></td>
            <td>
        </tr>
         <tr>
            <td>Descrição</td>
            <td><input type="text" name="d" value="<?php $d ?>" size="35" tabindex="4" /></td>
            <td></td>
        </tr>
		<tr>
			<td>Notas:</td>
			<td> <textarea name="c" rows="15" cols="75"><?php echo $c;?></textarea></td>
		</tr>
		<tr>
            <td>URL</td>
            <td><input type="text" name="u" value="<?php $u ?>" size="35" tabindex="4" /></td>
            <td></td>
        </tr>
		<tr>
            <td></td>
            <td><input type="submit" id="submit" value="Submeter Registo" tabindex="5" /></td>
            <td></td>
        </tr>
    </table>
 
</form>

<?php 
if (($_GET['i']) == "ok"){
	$id = ($_GET['i']); 
	$titulo = ($_GET['t']);
	$descri = ($_GET['d']);
	$comments = ($_GET['c']);
	$url = ($_GET['u']);
	
$sql = "INSERT INTO folha (titulo, descri, texto, url) VALUES ( '$titulo', '$descri', '$comments', '$url')";	
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
	echo " confirme novo registo";
}
 

?>


<?php
$conn->close();
?> 
