<?php

//products showcase
$showcase = new view('products/showcase');

//categories
$categories = new view('home/categories');
$categories->categories=Category_Model::getTopCategories();


//page
$page_layout = new view('products/page_layout');
$page_layout->showcase = $showcase;
$page_layout->categories = $categories;

// set the title of the page
presenter::setTitle('Products');

// give the layout to the presenter to present
presenter::present($page_layout);
