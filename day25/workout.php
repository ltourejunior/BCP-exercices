<?php
$movie_name = 'Arrival';

$ratings=[
    'user642' => 69,
    'user214' => 95,
    'user013' => 82
    ];

    foreach ($ratings as $user_id => $rating)
    {
    
        
    }

    function print_rating($rating)
    {
        return $rating . ' %';
    }

$user_names = array(
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
);

$user_name = $user_names['user214'];

function get_username($user_id)
{
    global $user_names;
    return $user_names[$user_id];
}

foreach ($ratings as $user_id => $rating)
    {
        echo get_username($user_id) . ' gave the movie a ' . print_rating($rating) . ' rating.<br>';
        
    }