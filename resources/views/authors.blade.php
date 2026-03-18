<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Authors</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Georgia, serif;
            background-color: #f5f2ee;
            color: #2c2c2c;
            display: flex;
            justify-content: center;
            padding: 60px 20px;
        }

        .container {
            background: #fff;
            border-radius: 8px;
            padding: 40px 48px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            font-size: 1.8rem;
            font-weight: normal;
            letter-spacing: 0.02em;
            margin-bottom: 28px;
            color: #1a1a1a;
            border-bottom: 1px solid #e0dbd4;
            padding-bottom: 16px;
        }

        label {
            display: block;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #777;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 14px;
            font-size: 1rem;
            font-family: Georgia, serif;
            border: 1px solid #d4cfc8;
            border-radius: 4px;
            background: #faf9f7;
            color: #2c2c2c;
            outline: none;
            transition: border-color 0.2s;
        }

   .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 24px;
            font-size: 0.85rem;
            color: #8a7a6a;
            text-decoration: none;
            letter-spacing: 0.04em;
            transition: color 0.2s;
        }

        .back-btn:hover {
            color: #2c2c2c;
        }

        .back-btn svg {
            width: 14px;
            height: 14px;
            stroke: currentColor;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }
        input[type="text"]:focus {
            border-color: #8a7a6a;
            background: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
         <a href="javascript:history.back()" class="back-btn">
            <svg viewBox="0 0 24 24">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
            Back
        </a>
        <h1>Authors</h1>
        <label for="books_input">Authors:</label>
        <input type="text" id="books_input" name="books_input">
    </div>
</body>
</html>