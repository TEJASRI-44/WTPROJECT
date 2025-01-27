<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Registered</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #28a745;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .checkmark-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .checkmark-circle {
            width: 150px;
            height: 150px;
            border: 5px solid #28a745;
            background-color: lightgreen;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .checkmark {
            font-size: 100px;
            color: #28a745;
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }
        p{
            color: white;
            margin: 0;
            text-align: center;
        }
        .h4 {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="checkmark-container">
        <div class="checkmark-circle">
            <span class="checkmark">&#10003;</span>
        </div>
        <p class="h4">Your vote is registered successfully</p>
        <br>
        <p>Thank you for visiting</p>
    </div>
</body>
</html>

