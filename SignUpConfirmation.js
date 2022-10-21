function confirmCorrectDetails(){
    var name = document.getElementById("name").value;
    var phonenumber = document.getElementById("phonenumber").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(name.trim().length === 0 ){
        alert("Name is empty");
    }
    else if(phonenumber.trim().length != 0 ){
        alert("Phone number is empty");
    } 
    else if(email.trim().length != 0){
        alert("Email is empty");
    }
    else if(String(phonenumber).length != 11){
        alert("Phone number is incorrect format");
    }
    else{
        window.confirm("Are you sure you want to proceed?\nName: " + name + "\nPhone Number: " + phonenumber + "\nEmail: " + email + "\nPassword: " + password);    
    }    
    
    
    
}