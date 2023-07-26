<!DOCTYPE html>
<html>
<head>

    <?php

    $host = "localhost:3307";
    $user = "root";
    $password = "";
    $db = "mplogin";

    $con=mysqli_connect($host,$user,$password,$db);

    mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $db);

    if(isset($_POST['username']))
    {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from mploginform where Username='".$uname."' AND Password='".$password."' limit 1";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)==1)
        {
            echo '<h1 align="center" style="margin-top:20%; font-family: Arial; z-index: -1; position:relative;">You have successfully logged in.</h1>';
            echo '<h3 align="center" style="font-family: Arial; z-index: -1; position:relative;">Redirecting to Home</h3>';
            echo '<img src="https://i.pinimg.com/originals/1c/13/f3/1c13f3fe7a6bba370007aea254e195e3.gif" align="center" style="margin-top: 0%; margin-left: 45%;" width="10%" height="10%"/>';
            echo "<meta http-equiv='refresh' content='2;url=http://localhost/Mini%20Project/home1.html'>";
            exit();
        }

        else
        {
            echo '<h1 align="center" style="margin-top:20%; font-family: Arial; z-index: -1; position:relative;">You have entered incorrect details.</h1>';
            echo '<h3 align="center" style="font-family: Arial; z-index: -1; position:relative;">Redirecting to Login</h3>';
            echo '<img src="https://i.pinimg.com/originals/1c/13/f3/1c13f3fe7a6bba370007aea254e195e3.gif" align="center" style="margin-top: 0%; margin-left: 45%;" width="10%" height="10%"/>';
            echo "<meta http-equiv='refresh' content='3;url=#'>";
            exit();
        }
    }

?>
    <style>
        *, *:before, *:after
        {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body
        {
            background-image: url(http://localhost/Mini%20Project/homebg.png);
            background-color:#003c4d;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            background-blend-mode:multiply;
        }

        .background
        {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%,-50%);
            left: 50%;
            top: 50%;
        }

        form
        {
            height: 480px;
            width: 400px;
            background-color: rgba(255,255,255,0.13);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
        }

        form *
        {
            font-family: 'Poppins',sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3
        {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label
        {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input
        {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        form[placeholder]
        {
            color: #e5e5e5;
        }

        #loginbtn
        {
            margin-top: 10px;
            margin-left: 10%;
            width: 80%;
            height: 12.5%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form method="POST" action="#">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <br />

        <input type= "submit" value="LOGIN" id="loginbtn" />
    </form>
</body>



</html>
