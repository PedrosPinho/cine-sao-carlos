<?php
include("./admin/connect.php");
date_default_timezone_set ( "America/Sao_Paulo" );

// echo getmovies();
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
function make_info_card($movie, $count, $d) {
    $tag;
    if ($count == 0){
        $tag = '<div class="card col s10 offset-s1 m4 offset-m1">
        <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="./functions/imageView.php?image_id='.$movie["id"].'">
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">'.$movie["nome"].'</span>
        <a href="#trailer'.$movie["id"].''.$d.'" class="modal-trigger">Trailer</a>
        <div id="trailer'.$movie["id"].''.$d.'" class="modal">
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
            <span class="card-title grey-text text-darken-4">'.$movie["nome"].'</span>
            <p class="grey-text text-darken-4">'.isLeg_3d("Leg", $movie["legendado"]).'</p>
            <p class="grey-text text-darken-4">'.isLeg_3d("a", $movie["3d"]).'</p>
            <p>Sinopse: '.$movie["sinopse"].'</p>
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
        <a href="#trailer'.$movie["id"].''.$d.'" class="modal-trigger">Trailer</a>
        <div id="trailer'.$movie["id"].''.$d.'" class="modal">
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
            <span class="card-title grey-text text-darken-4">'.$movie["nome"].'</span>
            <p class="grey-text text-darken-4">'.isLeg_3d("Leg", $movie["legendado"]).'</p>
            <p class="grey-text text-darken-4">'.isLeg_3d("a", $movie["3d"]).'</p>
            <p>Sinopse: '.$movie["sinopse"].'</p>
            </div>
            </div>';
    } else { 
        $tag = '
        <div class="card col s10 offset-s1 m4 offset-m2">
        <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="./functions/imageView.php?image_id='.$movie["id"].'">
        </div>
        <div class="card-content">
        <span class="card-title activator white-text text-darken-4">'.$movie["nome"].'</span>
        <a href="#trailer'.$movie["id"].''.$d.'" class="modal-trigger">Trailer</a>
        <div id="trailer'.$movie["id"].''.$d.'" class="modal">
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
            <span class="card-title grey-text text-darken-4">'.$movie["nome"].'</span>
            <p class="grey-text text-darken-4">'.isLeg_3d("Leg", $movie["legendado"]).'</p>
            <p class="grey-text text-darken-4">'.isLeg_3d("a", $movie["3d"]).'</p>
            <p>Sinopse: '.$movie["sinopse"].'</p>
            </div>
            </div>';
    }
    return $tag;
}
function getmovies() {
    $movies = get_movies_from_db();
    $cards = "";
    $week = ["dom", "seg", "ter", "qua", "qui", "sex", "sab"];
    $today = date("w");
    $da = 0;
    foreach($week as $day) {
        $d = getWeekDay($today, $da);
        $count = 0;
        $cards .= '<div id="'.$day.'" class="col s12">';
        foreach ($movies as $movie){
            // $cards .= $movie['data_inicio'] ." /-".$d."-/ ".$movie['data_fim'];
            if ($movie['data_inicio'] <= $d && $d <= $movie['data_fim']) {
                $cards .= make_info_card($movie, $count, $day);
                $count++;
            }
        }
        $cards .= "</div>";
        $da++;
    }
    return $cards;
}
function getWeekDay ($today, $day) {
    $day_in_m = 86400000;
    $d = date("Y-m-d");
    if ($day == $today) {
        return $d;
    }
    else {
        $i =  $day - $today;
        $data =(int)strtotime("+".$i." day");
        $temp = date("Y-m-d", $data);
        return $temp;
    }
    
}
function isLeg_3d($type, $bool) {
    if ($type == "Leg") {
        if($bool == 1) return "Legendado";
        else return "Dublado";
    } else {
        if($bool == 1) return "3D";
        else return "2D";
    }
}
?>