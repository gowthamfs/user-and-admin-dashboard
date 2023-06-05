<?php
session_start();

include('../config/dbcon.php');
// include('../middleWare/middlewareAdmin.php');


if(isset($_POST['submit-btn'])){
    $name = mysqli_real_escape_string($con, $_POST['username']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $email_check = "SELECT email from users WHERE email = '$email' ";
    $email_check_run = mysqli_query($con, $email_check);

    if(mysqli_num_rows($email_check_run) > 0){
        $_SESSION['message'] = "Email Already Register";
        header('Location: ../register.php');
    } else {  
            if($password == $cpassword){
                $sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password' )";
                $sql_run = mysqli_query($con, $sql);
        
                if($sql_run){
                    $_SESSION['message'] = "Registered succesfully";
                    header('Location: ../login.php');
                } else{
                    $_SESSION['message'] = "Something went wrong";
                    header('Location: ../register.php');
                }
            }
            else{
                $_SESSION['message'] = "Error: password do not match";
                header('Location: ../register.php');
            } 
    }

}
else if (isset($_POST['login-btn'])){
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $password = mysqli_real_escape_string($con, $_POST['password']);

   $login_query = "SELECT * from users WHERE email = '$email' and password = '$password'";
   $login_query_run = mysqli_query($con, $login_query);

   if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail,
            'role_as' => $role_as
        ];

        $_SESSION['role_as'] = $role_as;        
       
            if($role_as == 1){
                $_SESSION['message'] = 'Welcome to Dashboard';
                header('Location: ../admin/index.php');
            } else {
                $_SESSION['message'] = 'LoggedIn succesfully';
                header('Location: ../index.php');
            }

        
    }  
   else {
        $_SESSION['message'] = 'Invalid creadentails';
        header('Location: ../login.php');
   }  
} 



?>