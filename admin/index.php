<?php
include_once("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cine Araújo</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/materialize.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/form.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../js/materialize.js"></script>
    <script></script>
</head>

<body>
    <div id="container" class="z-depth-5">
        <div class="row">
            <div class="col s12">
                <ul class="tabs" style="overflow: hidden">
                    <li class="tab col s3"><a href="#insercao">Inserção</a></li>
                    <li class="tab col s3"><a href="#remocao">Remoção</a></li>
                </ul>
            </div>
            <div id="insercao" class="col s12">
                <form class="col s12" id="reg-form" enctype="multipart/form-data" method="post" action="add_movie.php">
                    <div class="row">
                        <div class="input-field col s6" style="padding-right: 5px">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="img"/>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s6" style="padding-left: 5px">
                            <input id="Nome" type="text" class="validate" name="nome"  >
                            <label for="Nome">Nome do Filme</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Nome" type="url" class="validate" name="link_trailer"  >
                            <label for="Nome">Trailer (Youtube)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6" style="padding-right: 5px">
                            <select name="legendado"  >
                                <option disabled selected>Nenhum</option>
                                <option value="0">Dublado</option>
                                <option value="1">Legendado</option>
                            </select>
                            <label>Dublado ou Legendado</label>
                        </div>
                        <div class="input-field col s6" style="padding-left: 5px">
                            <select name="3d"  >
                                <option value="" disabled selected>Nenhum</option>
                                <option value="1">3D</option>
                                <option value="0">2D</option>
                            </select>
                            <label>3D ou 2D</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6" style="padding-right: 5px">
                            <input id="dateInicial" type="text" class="datepicker" name="data_inicial"   />
                            <label for="dateInicial">Data Inicial</label>
                        </div>
                        <div class="input-field col s6" style="padding-left: 5px">
                            <input id="dateFinal" type="text" class="datepicker" name="data_final"   />
                            <label for="dateFinal">Data Final</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea type="sinopse" class="materialize-textarea" style="max-height: 50px"
                                name="sinopse"  ></textarea>
                            <label for="sinopse">Sinopse</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 center">
                            <button class="btn btn-large btn-register waves-effect waves-light" type="submit"
                                name="action">Registrar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="remocao" class="col s12">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4>Filmes Em Cartaz</h4>
                    </li>
                    <?php
                        include("get_movies.php");
                        echo get_list();
                    ?>
                </ul>
            </div>
        </div>
        <a title="Login" href='../index.php' class="ngl btn-floating btn-large waves-effect waves-light red"><i
                class="material-icons">power_settings_new</i></a>
    </div>
    <script>
        let options_carrousel = {
            indicators: true
        };

        document.addEventListener('DOMContentLoaded', function () {
            let elems_carrousel = document.querySelectorAll('.carousel');
            let instances_carrousel = M.Carousel.init(elems_carrousel, options_carrousel);
            setInterval(function () { instances_carrousel[0].next() }, 50000);

            let elems_tab = document.querySelectorAll('.tabs');
            let instance_tabs = M.Tabs.init(elems_tab);

            var elems_select = document.querySelectorAll('select');
            var instances_select = M.FormSelect.init(elems_select);

            var elems_date = document.querySelectorAll('.datepicker');
            var instances_date = M.Datepicker.init(elems_date);
        })

    </script>
</body>

</html>