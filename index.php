<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        div
        {
            width: 40%;
            height: 300px;
            background-image: linear-gradient(orange,red,white);
            box-shadow: 5px 10px rgb(66, 65, 65);
            border-radius: 10px;
            padding: 15px;
        }
        #input1
        {
            margin-left: 16px;
        }

        #input2
        {
            margin-left: 10px;
        }

        #lgn
        {
           margin-left: 200px;
           margin-top: 40px;
           padding: 5px 10px;
           background-color: rgb(255, 72, 0);
           color: white;
           width: 80px;
           height: 40px;
           border-radius: 10px;
           font-size: 22px;
        }

        p{
            font-size: 25px;
            font-weight: bolder;
            font-family: algerian;
            background-color: rgb(255,72, 0);
            width: 42%;
            text-align: center;
            color: white;
            border-radius: 10px;
        }
        label
        {
            margin-left: 80px;
            font-size: 25px;
            color: black;
            font-weight: bolder;
        }
        input
        {
            margin-left: 20px;
            padding: 5px;
            font-size: 15px;
            text-align: center;
            font-style: italic;
        }
    </style>

    <script language="JavaScript">

     function login()
     {
       if (document.log.username.value =="ccet411" && document.log.pass.value =="multimedia")

       { alert("Log in successful")
        window.location="record.php"
       }
       
       else
       {
        alert("Wrong User Name or Password!")
       }
     }

    </script>

</head>
<body>
    <p>Login Interface</p>
    <div>
        <form name="log" autocomplete="off">

    <br><br>

    <label>User Name</label><input type="text" name="username" placeholder="Username"/><br><br><br><br>
    <label>Password</label><input type="password" name="pass" placeholder="Password"  /><br><br>
    <input type="button" value="Login" id="lgn" name="logn" onclick="login()" />
        </form>
    </div>
</body>
</html>