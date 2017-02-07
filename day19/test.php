<?php
$message='I love coding';
$length= strlen($message); 
echo 'the lenght of the message '. $message .'is ' .$length.' ';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two buttons</title>
</head>
<body>

    <button id="red" onclick="document.body.style.backgroundColor = 'red';">red</button>
    <button id="blue">blue</button>

    <script>

var bluebutton=document.getElementById('blue')
bluebutton.addEventListener("click", function(event) {
     document.body.style.backgroundColor = "blue";
  });



	</script>
</body>
</html>
