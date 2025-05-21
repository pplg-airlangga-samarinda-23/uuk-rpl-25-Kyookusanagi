<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu Sidomulyo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .topbar, .bottombar {
            width: 100%;
            background-color: green;
            color: white;
            padding: 15px 30px;
            font-weight: bold;
        }
        .topbar {
            text-align: left;
        }

        .bottombar {
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
        }
        
        body {
            background-color:rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: white;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            padding: 30px;
            text-align: center;
        }
        
        .login-header {
            margin-bottom: 25px;
        }
        
        .login-header h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .login-form .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .login-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        .login-form input:focus {
            outline: none;
            border-color:rgb(9, 161, 29);
        }
        
        .login-button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color:rgb(11, 116, 63);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        .login-button:hover {
            transition: 0.5s;
            background-color:rgb(22, 218, 114);
        }
        .register {
            text-decoration-line: none;
            color: rgb(16, 123, 66);
            transition: 0.5s;
        }

        .register:hover {
            transition: 0.5s;
            color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
   
    <div class="login-container">
        <div class="login-header">
            <h1>Posyandu Sidomulyo</h1>
            <p>Login form</p>
        </div>
        
        <form class="login-form" action="" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Masukkan username" name="username">
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Masukkan password" name="password">
            </div>

            <a href="tampilan_register.php" class="register">Belum punya akun?</a>
            
            <button type="submit" class="login-button">MASUK</button>
        </form>
    </div>
</body>
    <div class="bottombar">Posyandu Sidomulyo</div>

</html>