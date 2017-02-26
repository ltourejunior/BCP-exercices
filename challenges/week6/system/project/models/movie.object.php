<?php

class Movie_Object
{
    public function getUrl() 
    { 
        return url::to('imdb_movie', array( 
            'imdb_id' => $this->id 
        )); 
    } 
}