<?php
include("./admin/connect.php");
get_movies_from_db();
function get_movies_from_db() {
    $conn = OpenCon();
    $resultado = $conn->query('SELECT * FROM `filme`');
    $movies = [];
    if (empty($resultado)) {
        return [];
      } else {        
          while($row = $resultado->fetch_assoc()) {
            array_push($movies, $row);
        }
        return $movies;
      }
}
function make_info_card($movie, $count) {
    $tag;
    if ($count == 0){
        $tag = '<div class="card col s10 offset-s1 m4 offset-m1">
        <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="./functions/imageView.php?image_id='.$movie["id"].'">
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">'.$movie["nome"].'</span>
        <a href="#trailer" class="modal-trigger">Trailer</a>
        <div id="trailer" class="modal">
        <div class="modal-content">
        <iframe width="600" height="300" src="'.$movie["link_trailer"].'"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
            </div>
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">'.$movie["nome"].'<i
            class="material-icons right">Fechar</i></span>
            <p>'.$movie["sinopse"].'</p>
            </div>
            </div>';
    } elseif ($count%2==0) {
        $tag = '<div class="col col m1"></div>
        <div class="card col s10 offset-s1 m4 offset-m1">
        <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="./functions/imageView.php?image_id='.$movie["id"].'">
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">'.$movie["nome"].'</span>
        <a href="#trailer" class="modal-trigger">Trailer</a>
        <div id="trailer" class="modal">
        <div class="modal-content">
        <iframe width="600" height="300" src="'.$movie["link_trailer"].'"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
            </div>
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">'.$movie["nome"].'<i
            class="material-icons right">Fechar</i></span>
            <p>'.$movie["sinopse"].'</p>
            </div>
            </div>';
    } else { 
        $tag = '
        <div class="card col s10 offset-s1 m4 offset-m2">
        <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="./functions/imageView.php?image_id='.$movie["id"].'">
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">'.$movie["nome"].'</span>
        <a href="#trailer" class="modal-trigger">Trailer</a>
        <div id="trailer" class="modal">
        <div class="modal-content">
        <iframe width="600" height="300" src="'.$movie["link_trailer"].'"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
            </div>
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">'.$movie["nome"].'<i
            class="material-icons right">Fechar</i></span>
            <p>'.$movie["sinopse"].'</p>
            </div>
            </div>';
    }
    return $tag;
}
function getmovies() {
    $movies = get_movies_from_db();
    $count = 0;
    $cards = "";
    foreach ($movies as $movie){
        $cards .= make_info_card($movie, $count);
        $count++;
    }
    return $cards;
    }
?>