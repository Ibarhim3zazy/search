
function funn(){
  name= document.getElementById('n').value;
  pass= document.getElementById('p').value;
  Tname= /^[a-z]{2,18}$/;
  Tpass= /^[0-9]{1,10}[a-z]{1,18}$/;
  if(name.length > 3 &&
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
      isNaN(pass)==false &&
      Tpass.test(pass)== true){
        document.getElementById('p').style.border = "solid #3c3 2px";
        document.getElementById('pp').innerHTML= ""
      }
      else {
        document.getElementById('p').style.border = "solid #c33 2px";
        document.getElementById('nn').innerHTML= "<br><div style='margin:auto; border-radius: 10px; height: auto; padding: 15px 10px; width: 70%; background-Color: #f03; text-align: center;'>Wrong password</div>";
      }
}
function funn1(){
  name= document.getElementById('n').value;
  Tname= /^[a-z]{2,18}$/;
  if(name.length > 3 &&
      isNaN(name)==true &&
      Tname.test(name)== true){
        document.getElementById('n').style.border = "solid #3c3 2px";
        document.getElementById('nn').innerHTML= ""
      }
      else {
        document.getElementById('n').style.border = "solid #c33 2px";
        document.getElementById('nn').innerHTML= "<br><div style='margin:auto; border-radius: 10px; height: auto; padding: 15px 10px; width: 70%; background-Color: #f03; text-align: center;'>Wrong name</div>";
      }

}
function funn2(){
  pass= document.getElementById('p').value;
  Tpass= /^[0-9]{1,10}[a-z]{1,18}$/;
  if(pass.length > 7 &&
      isNaN(pass)==false &&
      Tpass.test(pass)== true){
        document.getElementById('p').style.border = "solid #3c3 2px";
        document.getElementById('pp').innerHTML= ""
      }
      else {
        document.getElementById('p').style.border = "solid #c33 2px";
        document.getElementById('pp').innerHTML= "<br><div style='margin:auto; border-radius: 10px; height: auto; padding: 15px 10px; width: 70%; background-Color: #f03; text-align: center;'>Wrong password</div>";
      }

}
