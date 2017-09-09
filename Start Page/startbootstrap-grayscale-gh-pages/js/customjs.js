function isLogged(isSession) {
  var isLoggedIn = isSession;
  if(isLoggedIn == "login") {
    document.getElementById("login").style.visibility='hidden';
    document.getElementById("logout").style.visibility='shown';
  }else{
    
  }
}
