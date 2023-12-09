<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
 body {
      /* color: white; */
      /* background-image: linear-gradient(to right, rgb(101, 101, 227), rgb(108, 234, 236)); */
    }

        form{
            position: relative;
            top: 130px;
            left: 480px;
            height: 350px;
            width: 350px;
            background-color: rgba(246, 243, 243, 0.5);
            /* opacity: .8; */
            border-radius: 5px;
        }
#username{
    position: absolute;
    top: 100px;
    left: 38px;
    width: 75%;
    height: 25px;
    background-color: rgba(246, 243, 243, 0.5);
    border: none;
    border-bottom: 1px solid white;
    
}
label{
    color: #cda45e;
    font-size: 25px;
}
#labeluser{
    position: absolute;
    top: 50px;
    left:38px;

}
#labelpass{
    position: absolute;
    top: 150px;
    left: 38px;

}

#password{
    position: absolute;
    top: 200px;
    left: 38px;
    width: 75%;
    height: 25px;
    background-color: rgba(246, 243, 243, 0.5);
    border: none;
    border-bottom: 1px solid white;
    
    
}
#butsubmit{
position: absolute;
top: 250px;
left: 35%;
padding: 10px 20px 10px 20px;
font-size: 18px;
color: #fff;
background-color: rgba(246, 243, 243, 0.5);
border: none;

}
#butsubmit:hover{
    cursor: pointer;
    background-color: rgba(216, 214, 214, 0.5);
    color: rgb(51, 121, 122);
}



    </style>
</head>
<body>
    
<form method="post">
    <input type="hidden" name="form" value="login">
    <label for="username" id="labeluser">UserName</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password" id="labelpass">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button type="submit" id="butsubmit">Submit</button>

</form>

</body>
</html>