<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: rgb(255, 255, 255);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
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

        .container {
            background-color: #ffffff;
            width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            margin-top: 30px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555555;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: rgb(47, 196, 107);
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: rgb(27, 27, 27);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: rgb(0, 0, 0);
        }

        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #777777;
        }

        .footer a {
            color: black;
            transition: 1s;
        }

        .footer a:hover {
            color: rgb(25, 185, 14);
            transition: 1s;
        }
    </style>
</head>
<body>

    <div class="topbar">Posyandu Sidomulyo</div>

    <form action="" method="post">
        <div class="container">
            <h1>Register</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukan email anda" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukan password anda" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select id="jabatan" name="jabatan" required>
                    <option value="" disabled selected>Pilih Jabatan</option>
                    <option value="admin">Admin</option>
                    <option value="kader">Kader Posyandu</option>
                </select>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="footer">
                Sudah punya akun? <a href="tampilan_Login.php">Login</a>
            </div>
        </div>
    </form>

    <div class="bottombar">Posyandu Sidomulyo</div>

</body>
</html>