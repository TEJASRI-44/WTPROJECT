
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Registration</title>
    <style>
        body {
            background-color:black; /* Background color */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: lightblue; /* Header background color */
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 4px;
            display: flex;
            flex-direction: row;
        }
        #div1 {
            /*background-color: purple;  Content background color */
            background-color: blue;
            text-align: center;
            color: white;
            font-family: Arial, sans-serif;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius:20px;
        }
        h1 {
            font-size: 36px;
            margin: 0;
            color:black;
           margin-left: 250px;
        }
        label {
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            color: white;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        input, select {
            width: 50%;
            height: 40px;
            font-size: 18px;
            margin-bottom: 20px;
            border-radius: 5px; 
            border: 1px solid #ccc; 
            padding: 5px; 
        }
        button {
            background-color: black; 
            color: white;
            height: 50px;
            width: 150px;
            border-radius: 30px;
            text-align: center;
            border: 2px solid black; 
            cursor: pointer; 
            font-size: large;
            margin-top: 4px;
           
        }
        div.container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius:30px;
        }
        h2{
           margin-bottom: 20px;
           margin-top: 2px;
           font-size: 35px;
         
        }
        .input-group {
            margin-bottom: 20px;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
<header>
        <h1>Andhra pradhesh Digital Polling</h1>
        <img id='logo' src="logo.png" style="margin-left:auto; margin-right: 157px; width:62px; height:62px;">
        
    </header>
    <div class="container">
        <div id="div1">
            <h2 style='color:black;'>Register</h2>
            <form action="register.php" method="POST" >
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="voterno">Voter Id No:</label>
                    <input type="text" name="voterno" id="Voterno" required>
                </div>
                <div class="input-group">
                    <label for="phonenumber">Phone Number:</label>
                    <input type="tel" name="phonenumber" id="phonenumber" required>
                </div>
                <div class="input-group">
                    <label for="aadhaar Number">aadhaar Number:</label>
                    <input type="tel" name="aadhaarNumber" id="aadhaarNumber" required>
                </div>
                <button type="submit" id="submit">Register</button><br>
                <P>
                Already a Voter
               <a href="index.php">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>
