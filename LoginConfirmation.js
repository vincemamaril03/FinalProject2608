function confirmLoginDetails(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;


    if(username.trim().length === 0){
        alert("Email field is required");
    }
    else if(password.trim().length === 0){
        alert("Password field is required");
    }
    else{
        window.confirm("Are you sure you want to proceed?\nEmail: " + username + "\nPassword: " + password);
    }    
    
    
    
}