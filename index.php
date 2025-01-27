<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Login</title>
    <style>
        body {
            background-color: black;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: lightblue;
            color: white;
            padding: 20px 10px; /* Adjusted padding */
            text-align: center;
            display: flex;
            justify-content: space-between; /* Distribute items horizontally */
            align-items: center; /* Center vertically */
        }
        #div1 {
            background-color: blue;
            text-align: center;
            color: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        h1 {
            font-size: 24px; /* Adjusted font size */
            margin: 0;
        }
        img#logo {
            width: 50px; /* Adjusted logo size */
            height: 50px; /* Adjusted logo size */
        }
        h2 {
            margin-top: 10px; /* Adjusted margin */
            margin-bottom: 20px;
            color: white;
        }
        label {
            font-size: 18px; /* Adjusted font size */
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: white;
        }
        input, select {
            width: 100%; /* Full width for input fields */
            height: 40px;
            font-size: 16px; /* Adjusted font size */
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 5px;
        }
        button {
            background-color: black;
            color: white;
            height: 50px;
            width: 100%; /* Full width for button */
            border-radius: 30px;
            text-align: center;
            border: 2px solid black;
            cursor: pointer;
            font-size: large;
            margin-top: 10px; /* Adjusted margin */
        }
        div.container {
            max-width: 600px; /* Adjusted maximum width */
            margin: auto;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
        }
        a {
            color: white;
            text-decoration: none; /* Removed underline */
            display: block;
            margin-top: 10px; /* Adjusted margin */
            font-size: 16px; /* Adjusted font size */
            text-align: center;
        }

        /* Responsive Adjustments */
        @media only screen and (max-width: 600px) {
            h1 {
                font-size: 20px;
            }
            img#logo {
                width: 40px;
                height: 40px;
            }
            h2 {
                font-size: 20px;
            }
            label {
                font-size: 16px;
            }
            input, select {
                font-size: 14px;
            }
            button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <script>
            alert('Voter already voted');
        </script>
    <?php endif; ?>

    <header>
        <img id='logo' src="logo.png">
        <h1>Andhra Pradesh Digital Polling</h1>
    </header>
    <div class="container">
        <div id="div1">
            <h2>Please login using Voter ID No</h2>
            <form action="verify.php" method="POST">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="voterno">Voter ID No:</label>
                    <input type="text" name="voterno" id="Voterno" required>
                </div>
                <button type="submit" id="submit">Login</button>
                <p>If you are a new voter, <a href="registration.php">register here</a></p>
            </form>
        </div>
    </div>
</body>
</html>

