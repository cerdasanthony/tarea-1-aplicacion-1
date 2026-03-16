<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        nav {
            background: #5a67d8;
            padding: 14px 30px;
            display: flex;
            gap: 10px;
            align-items: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 0.95rem;
            padding: 6px 14px;
            border-radius: 5px;
            transition: background 0.2s;
        }
        nav a:hover {
            background: rgba(255,255,255,0.2);
        }
        .content {
            max-width: 480px;
            margin: 60px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 40px;
        }
        h1 {
            font-size: 1.4rem;
            color: #2d2d2d;
            margin-bottom: 24px;
        }
        label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #555;
            display: block;
            margin-bottom: 6px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 0.95rem;
            outline: none;
            transition: border 0.2s;
            box-sizing: border-box;
        }
        input[type="text"]:focus {
            border-color: #5a67d8;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/books">Books</a>
        <a href="/authors">Authors</a>
        <a href="/publishers">Publishers</a>
    </nav>

    <div class="content">
        <h1>Main</h1>
        <label for="main_input">Main:</label>
        <input type="text" id="main_input" name="main_input" placeholder="Escribe algo...">
    </div>
</body>
</html>