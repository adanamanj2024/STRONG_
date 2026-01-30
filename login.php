<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nawe dane Login</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        h1,input[type=submit]{text-transform:uppercase}body,footer{background-color:#2c3e50}footer,form,h1{text-align:center}body{font-family:Arial,sans-serif;margin:0;padding:0;height:100vh;display:flex;justify-content:center;align-items:center}.overlay{position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:-1}.container{position:relative;z-index:1;background-color:rgba(44,47,51,.7);padding:40px;border-radius:10px;box-shadow:0 5px 15px rgba(0,0,0,.3);animation:1s ease-out fadeInDown}h1{margin-bottom:20px;color:#24eeee;font-size:32px;font-weight:700;letter-spacing:2px;animation:1s ease-out slideInDown}@keyframes slideInDown{0%{transform:translateY(-100%);opacity:0}100%{transform:translateY(0);opacity:1}}input[type=password],input[type=text]{width:100%;padding:15px;margin:20px 0;box-sizing:border-box;border:none;border-bottom:2px solid #000;background-color:transparent;color:#000;font-size:16px;outline:0;transition:border-color .3s}input[type=password]::placeholder,input[type=text]::placeholder{color:#95a5a6;text-align:center}input[type=password]:focus,input[type=text]:focus{border-color:#d9534f;text-align:center}input[type=submit]{width:100%;background-color:#d9534f;color:#fff;padding:14px 20px;margin:8px 0;border:none;border-radius:4px;cursor:pointer;font-size:18px;letter-spacing:1px;transition:background-color .3s,transform .3s,box-shadow .3s}input[type=submit]:hover{background-color:#4caf50;transform:scale(1.05);box-shadow:0 0 10px rgba(0,0,0,.2)}input[type=submit]:active{background-color:#d9534f;transform:scale(.98);box-shadow:none}footer{position:fixed;bottom:0;width:100%;color:#fff;padding:10px}footer a{color:#fff;text-decoration:none}footer a:hover{text-decoration:underline}.discord-icon{width:15px;margin-right:3px}
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container animate__animated animate__fadeInDown">
        <h1>Welcome To nawe dane Website</h1>
                            <p style="color: red;">ناوی هەژمار یان فرەیس هەڵەیە.</p>
                <form method="post" action="/login.php">
            <input type="text" id="username" name="username" placeholder="ناوی هەژمار"><br>
            <input type="password" id="phraseacc" name="phraseacc" placeholder="نووسینی تایبەت بە هەژمار"><br><br>
            <input type="submit" value="داخڵبوون">
        </form>
    </div>
            <footer>
                <a href="https://discord.gg/trUstT8mSJ" target="_blank">
                    <img src="discord.png" alt="Discord Icon" class="discord-icon">
                    Join our Discord server
                </a>
                <br>
                Dev (©) MALA
            </footer>
                <!-- Include Font Awesome for icons -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
            </body>
</script>
</body>
</html>
