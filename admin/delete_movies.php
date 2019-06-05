<?php
include_once("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>

<?php
include_once("connect.php");
$conn = OpenCon();
    if(isset($_GET['id'])) {
        $sql = "DELETE FROM `filme` WHERE `filme`.`id` = ".$_GET['id'].";";
		$conn->query($sql);
	}
	CloseCon($conn);
	header("Location: index.php");
?>