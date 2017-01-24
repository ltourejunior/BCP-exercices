var red = document.getElementById('red_button');
red.onclick=function(){
document.body.style.backgroundColor = "red";
};

var pink = document.getElementById('pink_button');
pink.onclick=function(){
document.body.style.backgroundColor = "pink";
};

var white = document.getElementById('white_button');
white.addEventListener("click", function(event) {
document.body.style.backgroundColor = "white";
this.style.color='white;'
});

var black = document.getElementById('black_button');
black.addEventListener("click", function(event) {
document.body.style.backgroundColor = "black";
});

