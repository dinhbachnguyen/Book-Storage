<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/web.css">
    <script type="text/javascript" src="../js/script.js" async></script>

</head>

<body style="background: url(../pic/background.jpg); background-size: cover;">

    <div style="padding-left:40%" style="padding-right:20%">
        <br><br><br>
        <h1 style="color: rgb(255, 0, 0);">Groupe 8 Project</h1>
        <br>
    </div>

    <article style="padding-left:38%">

        <div class="box">
            <form action="../php/connexion_admin.php" method="POST">
                <table>
                    <h3 style="padding-left:18%">Sign in form Admin</h3>
                    <tr>
                        <td><label name="login">Login</label></td>
                        <td><input type="text" name="login" required/></td>
                    </tr>
                    <tr>
                        <td><label name="password">Password</label></td>
                        <td><input type="password" name="password" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><br>
                            <input type="submit" value="Connexion" name="button1" />
                            <input type="submit" value="Register" name="button2" />

                        </td>
                    </tr>
                    <tr>
                        <td><span id='Etat'></span></td>
                    </tr>
                </table>
            </form><br>
            <button onclick="location.href='register.html'"> User </button>
            <button onclick="location.href='home_guest.php'"> Guest </button>

        </div>

    </article>

</body>

</html>