function validate(){
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
    if(username == "" || password == ""){
        document.getElementById("table").innerHTML = "***Both fields must be given to login";
        return false;
    }
    else if(username == "user" && password == "user123"){
        window.location.href = "customerDashboard.html";
        return false;
    }
    else if(username == "admin" && password == "admin123"){
        window.location.href = "adminDashboard.html";
        return false;
    }
    else if(username == "chef" && password == "chef123"){
        window.location.href = "chef.html";
        return false;
    }
    else if(username == "server" && password == "server123"){
        window.location.href = "server.html";
        return false;
    }
    else{
        document.getElementById("table").innerHTML = "***Wrong username or password.";
        return false;
    }
}