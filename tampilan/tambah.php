<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu Sidomulyo</title>
    <script src="script.js"> </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        aside {
            width: 250px;
            background: #333;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .profile {
            padding: 20px;
            border-bottom: 1px solid #555;
            text-align: center;
        }

        .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #555;
            display: block;
            margin: 0 auto 10px;
        }

        .profile span {
            display: block;
            margin-top: 5px;
            background: orange;
            padding: 5px;
            border-radius: 4px;
            font-size: 12px;
        }

/* Navigation Styles */
        nav {
            padding: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 15px;
        }

        nav ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        nav ul li a i {
            font-style: normal;
            width: 24px;
            text-align: center;
            font-size: 18px;
        }


        .content {
            display: none;
            padding: 20px;
        }

        .content.active {
            display: block;
            gap: 20px;
        }
        .MainContent {
            display: none;
            padding: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .MainContent.active {
            display: flex;
        }
                .bottom-menu {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .bottom-menu ul {
            list-style: none;
        }

        .bottom-menu li {
            margin-bottom: 10px;
        }

        .bottom-menu li a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .bottom-menu li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .bottom-menu li a i {
            font-style: normal;
            width: 24px;
            text-align: center;
            font-size: 18px;
        }





        .back-button {
            background: #6c757d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            align-self: flex-start;
            transition: background 0.3s;

        }
        
        .back-button:hover {
            background: #5a6268;
        }

        main {
            flex: 1;
            background: #fff;
        }

        .topbar {
            background: green;
            color: white;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



        .card {
            flex: 1;
            color: white;
            padding: 20px;
            border-radius: 5px;
            position: relative;
            text-decoration: none;
            transition: 0.5s;
            cursor: pointer;
        }

        .card:hover {
            transition: 0.5s;
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card.blue { background: #007bff; }
        .card.orange { background: #fd7e14; }
        .card.green { background: #28a745; }
        .card.red { background: #dc3545; }

        .card .text {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card .more {
            background: rgba(255,255,255,0.3);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
        }

         /* CSS untuk tabel buku */
        .book-table-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        
        .table-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            align-items: center;
        }
        
        .add-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        
        .table-controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            align-items: center;
        }
        
        .entries-info {
            font-size: 14px;
            color: #666;
        }
        
        .search-box input {
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        tr:hover {
            background-color: #f9f9f9;
        }
        
        .action-icon {
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }
        
        .table-footer {
            font-size: 14px;
            color: #666;
            text-align: right;
        }
    </style>
</head>
<body>
    <aside>
        <div>
            <div class="profile">
                <img src="https://cdn.idntimes.com/content-images/post/20240226/download-5-5a5b0cdc20a643bc77487b9d1b4b8387.jpeg" alt="User">
                <span>ADMIN NI BOS</span>
            </div>
            <nav>
                <ul>
                <li><a href="tampilan_dashboard.php" onclick="ShowPage(1)"><i>🏠</i> Dashboard</a></li>
                    <li><a href="tambah.php"><i>📁</i> Tambah data bayi</a></li>
                </ul>
            </nav>
        </div>
        <ul class="bottom-menu">
            <li class="LogOut"><a href="tampilan_Login.php" > <i>🔓</i>  Log Out</a> </li>
        </ul>
    </aside>
    <main>
        <div class="topbar">
            <div>Posyandu Sidomulyo</div>
        </div>
  

            </div>
        </div>
    </div>


    </main>
</body>
</html>
