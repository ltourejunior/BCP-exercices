<?php 

$navigation = new view('navigation'); // /system/project/views/navigation.php 

$email = request::post('email', ''); 
$text = request::post('text', ''); 
$newsletter = request::post('newsletter', '0'); 

//  /system/project/views/contact/form.php 
//  contact/form 
$form_view = new view('contact/form'); 
$form_view->email = $email;
$form_view->text = $text; 
$form_view->newsletter = $newsletter; 
// $form_view->newsletter = $newsletter; 

// set the title of the page
presenter::setTitle('Contact page');

// give the layout to the presenter to present
presenter::present($form_view);
