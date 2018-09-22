function signUp() {
  var login=document.getElementById('login');
  var signup=document.getElementById('signup');
  var sign=document.getElementById('button-sign');
  var log=document.getElementById('button-log');
  login.style.display="none";
  signup.style.display="block";
  sign.style.background="white";
  log.style.background='lightgrey';
}
function login() {
  var login=document.getElementById('login');
  var signup=document.getElementById('signup');
  var log=document.getElementById('button-log');
  var sign=document.getElementById('button-sign');
  login.style.display="block";
  signup.style.display="none";
  log.style.background='white';
  sign.style.background='lightgrey';
}
function createuser(){
  var user=document.getElementById('user1').value;
  var len=user.length;
  if(len<=4){
  alert('Username Too Short. Minimum 5 Characters Required');
  document.getElementById('create').reset();
  }
}
function create_pass1(){
  var pass1=document.getElementById('pass1').value;
  if(pass1.length<=4){
  alert('Password Too Short.Minimum 5 Characters Required');
  document.getElementById('create').reset();
  }
}
function create_pass2(){
  var pass1=document.getElementById('pass1').value;
  var pass2=document.getElementById('pass2').value;
  var len1=pass1.length;
  var len2=pass2.length;
  if(len1<=4 || len2<=4){
  alert('Password Too Short.Minimum 5 Characters Required');
  document.getElementById('create').reset();
  }
  if(pass1!=pass2){
  alert('Password Not Matched');
  }
}

