<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require "db.php";

switch ($request) {
    case "/home" :
        $title = "Dashboard";
        require "header.php";
        require __DIR__ . './views/index.php';
        break;
    case "" :
        $title = "Dashboard";
        require "header.php";
        require __DIR__ . './views/index.php';
        break;
    case "/users" :
        $title = "Users";
        require "header.php";
        require __DIR__ . './views/users.php';
        break;
    case "/profile" :
        $title = "Profile";
        require "header.php";
        require __DIR__ . './views/profile.php';
        break;    
    case "/carousel" :
        $title = "Carousel";
        require "header.php";
        require __DIR__ . './views/carousel.php';
        break;
    case "/live" :
        $title = "live";
        require "header.php";
        require __DIR__ . './views/live.php';
        break;
    case "/add_channel" :
        $title = "Add Channel";
        require "header.php";
        require __DIR__ . './views/add_channel.php';
        break;
    case "/live_details" :
        $title = "Live Details";
        require "header.php";
        require __DIR__ . './views/live_details.php';
        break;
    case "/edit_channel" :
        $title = "Edit Channl";
        require "header.php";
        require __DIR__ . './views/edit_channel.php';
        break;
    case "/films" :
        $title = "Films";
        require "header.php";
        require __DIR__ . './views/films.php';
        break;
    case "/add_film" :
            $title = "Add Film";
            require "header.php";
            require __DIR__ . './views/add_film.php';
            break;
    case "/film_details" :
            $title = "Film Details";
            require "header.php";
            require __DIR__ . './views/film_details.php';
            break;
    case "/crews" :
            $title = "crews";
            require "header.php";
            require __DIR__ . './views/crews.php';
            break;
    case "/edit_film" :
        $title = "Film Edit";
        require "header.php";
        require __DIR__ . './views/edit_film.php';
        break;
    case "/webseries" :
        $title = "Webseries";
        require "header.php";
        require __DIR__ . './views/webseries.php';
        break;
    case "/add_webseries" :
            $title = "Add Webseries";
            require "header.php";
            require __DIR__ . './views/add_webseries.php';
            break;
    case "/webseries_details" :
            $title = "Webseries Details";
            require "header.php";
            require __DIR__ . './views/webseries_details.php';
            break;
     case "/edit_webseries" :
            $title = "Webseries Edit";
            require "header.php";
            require __DIR__ . './views/edit_webseries.php';
            break;        
    case "/add_season" :
            $title = "Add Season";
            require "header.php";
            require __DIR__ . './views/add_season.php';
            break; 
    case "/add_episode" :
            $title = "Add Episode";
            require "header.php";
            require __DIR__ . './views/add_episode.php';
            break; 
    case "/genres" :
        $title = "Genres";
        require "header.php";
        require __DIR__ . './views/genres.php';
        break;
    case "/add_genre" :
        $title = "Add Genre";
        require "header.php";
        require __DIR__ . './views/add_genre.php';
         break;
    case "/upcoming" :
        $title = "Upcoming";
        require "header.php";
        require __DIR__ . './views/upcoming.php';
        break;
    case "/add_upcoming" :
        $title = "Add Upcoming";
        require "header.php";
        require __DIR__ . './views/add_upcoming.php';
        break;
    case "/edit_upcoming" :
        $title = "Edit Upcoming";
        require "header.php";
        require __DIR__ . './views/edit_upcoming.php';
        break;
    case "/smpleform" :
        $title = "Test Api";
        require "header.php";
        require __DIR__ . './views/smpleform.php';
        break;
    default:
        http_response_code(404);
        $title = "404 Error";
        require "header.php";
        require __DIR__ . './views/404.php';
        break;
}

require "footer.php";
?>