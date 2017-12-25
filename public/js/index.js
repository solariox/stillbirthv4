var flip=false;
$( document ).ready(function() {
  setInterval(isaacAnimation, 150);
});
function isaacAnimation(){
  document.getElementById("isaac").src=flip?"../img/isaac1.png":"../img/isaac2.png";
  flip=!flip
}
