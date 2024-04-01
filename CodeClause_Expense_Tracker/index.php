<?php
    session_start();

    include("database/db.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!empty($email) && !empty($pass) && !is_numeric($email)){
            $query = "select * from exp where email = '$email' limit 1";
            $result = mysqli_query($con,$query);

            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass']==$pass){
                        header("location: routes/app.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> 
                alert('Invalid credentials!');
            </script>";
        }
        else{
            echo "<script type='text/javascript'> 
                alert('Invalid credentials!');
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login | Expense Tracker</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel="shortcut icon" href="img/explogo.png" type="image/x-icon">
</head>
<body>
    <header>
        <h2>Expense Tracker Login</h2>
    </header>
    <main>
        <form action="" method="POST">
            <p>Enter email</p>
            <input type="email" name="email" id="email" placeholder="Enter here" required autofocus>
            <p>Enter password</p>
            <input type="password" name="pass" id="pass" placeholder="Enter here" required>
            <input type="submit" id="sub" value="Login">
            <p id="reg">New user? <a href="routes/register.php">Register here</a></p>
        </form>
    </main>
    <footer>
        <p>Developed by <a href="https://www.linkedin.com/in/aditya-as2">Aditya Singh Solanki</a></p>
    </footer>
</body>
</html>