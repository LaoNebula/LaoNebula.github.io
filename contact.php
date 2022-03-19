<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaoNebula | Contact Me</title>
    <link rel="stylesheet" href="./css/contactMe.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/all.css" integrity="sha384-eLT4eRYPHTmTsFGFAzjcCWX+wHfUInVWNm9YnwpiatljsZOwXtwV2Hh6sHM6zZD9" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>LaoNebula</h1>
        <p>A beginner design for my contact form!</p>
    </header>

    <div class="formContainer">
        <form action="./php/sendEmail.php" method="post">
            <label for="fromEmail">From:</label>
            <input type="email" name="fromEmail" id="fromEmail" required autofocus>
            <br/>
            <label for="toEmail">To:</label>
            <input type="email" name="toEmail" id="toEmail" value="laonebula55@gmail.com" readonly required autofocus>
            <br/>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" required>
            <br/>
            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Message" required></textarea>
            <br/>
            <input type="submit" value="Send Email" name="sendBtn" id="sendBtn">
        </form>
    </div>
    
    <footer>
        <p id="copyright">Copyright &copy; 2022 | LaoNebula</p><a href="./discord/"><i class="fa-brands fa-discord"></i> Discord</a> | <a href="./facebook/"><i class="fa-brands fa-facebook-f"></i> Facebook</a> | <a href="./instagram/"><i class="fa-brands fa-instagram"></i> Instagram</a> | <a href="./twitch/"><i class="fa-brands fa-twitch"></i> Twitch</a> | <a href="./twitter/"><i class="fa-brands fa-twitter"></i> Twitter</a> | <a href="./youtube/"><i class="fa-brands fa-youtube"></i> YouTube</a> | <a href="#"><i class="fa-regular fa-envelope"></i> Contact Me (Coming soon!)</a>
    </footer>    
</body>
</html>