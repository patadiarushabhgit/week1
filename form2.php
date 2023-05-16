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
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <?php echo $_POST["name"]; ?></h1>
        <p>Your email address is: <?php echo $_POST["email"]; ?></p>
        <p>Your website address is: <?php echo $_POST["website"]; ?></p>
        <p>Your comment  is: <?php echo $_POST["comment"]; ?></p>
        <p>Your gender  is: <?php echo $_POST["gender"]; ?></p>
    </div>
</body>
</html>
