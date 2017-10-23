var count=0;
$( document ).ready(function() {
  setInterval(isaacAnimation, 150);
});
function isaacAnimation(){

  if (count==0){
    document.getElementById("isaac").src="../img/isaac1.png";
    count++
  }
  else {
    document.getElementById("isaac").src="../img/isaac2.png";
    count=0
  }
}
