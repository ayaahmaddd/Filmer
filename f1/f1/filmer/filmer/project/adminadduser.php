<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <style>
        body {
            background: linear-gradient(45deg,#1f5662,#06996d,#505f75);
            font-family: "Times New Roman";

        }
        h1 {
            font-family: "Times New Roman";
            text-align: center;
            margin-top: 10px;
        }

        form {
            background: azure;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 0 auto;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"]{
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #06996d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background: -webkit-linear-gradient(left , #505f75 , #06996d);
        }
    </style>
</head>
<body>
<h1>Add User</h1>
<form method="post" action="handle_add_user.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <label for="email">password:</label>
    <input type="password" name="password" id="password" required>
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" required>
    <input type="submit" value="Add User">
</form>
</body>
</html>