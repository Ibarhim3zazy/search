function sign_in(){
  document.getElementById('sign_up').style.display = "none";
  document.getElementById('sign_in').style.display = "block";
  document.getElementsByClassName('container_iu')[0].style.display = "block";
}
function sign_up(){
  document.getElementById('sign_in').style.display = "none";
  document.getElementById('sign_up').style.display = "block";
  document.getElementsByClassName('container_iu')[0].style.display = "block";
}
function sign_hide(){
  document.getElementById('sign_in').style.display = "none";
  document.getElementById('sign_up').style.display = "none";
  document.getElementsByClassName('container_iu')[0].style.display = "none";
}
function display_n(){
  document.getElementById('none').style.display = "none";
}
function display_b(){
  document.getElementById('none').style.display = "block";
}
