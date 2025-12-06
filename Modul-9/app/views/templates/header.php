<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($judul) ? htmlspecialchars($judul) : 'Judul Default'; ?> | MVC Sederhana</title>

    <style>
        /* Layout dasar */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
        }

        /* Konten fleksibel agar footer terdorong ke bawah */
        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar {
            background-color: #007bff;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Isi halaman */
        .container {
            padding: 30px;
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #007bff;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #e9ecef;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">

        <div class="navbar">
            <span class="logo">Simple MVC App</span>
            <div>
                <a href="#">Home</a>
                <a href="#">About</a>
            </div>
        </div>

        <div class="container">