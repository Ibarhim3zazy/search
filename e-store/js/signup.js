
function funn(){
  name= document.getElementById('n').value;
  pass= document.getElementById('p').value;
  Tname= /^[a-z]{2,18}$/;
  Tpass= /^[0-9]{1,10}[a-z]{1,18}$/;
  if(name.length > 2 &&
      isNaN(name)==true &&
      Tname.test(name)== true){
        document.getElementById('n').style.border = "solid #3c3 2px";
        document.getElementById('nn').innerHTML= ""
      }
      else {
        document.getElementById('n').style.border = "solid #c33 2px";
        document.getElementById('nn').innerHTML= "<br><div style='margin:auto; border-radius: 10px; height: auto; padding: 15px 10px; width: 70%; background-Color: #f03; text-align: center;'>Wrong name</div>";
      }
  if(pass.length > 7 &&
      Tpass.test(pass)== true){
        document.getElementById('p').style.border = "solid #3c3 2px";
        document.getElementById('pp').innerHTML= ""
      }
      else {
        document.getElementById('p').style.border = "solid #c33 2px";
        document.getElementById('nn').innerHTML= "<br><div style=''>Wrong password</div>";
      }
}
function name_check(){
  name= document.getElementById('n').value;
  Tname= /^[a-z]{2,18}$/;
  if(name.length > 2 &&
      isNaN(name)==true &&
      Tname.test(name)== true){
        document.getElementById('n').style.border = "solid #3c3 3px";
        document.getElementById('nhint').style.color = "#3c3";
      }
      else {
        document.getElementById('n').style.border = "solid #c33 3px";
        document.getElementById('nhint').style.color = "#c33";
      }
}
function mail_check(){
  email= document.getElementById('e').value;
  Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l])[.][c][o][m]$/;
  if(email.length > 6 &&
      email.length < 35 &&
      Temail.test(email)== true){
        document.getElementById('e').style.border = "solid #3c3 3px";
        document.getElementById('ehint').style.color = "#3c3";
      }
      else {
        document.getElementById('e').style.border = "solid #c33 3px";
        document.getElementById('ehint').style.color = "#c33";
      }
}

function pass_check(){
  pass= document.getElementById('p').value;
  Tpass= /^[0-9]{1,10}[a-z]{1,18}$/;
  if(pass.length > 7 &&
      Tpass.test(pass)== true){
        document.getElementById('p').style.border = "solid #3c3 3px";
        document.getElementById('phint').style.color = "#3c3";
      }
      else {
        document.getElementById('p').style.border = "solid #c33 3px";
        document.getElementById('phint').style.color = "#c33";
      }
}
