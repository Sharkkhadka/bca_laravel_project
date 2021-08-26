<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body{
            margin: 0;
            height: 100vh;
            width: 100%;
        }
        *{
            box-sizing: border-box;
        }
        .parent{
            margin: 0;
            height: 100vh;
            width: 100%;
            background: green;
            display:flex;
            justify-items: ;
            align-items: ;
        }
        .parent div{
            background: red;
            height: 50px;
            width: 50px;
            margin-right: 5px;
        }
        nav{
            display: flex;
            justify-content: space-between;
            padding: 15px 5%;
            background: coral;
            align-items: center;
            height: 10vh;
        }
        img{
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
        .logo{
          height: 100%;
            width: 8%;
        }
        .logo img{
            object-position: left;
        }
        .nav-items{
            width: 15%;
            display: flex;
            justify-content: space-between;
            height: 100%;
            align-items: center;
        }
        .nav-items span{
            padding: 15px;
            color: white;
            cursor: pointer;
            font-weight: 900;
        }
        .nav-items span:hover{
            background: white;
            color: coral;
            border-radius: 8px;
        }
        section{
            height: 90vh;
            width: 100%;
            padding:15px 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main-content{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .for-input-design{
            display: flex;
            border: 1px solid rgba(0,0,0,0.8);
            border-radius: 8px;
            overflow: hidden;
            height: 40px;
            width: 35%;
        }
        .for-input-design input{
            border: none;
            flex: 1;
        }
        .for-input-design i{
            width: 15%;
            height: 100%;
            padding: 15px;
            display: flex!important;
            justify-content:center;
            align-items: center;
            background: coral;
        }
        .card-boxes{
            width: 40%;
            display: flex;
            margin-top: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card-custom{
            height: 100px;
            width: 100px;
            border: 1px solid rgba(0,0,0,0.5);
            margin-right: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<nav>
        <div class="logo">
            <img src="https://www.google.com/logos/doodles/2021/doodle-champion-island-games-august-24-6753651837108999-s.png" alt="">
        </div>
        <div class="nav-items">
            <span>login</span>
            <span>Register </span>
        </div>
    </nav>
</body>
</html>