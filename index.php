<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cine Sao Carlos</title>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/materialize.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="./js/materialize.js"></script>
    <script></script>
</head>

<header class="navbar-fixed">
    <nav class="nav-center">
        <div class=" nav-wrapper black">
            <a href="#" class="brand-logo">Cine Sao Carlos</a>
            <ul id="nav-mobile" class="hide-on-med-and-down">
                <li><a href="#home">Home</a></li>
                <li><a href="#cartaz">Em cartaz</a></li>
                <li><a href="#proximo">Proximos</a></li>
                <li><a href="#informacoes">Informacoes</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="./admin/login.html" class="brand-logo right"><i class="material-icons">account_circle</i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <div id="home" class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img
                src="http://cinesiageek.com.br/wp-content/uploads/2019/04/pokemon-detective-pikachu.jpg">
            <!-- <div class="row indicators black"><span class="col s4">Vingadores Ultimato</span><span
                    class="col s4 blue-grey-text"> 180 min </span><span class="col s4 blue-grey-text"> Mais Informacoes
                </span></div> -->
        </a>
        <a class="carousel-item" href="#two!"><img
                src="https://cinema.wtf.pt/static/uploads/movie_previews/6ad9bf271d86a1694bf299c31a45eba0389fb3bf.jpg">
            <!-- <div class="row indicators black"><span class="col s4">Vingadores Ultimato</span><span
                    class="col s4 blue-grey-text"> 180 min </span><span class="col s4 blue-grey-text"> Mais Informacoes
                </span></div> -->
        </a>
        <a class="carousel-item" href="#three!"><img
                src="http://cinesiageek.com.br/wp-content/uploads/2019/04/pokemon-detective-pikachu.jpg">
            <!-- <div class="row indicators black"><span class="col s4">Vingadores Ultimato</span><span
                    class="col s4 blue-grey-text"> 180 min </span><span class="col s4 blue-grey-text"> Mais Informacoes
                </span></div> -->
        </a>
        <a class="carousel-item" href="#four!"><img
                src="https://cinema.wtf.pt/static/uploads/movie_previews/6ad9bf271d86a1694bf299c31a45eba0389fb3bf.jpg">
            <!-- <div class="row indicators black"><span class="col s4">Vingadores Ultimato</span><span
                    class="col s4 blue-grey-text"> 180 min </span><span class="col s4 blue-grey-text"> Mais Informacoes
                </span></div> -->
        </a>
    </div>
    <!-- <div class="row" >
        <div class="col s12 grey darken-3">
            Info
        </div> -->
    </div>
    <div id="cartaz" class="row center" style="background-color: #efefef">
        <div class="titles" style="padding-bottom: 30px">
            <span>
                Em Cartaz
            </span>
        </div>
        <div class="col s1"></div>
        <div class="col s10" style="margin-top: 2%;">
            <ul class="tabs z-depth-1 tabs-fixed-width">
                <li class="tab"><a href="#seg">Segunda</a></li>
                <li class="tab"><a href="#ter">Terca</a></li>
                <li class="tab"><a href="#qua">Quarta</a></li>
                <li class="tab"><a href="#qui">Quinta</a></li>
                <li class="tab"><a href="#sex">Sexta</a></li>
                <li class="tab"><a href="#sab">Sabado</a></li>
                <li class="tab"><a href="#dom">Domingo</a></li>
            </ul>
            <?php
                include("./functions/get_movies_week.php");
                echo getmovies();
            ?>
        </div>
        <div class="col s1"></div>
    </div>
    <div id="proximo" class="row center">
        <div class="titles">
            <span>
                Próximos
            </span>
        </div>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        </div>
    </div>
    <div id="informacoes" class="row center">
        <div class="titles">
            <span>
                Informações
            </span>
        </div>
        <div class="row center" style="padding-top: 30px">
            <div class="col s10 offset-s1">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab col s3"><a href="#preco">Preço</a></li>
                    <li class="tab col s3"><a class="active" href="#corp">Corporativo</a></li>
                </ul>
            </div>
            <div id="preco" class="col s12">
                <div class="row valign-wrapper">
                    <div class="col s10 offset-s1 valign">
                        <div class="card z-depth-5"
                            style="height: 60vh; overflow: auto; padding: 20px; margin: 0.5rem 8px 1rem 8px">
                            <div class="col s12 ">
                                <img src="./assets/img/preços.jpg"></img>
                            </div>
                            <div class="col s12">
                                <img src="./assets/img/meia-entrada.png"></img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="corp" class="col s12">
                <div class="row valign-wrapper">
                    <div class="col s10 offset-s1 valign">
                        <div class="card z-depth-5"
                            style="height: 60vh; overflow: auto; padding: 20px; margin: 0.5rem 8px 1rem 8px">

                            <div class="col s12 m5 ">
                                <div style="text-align: center">
                                    <h5>Lei da Classificação Indicativa</h5>
                                </div>
                                <div>
                                    <p align="justify">
                                        Poucos sabem, mas o então Presidente Luiz Inácio Lula da Silva sancionou no dia
                                        20/07/2006 a nova lei de Classificação Indicativa para cinemas, teatros, shows,
                                        programas de rádio e televisão.
                                        Resumindo, para a nova lei fica a critério dos pais o acesso de crianças e
                                        adolescentes para qualquer espetáculo (no nosso caso, sessões de cinema)
                                        classificado até 16 anos. Mas para tanto é obrigatório que os pais estejam
                                        acompanhando os filhos ou que estes estejam acompanhados por adulto responsável
                                        e portando autorização dada pelos pais.
                                    </p>
                                </div>
                            </div>
                            <div class="col s12 m7">
                                <img style="height: 50vh; padding: 20px 0px 0px 20px "
                                    src="./assets/img/lei_indicativa.jpg"></img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="sobre" class="row center">
        <div class="titles">
            <span>
                Sobre
            </span>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col s12 m6" style="padding: 0px 20px 0px 30px">
                <div>
                    <h5 style="text-align: initial; font-weight: bold">Endereço</h5>
                    <p>Rua: Major José Inácio, 2154 e 2166. Centro. São Carlos, SP. Brasil.</p>
                </div>
                <hr>
                <div>
                    <h5 style="text-align: initial; font-weight: bold">Estacionamento</h5>
                    <p>Estacionamento gratuito de (2° a 6°feira a partir das 19h e Sábado e Domingo a partir da primeira
                        sessão).
                    </p>
                    <p>
                        Localizado em frente ao cinema.
                    </p>
                    <p style="color: rgb(255, 1, 1)">
                        **Estacionamento é exclusivo para nossos clientes durante a exibição do filme.
                    </p>
                </div>
            </div>
            <div class="col s12 m6">
                <div style="overflow:hidden;width: 100%;position: relative;"><iframe class="frame"
                        src="https://maps.google.com/maps?width=700&amp;height=350&amp;hl=en&amp;q=R.%20Maj.%20Jos%C3%A9%20In%C3%A1cio%2C%202154%20-%20Centro%2C%20S%C3%A3o%20Carlos%20-%20SP%2C%2013560-160+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=B&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <div
                        style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                        <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
                                href="embedgooglemaps.com/pt/">https://embedgooglemaps.com/pt/</a> & <a
                                href="http://www.stedentrippers.nl/berlijn.html">Stedentrippers NL</a></small></div>
                    <style>
                        #gmap_canvas img {
                            max-width: none !important;
                            background: none !important
                        }
                    </style>
                </div>
            </div>

        </div>
    </div>
    <footer id="bottom">
        <a href="https://www.facebook.com/cinesaocarlos/"><img class="img"
                src="https://pngimage.net/wp-content/uploads/2018/05/facebook-branco-png-3.png"></a>
        <a href="#"><img class="img"
                src="https://pngimage.net/wp-content/uploads/2018/06/logo-instagram-preto-e-branco-png-5.png"></a>
    </footer>
    <script>
        let options_carrousel = {
            indicators: true
        };
        document.addEventListener('DOMContentLoaded', function () {
            let elems_carrousel = document.querySelectorAll('.carousel');
            let instances_carrousel = M.Carousel.init(elems_carrousel, options_carrousel);
            setInterval(function () { instances_carrousel[0].next() }, 10000);

            let elems_tab = document.querySelectorAll('.tabs');
            let instance_tabs = M.Tabs.init(elems_tab);

            let elems_modal = document.querySelectorAll('.modal');
            let instances_modal = M.Modal.init(elems_modal);

        })


    </script>
</body>

</html>