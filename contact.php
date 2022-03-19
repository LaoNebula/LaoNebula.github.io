<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaoNebula | Contact Me</title>
    <link rel="stylesheet" href="./css/contactMe.css">
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
            <input type="email" name="toEmail" id="toEmail" value="contact@laonebula.me" readonly required autofocus>
            <br/>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" required>
            <br/>
            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Message:" required></textarea>
            <br/>
            <input type="submit" value="Send Email" name="sendBtn" id="sendBtn">
        </form>
    </div>
    
    <footer><a href="./discord/">Discord</a> <a href="./facebook/">Facebook</a> <a href="./instagram/">Instagram</a> <a href="./twitch/">Twitch</a> <a href="./twitter/">Twitter</a> <a href="./youtube/">YouTube</a> <a href="contact.php">Contact Me</a></footer>
</body>
</html>