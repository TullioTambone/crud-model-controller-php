<header>
    <nav id="navbar">
        <div>
            <img src="https://www.svgviewer.dev/static-svgs/473711/php.svg" alt="" width="200px" height="180px">
        </div>
        <ul class="classe-ul">
            <?php

            if (isset($_SESSION['email'])) {
            
            echo '<li class="list-class"><a href="http://localhost/edusogno-esercizio-master/mails/passwordMail.php" class="link-class" id="password">Cambia password</a></li>';
                echo '<li class="list-class"><a class="link-class" href="http://localhost/edusogno-esercizio-master/dashboard.php">Dashboard</a></li>';
                echo '<li class="list-class"><a class="link-class" href="http://localhost/edusogno-esercizio-master/crud/addEvent.php">Aggiungi Evento</a></li>';
                echo '<li class="list-class"><a class="link-class" href="http://localhost/edusogno-esercizio-master/logout.php">Logout</a></li>';
            } else {
               
                echo '<li class="list-class"><a class="link-class" href="http://localhost/edusogno-esercizio-master/index.php">Login</a></li>';
                echo '<li class="list-class"><a class="link-class" href="http://localhost/edusogno-esercizio-master/register.php">Registrati</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>