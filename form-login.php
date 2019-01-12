<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <style type="text/css">
        body{
            background-image:url(bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        div{
            margin-top: 100px;
            margin-left: 520px;
            background-color:rgba(2, 2, 2, 0.5);
            border: 4px solid white;
            border-radius: 15px 70px;
            width: 350px;
            height: 450px; 

        }

        input{
            margin-top: 30px;
        }

        #nis{
            margin-left: 50px;
            background-color:rgba(2, 2, 2, 0.5);
            width: 240px;
            height: 45px;
            border: 2px solid white;
            color: white;
        }

        #ps{
           margin-left: 50px;
           background-color:rgba(2, 2, 2, 0.5);
            width: 240px;
            height: 45px;
            border: 2px solid white;
            color: white;
        }

        #submit{
            margin-left: 50px;
            width: 244px;
            height: 45px;
            border: 2px solid white;
            background-color:rgba(2, 2, 2, 0.5);
            color: white;
        }

        h2{
            margin-left: 37%;
            padding-top: 54px;
            color: white;
        }

        h3{
            margin-left: 40%;
            padding-top: 5px;
            color: black;
            font-size: 30px;

        }
    </style>
</head>
<body>
    
    <div>
    <Form action="login.php" method="post">
        <h2>LOGIN</h2>
        <input type="text" name="nis" id="nis" placeholder="Masukan NIS"> <br>
        <input type="password" name="password" id="ps" placeholder="Masukan Password"> <br>
        <input type="submit" value="LOGIN" id="submit">
    </Form>
</div>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>NIS atau Password salah</h3>';
        }
    }
    ?>
</body>
</html>