<?php
// Zapocinjanje sesije
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prijava</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="loginbox">
		<img src="login2.png" class="avatar">
		<h1>Prijavite se ovdje</h1>
		
		<form action = "validacija.php" method = "POST">
			<p>Korisničko ime</p>
			<input id = "usname" type="text" name="username" placeholder="Unesite korisničko ime" required>
			<p>Lozinka</p>
			<input id="passw" type="password" name="password" placeholder="Unesite lozinku" required>
            Zapamti me: <input id = "rem" type="checkbox" name="remember">
            <button name = "Login" type="submit">Prijava</button>
            <?php
                //provjera da li cookie postoji sa zadanim imenom   
                if(isset($_COOKIE['un']) and isset($_COOKIE['pw'])) {
                $un = $_COOKIE['un'];
                $pw = $_COOKIE['pw'];
                echo "<script>
                    document.getElementById('usname').value = '$un';
                    document.getElementById('passw').value = '$pw';
                </script>";
            }
            ?>
            <?php
                if(@$_GET['Invalid']==true){
			?>
            <div class="wlcm"><?php $alert2 = $_GET['Invalid'];
                echo "<script type='text/javascript'> alert(".json_encode($alert2).") </script>" ?></div>
            <?php
                }
            ?>
			<button id = "dug" class="dugmad" onclick="prikazireg()">Kreirajte novi račun</button>
		</form>
	</div>





	<script>
    // Dio koji pomaze da pokazemo registraciju
    function prikazireg(){
        document.getElementById('reg').style.visibility = 'visible';

    }
    </script>
    <link rel="stylesheet" href="styleINDEX2.css">
        
    <div class="container2" id="div">
        <h1>Poštovani korisniče, s ciljem unapređenja pretraživanja ove stranice, koristimo kolačiće!<br>
        Ukoliko nastavite sa korišćenjem stranice, znači da se slažete sa uslovima korišćenja kolačića.</h1>
        <a href="https://www.allaboutcookies.org/cookies/">Više o ovome pročitajte ovdje.</a>
        <div class="button1" >U redu</div>
        <?php echo "<script language='javascript'>
            window.onload = function() {
                document.getElementById('div').onclick = function() {
                this.style.display = 'none';
                };
            };</script>" 
            ?>


    </div>
        

        
        <div id="reg" style="visibility: hidden;">
            <div class="regbox">
            <h1>Registrujte se ovdje</h1>
            <form action = "registracija.php" method = "POST">
                <p>Korisničko ime</p>
                <input type="text" name="username" placeholder="Unesite korisničko ime" required>
                <p>Lozinka</p>
                <input type="password" name="password" placeholder="Unesite lozinku" required>
                <p>Lokacija</p>
                <input type="text" name="location" placeholder="Unesite lokaciju">
                <button type="submit">Registracija</button>

                <?php
                    if(@$_GET['Valid']==true){
                ?>
                <div class="wlcm"><?php $alert = $_GET['Valid'];
                    echo "<script type='text/javascript'> alert(".json_encode($alert).") </script>";?>
                    <?php
                        }
                    ?>
                    <?php 
                        if(@$_GET['Invalid2']==true){
                    ?>
                </div>
                    <div class="wlcm"><?php $alert1 = $_GET['Invalid2'];
                        echo "<script type='text/javascript'> alert(".json_encode($alert1).") </script>";?> </div>
                        <?php
                            }
                        ?>
                    </script>
            </form>

            </div>
        </div>
</body>
</html>