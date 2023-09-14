<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/c002b551d9.js" crossorigin="anonymous"></script>
        <style>
body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background-image: url(https://i.imgur.com/qKntbAb.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    font-family: Arial, Helvetica, sans-serif;
}

.login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: pink;
    float: left;
}

.login-box h1{
    display: inline-block;
    font-size: 40px;
    border-bottom: 3px solid pink;
    margin-bottom: 40px;
    padding: 13px 0;
    margin-left: 33%;
}

.text-box{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 9px 0;
    border-bottom: 1px solid pink;
}

.text-box i{
    width: 26px;
    display: inline-block;
    text-align: center;
}

.text-box input{
    border: none;
    background: none;
    outline: none;
    color: white;
    font-size: 16px;
    width: 80%;
    margin: 0 6px;

}

.text-box input::placeholder{
    color: dark;
}

.btn{
    width: 100%;
    background: none;
    border: 2px solid pink;
    color: #fff;
    padding: 5px;
    margin-top: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.2s;
}

.btn:hover{
    background: pink;
}
        </style>
    </head>
    <body>
        <form action="" method="post">
            <div class="login-box">
                <h1>Login</h1>
                <div class="text-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Username" name="un" value="">
                </div>
                <div class="text-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password" name="pw" value="">
                </div>
                <input type="submit" class="btn" value="Login">
            </div>
        </form>
  <?php
  include_once('db.php');
  $sql = "Select * From account";
  $accounts = query($sql);
    function isValid($accounts, $un, $pw)
    {
        for($i = 0; $i < count($accounts); $i++)
        {
            if($accounts[$i][1]==$un && $accounts[$i][2]==$pw)
                return true;
        }
        return false;
    }
        if(isset($_POST['un']) && isset($_POST['pw']))
        {
            $un = $_POST['un'];     
            $pw = $_POST['pw'];
            if (isValid($accounts, $un, $pw)) 
            {
                header("location:index.php");
            }
            else
            {
                header("location: login.php");
            }
        }
    ?>
    </body>
</html>