<?php
// Vérifier si le bouton "Se déconnecter" a été cliqué
if (isset($_POST['logout'])) {
    // Détruire la session actuelle
    session_start();
    session_unset();
    session_destroy();

    // Réinitialiser les cookies en les mettant à une date passée
    setcookie('PHPSESSID', '', time() - 3600, '/');

    // Rediriger vers une page de confirmation de déconnexion par exemple
    header('Location: confirmation_deconnexion.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Acceuil.css">
    <title>Accueil</title>
</head>

<body>
    <header>
        <nav class="bb">
            <div class="logo">
                <img src="../page utilisateur/src/logo.jpg" alt="Logo">
            </div>
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li ><a name="logout" href="../double connxion/connexion.php">Se deconnecter</a></li>
                <li><a href="../panier/index.php">Boutique</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Contenu principal de la page -->
        <h1>Bienvenue chez Smart-Shop</h1>
    </main>
    <div class="slider" id="slide">
        <div class="slides" id="slide">
            <img src="../page utilisateur/src/portfolio1.jpg" alt="">
            <img src="../page utilisateur/src/portfolio2.jpg" alt="">
            <img src="../page utilisateur/src/portfolio3.jpg" alt="">
            <img src="../page utilisateur/src/portfolio4.jpg" alt="">
            <img src="../page utilisateur/src/portfolio5.jpg" alt="">
        </div>
        <div class="navigation">
            <div class="prev">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="next">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div><br>
    <div class="propos">
        <h3>SMAR<span>T-</span>SECURES</h3>
        <p>Venez découvrir l'univers commercial que vous propose <br>SMART-SECURES.Obtenez n'importe quel article à des prix <br> abordables et très bas.Nous vous proposons diverses.</p>
    </div><br><br><br><br>
    <div class="container1">

        <div class="container">
            <div class="card">
                <div class="articleimg"><img src="../page utilisateur/src/portfolio5.jpg" alt=""></div>
                <div class="articletitle">Mac Book + Iphone + Montre</div>
                <div class="articleprice"><span class="old-price">350000FCFA</span> 300000FCFA</div>
                <button id="redirectButton">Commander</button>
            </div>

            <div class="card">
                <div class="articleimg"><img src="../page utilisateur/src/portfolio3.jpg" alt=""></div>
                <div class="articletitle">Hp</div>
                <div class="articleprice"><span class="old-price">175000FCFA</span> 150000FCFA</div>
                <button id="redirectButton1">Commander</button>
            </div>

            <div class="card">
                <div class="articleimg"><img src="../page utilisateur/src/portfolio2.jpg" alt=""></div>
                <div class="articletitle">Hp</div>
                <div class="articleprice"><span class="old-price">180000FCFA</span> 170000FCFA</div>
                <button id="redirectButton2">Commander</button>
            </div>

            <div class="card">
                <div class="articleimg"><img src="../page utilisateur/src/portfolio1.jpg" alt=""></div>
                <div class="articletitle">Mac Book + Montre + Iphone</div>
                <div class="articleprice"><span class="old-price">400000FCFA</span> 350000FCFA</div>
                <button id="redirectButton3">Commander</button>
            </div>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/box tv android.jpeg" alt=""></div>
            <div class="articletitle1"><a href="#" class="articletitle a">Box tv android</a></div>
            <div class="articleprice"><span class="old-price">17750FCFA</span> 1500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/box tv ultra hd-4k..jpeg" alt=""></div>
            <div class="articletitle1"><a href="#" class="articletitle a">Box tv ultra hd-4k</a></div>
            <div class="articleprice"><span class="old-price">23000FCFA</span> 1700FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/tv box 4K-8go-wiffi-ultra.jpeg" alt=""></div>
            <div class="articletitle1"><a href="#" class="articletitle a">Box tv wiffi-ultra</a></div>
            <div class="articleprice"><span class="old-price">20000FCFA</span> 1500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/box tv ultra hd-4k.jpeg" alt=""></div>
            <div class="articletitle1"><a href="#" class="articletitle a">Box tv ultra hd-4k</a></div>
            <div class="articleprice"><span class="old-price">10000FCFA</span> 9500FCFA</div>
            <button>Commander</button>
        </div>

    </div>
    </div><br><br>

    <div class="container">
        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/mag 322w1 decodeur iptv.jpeg" alt="" id="premiere_image"></div>
            <div class="articletitle">
                <p>MAG 322w1 decodeur iptv</p>
            </div>
            <div class="articleprice"><span class="old-price">10000FCFA</span> 9500FCFA</div>
            <button>Commander</button>
            <div class="position">

                <p>Lorem ipsum dolor sit amet consectetur <br>adipiscing elit.Ad ea mollitia am</p><br><br>

            </div>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/decodeur iptv.jpeg" alt=""></div>
            <div class="articletitle">Decodeur iptv</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/hdme decodeur iptv.jpeg" alt=""></div>
            <div class="articletitle">HDME decodeur iptv</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/boitier iptv.jpeg" alt=""></div>
            <div class="articletitle">Boitier iptv</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>
    </div><br><br>

    <div class="container">
        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/norton anti.jpeg" alt=""></div>
            <div class="articletitle">Norton antivirus</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/firefox.jpeg" alt=""></div>
            <div class="articletitle">Firefox</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/pack adobe.jpeg" alt=""></div>
            <div class="articletitle">Adobe</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>

        <div class="card">
            <div class="articleimg"><img src="../page utilisateur/src/pack office.jpeg" alt=""></div>
            <div class="articletitle">Office</div>
            <div class="articleprice"><span class="old-price">8750FCFA</span> 5500FCFA</div>
            <button>Commander</button>
        </div>
    </div>
    <footer>
    <div class="footer-content">
        <p>&copy; 2021 My Website</p>
    </div>
</footer>
    </div>
    

    
    <!--     Code Javascript         -->
    <script>
        /*debut du slider*/
        const slides = document.querySelector('.slides');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let counter = 1;
        const size = slides.children[0].clientWidth;

        slides.style.transform = 'translateX(' + (-size * counter) + 'px)';

        nextBtn.addEventListener('click', () => {
            if (counter >= slides.children.length - 1) return;
            slides.style.transition = "transform 0.6s ease-in-out";
            counter++;
            slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
        });

        prevBtn.addEventListener('click', () => {
            if (counter <= 0) return;
            slides.style.transition = "transform 0.6s ease-in-out";
            counter--;
            slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
        });

        slides.addEventListener('transitionend', () => {
            if (slides.children[counter].id === 'lastClone') {
                slides.style.transition = "none";
                counter = slides.children.length - 2;
                slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
            }
            if (slides.children[counter].id === 'firstClone') {
                slides.style.transition = "none";
                counter = slides.children.length - counter;
                slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
            }
        });
        /*fin du slider*/
        var p2 = document.getElementById('p2')
        document.getElementById('p2').style.display = 'none';
        var div1 = document.getElementById('entete_premiere');
        var p1 = document.getElementById('p1');

        p1.addEventListener('click', fonction);

        function fonction() {
            document.getElementById('p1').style.display = 'none';
            document.getElementById('p2').style.display = 'inline';
            document.getElementById('entete_premiere').style.height = '400px';
            document.getElementById('entete_premiere').style.transition = '0.6s';

        }

        p2.addEventListener('click', fonction1);

        function fonction1() {
            document.getElementById('p1').style.display = 'inline';
            document.getElementById('p2').style.display = 'none';
            document.getElementById('entete_premiere').style.height = '75px';

        }

        let image1 = document.getElementById('premiere_image');
        document.getElementById('premiere_explication').style.display = 'none';

        premiere_image.addEventListener('mouseover', fonction1);
        premiere_image.addEventListener('mouseout', reset1)

        function fonction1() {
            document.getElementById('premiere_explication').style.display = 'block';
        }

        function reset1() {
            document.getElementById('premiere_explication').style.display = 'none';
        }

        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide");

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 500); // Change d'image toutes les 5 secondes
        }
    </script>

<script>
// Récupération du bouton en Javascript
const redirectButton = document.getElementById('redirectButton');

// Ajout d'un écouteur d'événement de clic sur le bouton
redirectButton.addEventListener('click', function() {
    // Redirection vers la nouvelle page souhaitée
    window.location.href ='../page utilisateur/commande/buy2.php';
});
</script>
<script>
// Récupération du bouton en Javascript
const redirectButton1 = document.getElementById('redirectButton1');

// Ajout d'un écouteur d'événement de clic sur le bouton
redirectButton1.addEventListener('click', function() {
    // Redirection vers la nouvelle page souhaitée
    window.location.href ='../page utilisateur/commande1/buy2.php';
});
</script>
<script>
// Récupération du bouton en Javascript
const redirectButton2 = document.getElementById('redirectButton2');

// Ajout d'un écouteur d'événement de clic sur le bouton
redirectButton2.addEventListener('click', function() {
    // Redirection vers la nouvelle page souhaitée
    window.location.href ='../page utilisateur/commande2/buy2.php';
});
</script>
<script>
// Récupération du bouton en Javascript
const redirectButton3 = document.getElementById('redirectButton3');

// Ajout d'un écouteur d'événement de clic sur le bouton
redirectButton3.addEventListener('click', function() {
    // Redirection vers la nouvelle page souhaitée
    window.location.href ='../page utilisateur/commande3/buy2.php';
});
</script>

</body>

</html>