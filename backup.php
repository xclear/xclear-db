<?php include "header.php" ?>

<form action="<?php $_SERVER["PHP_SELF"] ; ?>" method="GET">
<table width="600" border="0" align="center" cellpadding="1" bgcolor="#cccccc">
        <tr>
      <td>Selecionar :<select name="q" required>
			<option value="">none</option>
			<option value="b">backup</option>
			<option value="r">Restore</option></select>
      <input type="submit" id="submit" value="Executar" tabindex="1" />- Download Backup --><a href="http://<?php echo $ip ?>/Backup.sql.gz">Link</a></td> 
        </tr>
    </table>
</form></br>


<?php

	if (($_GET['q']) == "b"){
		$cmdline = shell_exec("mysqldump -u root -p".$password." biblioteca > Backup.sql");
		echo "backup efectuado";
		
	}
	if (($_GET['q']) == "r"){
		$cmdline = shell_exec("mysql -u root -p".$password." biblioteca < Backup.sql");
		echo "restore efectuado";	
	}
	

?>
