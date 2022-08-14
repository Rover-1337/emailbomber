<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Email Bomber</title>
</head>
<body onload="loading()">
    <div class="loadingscreen">
        <img src="mail.png"/>
        <div class="loadingtext">
            <p>Loading...</p>
        </div>
    </div>

    <div class="after" style="display:none">
        
        <div id="success" class="w3-panel w3-pale-green w3-border" style="display:none">
            <h3>Success!</h3>
            <p id="message"></p>
        </div>

        <div class="welcom">
            The Email Bomber
        </div>

        <div class="home">
            <img src="mail.png"/>
        </div>

        <div class="attack">
            <form action="bomb.php" method="POST" target="postframe">
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" placeholder="Email to bomb" required>
                
                <br><br>
                <label for="amount">Amount of emails:</label><br>
                <input type="number" name="amount" id="amount" placeholder="Amount of emails" required>        
                
                <br><br>
                <input onclick="send()" id="sent" type="submit" value="Attack">
            </form>
        </div>
        <iframe name="postframe" id="postframe" style="display:none;"></iframe>

    </div>

    <script src="index.js"></script>
</body>

</html>