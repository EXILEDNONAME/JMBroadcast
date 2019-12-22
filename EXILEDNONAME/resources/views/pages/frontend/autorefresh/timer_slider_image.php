<?php
include('database.php');
$sql = "SELECT * FROM setups WHERE id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) { while($row = $result->fetch_assoc()) { echo $row["timer_slider_image"]; } }
else { echo "0 results"; }
$conn->close();
?>
