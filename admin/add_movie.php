<?php
include("seguranca.php");
include("connect.php");
protegePagina();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
    $link_trailer = (isset($_POST['link_trailer'])) ? $_POST['link_trailer'] : '';
    $legendado = (isset($_POST['legendado'])) ? $_POST['legendado'] : '';
    $dim = (isset($_POST['3d'])) ? $_POST['3d'] : '';
    $data_inicio = (isset($_POST['data_inicio'])) ? $_POST['data_inicio'] : '';
    $data_fim = (isset($_POST['data_fim'])) ? $_POST['data_fim'] : '';
    $sinopse = (isset($_POST['sinopse'])) ? $_POST['sinopse'] : '';
    // echo ;
    $conn = OpenCon();
    echo $conn->query('INSERT INTO `filme` (`nome`, `link_trailer`, `legendado`, `3d`, `data_inicio`, `data_fim`, `sinopse`, `img`)  VALUES ("'.$nome.'", "'.$link_trailer.'", "'.$legendado.'", "'.$dim.'", "'.$data_inicio.'","'.$data_fim.'", "'.$sinopse.'", "'.mysqli_escape_string($conn, file_get_contents($_FILES["img"]["tmp_name"])).'")');
    header("Location: index.php");
}

?>