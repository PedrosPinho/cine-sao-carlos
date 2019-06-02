<?php
	include("../admin/connect.php");
	$conn = OpenCon();
    if(isset($_GET['image_id'])) {
        $sql = "SELECT img FROM filme WHERE id=" . $_GET['image_id'];
		$result = $conn->query($sql);
		
while($row = $result->fetch_assoc()){
		header("Content-type: image/jpg");
		echo $row["img"];
}
	}
	CloseCon($conn);
?>