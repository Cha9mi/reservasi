<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Register Pasien</title>
        <link rel="shortcut icon" href="assets/img/logoRRR.png" type="image/gif">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="center">
        <h1>Register Pasien</h1>
        <form action="register.php" method="POST">  
            <div class="txt_field">
                <input type="text" id="name" name="name" required>
                <span></span>
                <label>Name</label>
            </div>

            <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="txt_field">
                <input type="password" id="rePassword" name="rePassword" required>
                <span></span>
                <label>Re-Password</label>
            </div>

            <!-- <div class="txt_field">
                <input type="email" id="InputEmail" name="email" required>
                <span></span>
                <label>Email</label>
            </div> -->

            <!-- <div class="txt_field">
                <input type="tel" name="phone" required>
                <span></span>
                <label>Nomor Telepon</label>
            </div> -->

            <input type="submit" name="register" value="Register">

            <div class="signup_link">
                <a href="formLogin.php">Sudah punya akun?</a>
            </div>
        </form>
    </div>
    <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15643656;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15643656/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
    </body>
</html>