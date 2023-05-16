<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            color: #0054a6;
            font-size: 28px;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #0054a6;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #003b80;
        }
    </style>
</head>

<body>
    <form action="welcome.php" method="post">
        <h1>Simple HTML Form</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="email">E-mail:</label>
        <input type="text" name="email" required>
        <input type="submit" value="Submit">
    </form>

</body>

</html>