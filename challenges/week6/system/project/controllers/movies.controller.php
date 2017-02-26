<?php
//Show all movies available
$movies = new view('movies/movies');
$movies->movies=Movie_Model::getMovies();

//Show all genres of movies
//$genres = new view('movies/genres');
//$genres->genres=Genre_Model::getGenres();

//Show all languages af movies
//$languages = new view('movies/languages');
//$languages->languages=Language_Model::getLanguages();


//page
$page_layout = new view('movies/page_layout');
$page_layout->movies = $movies;

// set the title of the page
presenter::setTitle('Movies');

// give the layout to the presenter to present
presenter::present($page_layout);
