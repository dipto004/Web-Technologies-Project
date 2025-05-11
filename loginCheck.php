<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "" || $password == ""){
            echo "Both username and password should be entered to login";
        }
        else if($username == "user" || $password == "user123"){
            $_SESSION['validateCustomer'] = true;
?>
<?php
    
            header("location: customerDashboard.php");
        }
        else{
            echo "Invalid Username or Password";
        }
    }
    else{
        echo "LoginCheck Intruders";
    }
?>