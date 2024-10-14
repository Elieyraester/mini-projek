<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Great+Vibes&family=Lobster&display=swap" rel="stylesheet">
    <title>Register Form</title>
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            background-color:  #f8f8f8;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #b89d72;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        header nav {
            display: flex;
            gap: 20px;
        }
        header a:hover {
         color: #f4f4e8;
        }
        header nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        } 
        header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            font-family: Great Vibes;
        }
        .logo a {
            text-decoration: none;
            color: black;
        }
        .container {
            font-family: Lora;
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }
        .cart a {
            text-decoration: none;
            color: #333;
        }
        h1 {
            text-align: center;
            font-size: 28px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="password"], input[type="email"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-check {
            margin-bottom: 10px;
        }

        input[type="checkbox"], input[type="radio"] {
            margin-right: 10px;
        }

        .form-group .gender-options {
            display: flex;
            align-items: center;
        }

        .gender-options label {
            margin-right: 20px;
        }

        .privacy-group {
            display: flex;
            flex-direction: column;
        }

        .submit-button {
            background-color: #6c63ff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #5954d4;
        }

        .link {
            color: #6c63ff;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<header>

    <div class="logo"><a href="main.html">Eliey's Bakery</a></div>
	<nav>
        <a href="main.html">Home</a>
        <a href="bakery.html">Cake & Dessert</a>
        <a href="contact.html">Contact Us</a>
        <a href="main.html #section">About Us</a>
    </nav>

    <div class="cart">
        <a href="login.html">&#128100;</a>
    </div>
</header>
<body>

<div class="container">
    <h1>Register</h1>
    <form action="registerBackend.php" method="post">
        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile *</label>
            <input type="text" id="mobile" name="mobile" required>
        </div>
        <div class="form-group">
            <label for="birthday">Birthday *</label>
            <input type="date" id="birthday" name="birthday" required>
        </div>
        <div class="form-group gender-options">
            <label for="gender">Gender *</label>
            <input type="radio" id="male" name="gender" value="male" required> Male
            <input type="radio" id="female" name="gender" value="female" required> Female
        </div>
        <button type="submit" class="submit-button" name="submit">REGISTER</button>
    </form>
</div>

</body>
</html>
