<?php include "header.php" ?>

 

	<?php
$sql = "SELECT id, titulo, descri FROM folha";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " | " . $row["titulo"]. " | " . $row["descri"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
