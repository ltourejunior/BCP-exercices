<?php

 // list of movie categories?



 //


 //niews
$news= new view('home/news');
 



//page
$page_layout = new view('home/page_layout');
$page_layout->news = $news;


// set the title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);