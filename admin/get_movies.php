<?php
include_once("seguranca.php"); // Inclui o arquivo com o sistema de segurança
include_once("connect.php");
protegePagina(); // Chama a função que protege a página
?>

<?php
function get_list() {
    $conn = OpenCon();
    $resultado = $conn->query('SELECT `nome`, `id` FROM `filme`');
    $list = "";
    while($row = $resultado->fetch_assoc()) {
        $list .= '<li class="collection-item">
                    <div>'.$row["nome"].'<a href="delete_movies.php?id='.$row["id"].'" href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div>
                 </li>';
    }
    return $list;
}


?>