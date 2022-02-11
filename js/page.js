var menu = document.querySelector('.menu-items');  // ndryshimi i ngjyrave te background
var navBar = document.querySelector('.nav-items ul'); // hapja e nav bar
var barIcon = document.querySelector('.bar');  // ikona e mbylljes
var removeIcon = document.querySelector('.remove'); // ikona e mbylljes 
var mode = document.querySelector('.mode'); // ngjyra e background
var container = document.querySelector('.container'); // ngjyra e background
var body = document.querySelector('body');// ndryshon edhe ngjyren e backgrondit mbrapa

menu.addEventListener('click',function(){
    navBar.classList.toggle('navBar-js');
    barIcon.classList.toggle('barIcon-js');
    removeIcon.classList.toggle('removeIcon-js')
})

mode.addEventListener('click',function(){
    container.classList.toggle('container-js');
    body.classList.toggle('body-js');
    mode.classList.toggle('mode-js')
});

// loginiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
function validate1(event){
    var email = document.forma2.email.value;
    var password = document.forma2.password.value;
    var emailVal = document.getElementById('e4');
    var passwordVal = document.getElementById('e5');
    var emailError = false;
    var passwordError = false;

    //email validation
    if(!email || email == ""){
        event.preventDefault();
        emailVal.innerHTML = "Email can't be blank !";
        emailVal.style.visibility = 'visible';
        emailError = true;
    }
    else if(!validateEmail(email)){
        emailVal.innerHTML = "Invalid email !";
        emailVal.style.visibility = "visible";
        emailError = true;
    }
    else{
        emailError =false;
        emailVal.style.visibility = "hidden";
        
    }

    //password validation
    if(!password || password == ""){
        event.preventDefault();
        passwordVal.innerHTML = "Password can't be blank !";
        passwordVal.style.visibility = 'visible';
        passwordError = true;
    }
    else{
        passwordError =false;
        passwordVal.style.visibility = "hidden";
    }

    function validateEmail(email) {
        var emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return emailRegex.test(String(email).toLowerCase());
      }

}

// signupiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
function validate(event){
    //fields
    var name = document.forma.name.value;
    var email = document.forma.email.value;
    var password = document.forma.password.value;
    var nameVal = document.getElementById('e1');
    var emailVal = document.getElementById('e2');
    var passwordVal = document.getElementById('e3');
    var nameError = false;
    var emailError = false;
    var passwordError = false;
    if(!name || name == ""){
        event.preventDefault();
        nameVal.innerHTML = "Name can't be blank !";
        nameVal.style.visibility = 'visible';
        nameError = true;
    }
    else if(!validateName(name)){
        nameVal.innerHTML = "Invalid name !";
        nameVal.style.visibility = "visible";
        nameError = true;
    }
    else{
        nameError =false;
        nameVal.style.visibility = "hidden";
    }

    //email validation
    if(!email || email == ""){
        event.preventDefault();
        emailVal.innerHTML = "Email can't be blank !";
        emailVal.style.visibility = 'visible';
        emailError = true;
    }
    else if(!validateEmail(email)){
        emailVal.innerHTML = "Invalid email !";
        emailVal.style.visibility = "visible";
        emailError = true;
    }
    else{
        emailError =false;
        emailVal.style.visibility = "hidden";
        
    }

    //password validation
    if(!password || password == ""){
        event.preventDefault();
        passwordVal.innerHTML = "Password can't be blank !";
        passwordVal.style.visibility = 'visible';
        passwordError = true;
    }
    else if(!validatePassword(password)){
        passwordVal.innerHTML = "Invalid password !";
        passwordVal.style.visibility = "visible";
        passwordError = true;
    }
    else{
        passwordError =false;
        passwordVal.style.visibility = "hidden";
    }

}

function validateEmail(email) {
    var emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return emailRegex.test(String(email).toLowerCase());
  }
  function validateName(name){
      var nameRegex = /^([a-zA-Z]+)$/;
      return nameRegex.test(name);
  }
  function validatePassword(password){
      var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?.,&])[A-Za-z\d@$!%*?.,&]{8,}$/;
      return passwordRegex.test(password);
  }



