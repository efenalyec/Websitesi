<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yorum yap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #007bff;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <script>alert("Yorumunuza fotoğraf koymak isterseniz lütfen iletişime geçin.");</script>
    <div class="form-container">
        <h1>Yorum Yap</h1>
        <form action="php/yorumlarial.php" method="POST">
            <label for="name">Adınız:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>

            <label for="comment">Yorumunuz:</label>
            <textarea id="comment" name="comment" rows="5" required></textarea>

            <button type="submit">Gönder</button>
        </form>
    </div>
</body>
</html>