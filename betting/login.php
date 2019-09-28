<html>

<head>
    <title>login</title>
    <style>
        #login {
            border: 1px solid;
            width: 300px;
            margin: 30px auto;
            background: red;
            height: 350px;
            border-radius: 30px;

        }

        input[type="text"],
        input[type="password"] {
            margin: 20px;
            border-radius: 30px;
            padding: 8px;
            border: none;
            outline: none;
        }

        input[type="submit"] {
            padding: 8px;
            margin: 30px;
            margin-left: 100px;
            border: none;
            outline: none;
            border-radius: 20px;
        }

        #decorate {
            background: grey;
            border-radius: 25px;
            width: 50%;
            margin-top: 10%;
            margin: 30px auto;
            height: 400px;
        }
    </style>

</head>

<body>
    <div id="decorate">
        <div id="login">
            <form autocomplete="off" action="php/login user.php" method="post">
                <div>username: <input type="text" name="username" placeholder="enter your username"></div>
                <div>password: <input type="password" name="password" placeholder="enter your password"></div>

                <input type="submit" name="submit" value="login">
            </form>
        </div>
    </div>
</body>

</html>