<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tika photo video</title>
         <!-- script externe jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- CSS FILES -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
<!--

TemplateMo 567 Nomad Force

https://templatemo.com/tm-567-nomad-force

-->
<?php
$msg="";
$VotreAdresseMail="cmdeco@cmdeco.com";
$mail=$_POST['email'];
$service =$_POST['checkbox'];
// si le bouton "submit" est cliqué
//if(isset($_POST['submit'])) {
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //on vérifie que le champ email est correctement rempli
   $msg="allo2";
   if(empty($_POST['email'])) {
       $msg="Le champ mail est vide";
   } else {
       //on vérifie que l'adresse est correcte
       if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['email'])){
           $msg="L'adresse mail entrée est incorrecte";
       }else{
           //on vérifie que le champ sujet est correctement rempli
           if(empty($_POST['name'])) {
               $msg="Le champ nom est vide";
           }else{
            if(empty($_POST['checkbox'])) {
                $msg="Le champ service est vide";
            }else{
               //on vérifie que le champ message n'est pas vide
               if(empty($_POST['message'])) {
                   $msg="Le champ message est vide";
               }else{
                   //tout est correctement renseigné, on envoi le mail
                   //on renseigne les entêtes de la fonction mail de PHP
                   $Entetes = "MIME-Version: 1.0\r\n";
                   $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                   $Entetes .= "From: cmdeco@cmdeco.com <".$VotreAdresseMail.">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                   $Entetes .= "Reply-To: cmdeco@cmdeco.com <".$VotreAdresseMail.">\r\n";
                   //on prépare les champs:
                   $Mail=$_POST['email']; 
                   $Sujet='Demande de devis sur tika photo video';
                   $service =$_POST['checkbox'];
                   //$Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                   $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                   $Message .= "\r\n";
                   $Message .= " mail : \r\n";
                   $Message.=htmlentities($_POST['email'], ENT_QUOTES,"UTF-8");
                   $Message .= "\r\n";
                   $Message .= " service : \r\n";
                   $Message.=htmlentities($_POST['checkbox'], ENT_QUOTES,"UTF-8");
                   //en fin, on envoi le mail
                   //if(mail("cmdeco@cmdeco.com","My subject",$msg)){
                   if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                       $msg="Le mail à été envoyé avec succès!";
                       echo '<script>alert("Le mail à été envoyé avec succès!")</script>';
                   } else {
                       $msg="Une erreur est survenue, le mail n'a pas été envoyé";
                       echo '<script>alert("Une erreur est survenue, le mail n\'a pas été envoyé")</script>';
                   }
               }
           }
       }
   }
}
 }
?>

<script>
    function toggleMute() {
        var video = document.getElementById("myVideo");
        var button = document.getElementById("muteButton");

        console.log("Vidéo trouvée :", video); // Log pour vérifier si l'élément vidéo est bien sélectionné
        console.log("Vidéo muette ?", video.muted);

        if (video.muted) {
            video.muted = false;
            button.textContent = "🔇";
        } else {
            video.muted = true;
            button.textContent = "🔊";
        }
    }
    function myFunction() {
    var video = document.getElementById("myVideo");
    video.muted = true;
    }
</script>
<style>
    .orange{
        color: #ffc107;
        font-weight: bold;
    }
 button {
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            background-color: rgba(255,255,255,0.1);
            border: none;
        }

        html {
  scroll-behavior: smooth;
}

body {
  scroll-behavior: smooth;
}

.bt-cat {
    margin: auto;
    width:600px;
}
@media all and (min-width: 320px) and (max-width: 835px) {

    .bt-cat {
    width:100%;
    }

}
</style>
    </head>
    
    <body  onload="myFunction()">
    
        <main>

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                    Tika Photo video
                    </h1>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        Créative Freelance <strong class="custom-underline">Monteuse et photographe</strong>
                    </p>
                    
                </div>

                <div class="videoWrapper">
                    <video id="myVideo" autoplay="false" loop="false" muted="false"  class="custom-video" poster=""><!--remplir poster avec jpg pour image de demarage--> <!--muted="false"-->
                        <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
            </section>

            <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <strong>Tika Photo Video</strong>
                    </a>
                    <button id="muteButton" onclick="toggleMute()">🔇</button>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#about">Mon studio</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#videos">Vidéo</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Photographie</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#news">Actualités</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contactez moi</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <section class="section-padding pb-0" id="about">
                <div class="container mb-5 pb-lg-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="mb-3" data-aos="fade-up">Ma philosophie repose sur la passion, la créativité et l'authenticité.</h2>
                        </div>

                        <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                            <p class="text-center"  data-aos="fade-up" data-aos-delay="500"><img class="img-fluid" src="images/news/montage-video-photographe-freelance-paris.jpg" ></p>
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                        <p data-aos="fade-up" data-aos-delay="500"> <b>Que ce soit une séance photo, un tournage ou un montage vidéo,</b> je m'efforce de capturer l'émotion et l'énergie de chaque situation.</p>
                        <p class="me-4" data-aos="fade-up" data-aos-delay="300"><b>La collaboration est au cœur de mon approche.</b><br><br> Je considère chaque client comme un partenaire, 
                            et il est essentiel pour moi de comprendre leurs besoins, leurs attentes et leur vision.<br><br> Mon objectif est de créer un espace où chacun se sent à l'aise pour s'exprimer,
                             afin que nous puissions travailler ensemble à <b>la création de contenu authentique et engageant..</b><br><br>
                            <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">Afin de travailler sur vos vidéos, </a> 
                            <a rel="nofollow" href="https://templatemo.com/tm-567-nomad-force" target="_parent">en fonctions de vos retours</a>
                             et être la plus réactive possible. <br><br> Cela nous aidera à être le plus efficient, possible. <br><br><span class="orange">Alors, parlons de votre projet.</span></p>
                        </div>

                       

                    </div>
                </div>
            </section>
                <!--
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="images/elena-rabkina-eVVzwsNhNf4-unsplash.jpg" class="img-fluid about-image" alt="">
                        </div>

                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3" data-aos="fade-up"> Acquisition  Dérushage  Montage vidéo</h3>

                                <p class="text-secondary-white-color" data-aos="fade-up">Vous recherchez une monteuse ?</p>

                                <div class="mt-3 custom-links">
                                    
                                    <a href="#news" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="100">Découvrez mon workflow</a>

                                    <a href="#contact" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="300">et travaillez avec moi</a>
                                </div>

                            </div>
                        </div>
                 
                     
                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/people/premier-pro.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-warning">
                                            <h3 class="text-white mb-0">Premiere Pro</h3>

                                            <p class="text-secondary-white-color mb-0">Montage</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/project-leder-with-disabilities-looking-front-sitting-immobilized-wheelchair-business-office-room.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-primary">
                                            <h3 class="text-white mb-0">After effect</h3>

                                            <p class="text-secondary-white-color mb-0">Motion design simple</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/DaVinci_Resolve_Studio.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-success">
                                            <h3 class="text-white mb-0">DaVinci Resolve</h3>

                                            <p class="text-secondary-white-color mb-0">Etalonnage</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/actrice.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-info">
                                            <h3 class="text-white mb-0">Interview</h3>

                                            <p class="text-secondary-white-color mb-0">Documentaire</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/working-business-lady.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-danger">
                                            <h3 class="text-white mb-0">Films</h3>

                                            <p class="text-secondary-white-color mb-0">Cinéma</p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                      <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                      <span class="visually-hidden">Next</span>
                                </button>
                            </section>

                        </div>
                    </div>
                </div>
            -->
            <section class="section-padding pb-0" id="videos">
            <h2 class="mb-5 text-center" data-aos="fade-up">De la Captation vidéo au montage</h2>
                <div class="container text-center"><br><br><a href="videos.html"><img class="img-fluid" src="images\lifestyle.JPG" style="width:600px;"><p class="bg-warning text-light text-center justify-content-center bt-cat" >Portfolio</p></a></div>
            </section>

            <section class="section-padding" id="portfolio">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Photographie de portrait et plateau</h2>
                            <div class="container text-center"><br><br><a href="photos.html"><img class="img-fluid" src="images\001_photo-culinaire-studio.JPG" style="width:600px;"><p class="bg-warning text-light text-center bt-cat" >Portfolio</p></a></div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section class="news section-padding" id="news">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Actualités</h2>
                        </div>

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="news-thumb" data-aos="fade-up">
                                <a href="montage-video.html" class="news-image-hover news-image-hover-warning">
                                    <img src="images/news/premiere-pro.jpg" class="img-fluid large-news-image news-image" alt="">
                                </a>

                                <div class="news-category bg-warning text-white">Montage vidéo</div>
                                
                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="montage-video.html" class="news-title-link">Documentaire, court métrage, branding</a>
                                    </h5>

                                    <span class="text-muted">Ouverture début Décembre 2024</span>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100">
                                    
                                    <a href="photographe-portrait-paris.html" class="news-image-hover news-image-hover-primary">
                                        <img src="images/news/portrait-studio-pro.jpg" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category bg-primary text-white">Photographie</div>
                                </div>
                                
                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="photographe-portrait-paris.html" class="news-title-link">Studio photo, Portrait et branding</a>
                                        </h5>

                                        <div class="d-flex flex-wrap">
                                            <span class="text-muted me-2">
                                                <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                                Boulogne Billancourt,
                                            </span>

                                          <!--  <span class="text-muted"></span>   <span class="text-muted">12 septembre 2024</span> -->
                                       <!-- sdkhfkdfjhfkjghkfjdhgku-->
                                       
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100" data-aos="fade-up">
                                    
                                    <a href="photographe-tournage.html" class="news-image-hover news-image-hover-success">
                                        <img src="images/news/photographe-plateau-paris.jpg" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category bg-success text-white">Photographie</div>
                                </div>
                                
                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="photographe-tournage.html" class="news-title-link">Reportage, plateau de tounage</a>
                                        </h5>

                                        <span class="text-muted"></span>
                                    </div>
                                </div>
                            </div> 
                        </div>

                    </div>
                </div>
            </section>

            <section class=" contact section-padding" id="contact">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-7 col-12 mx-auto">

                            <h2 class="mb-4 text-center" data-aos="fade-up">Parlez moi de votre projet</h2>

                            <form action="" method="post" class="contact-form" role="form" data-aos="fade-up">

                                <div class="row">
                                    <div class="col-12">
                                        <label for="services" class="form-label">Services<sup class="text-danger">*</sup></label>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" id="checkbox1" name="checkbox"  value="Branding" class="form-check-input">

                                            <label class="form-check-label" for="checkbox1">Branding</label>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-12 my-2 my-lg-0">
                                        <div class="form-check">
                                            <input type="checkbox" id="checkbox2" name="checkbox" value="Edition vidéo" class="form-check-input">

                                            <label class="form-check-label" for="checkbox2">Edition vidéo</label>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" id="checkbox3" name="checkbox" value="Photographie" class="form-check-input">

                                            <label class="form-check-label" for="checkbox3">Photographie</label>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-6">
                                        <label for="name" class="form-label">Nom <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>
                                    </div>

                                    <div class="col-12 my-4">
                                        <label for="message" class="form-label">Comment pourrais-je vous aider?</label>

                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Comment pourrais-je vous aider?" required></textarea>
                                        
                                    </div>

                                    
                                </div>

                                <div class="col-lg-5 col-12 mx-auto mt-5">
                                    <button type="submit" class="form-control">Envoyez un message</button>
                                </div>
                            </form>
                            <?php
			               // echo $msg;
		                    ?>
                        </div>

                    </div>
                </div>
            </section>

            <section class="google-map">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.635108836706!2d2.239609876195482!3d48.827023202913814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67af0138a7bd7%3A0x53b73a9bc8df80db!2sRue%20Nationale%2C%2092100%20Boulogne-Billancourt!5e0!3m2!1sfr!2sfr!4v1726154778281!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h5 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Boulogne Billancourt, France
                        </h5>

                        <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                            tika_malika@yahoo.com
                        </a>
                    </div>

                    <div class="col-6">
                    <div< class="copyright-text mb-0">Copyright © Tikaphotovideo 2024

                        
                        <br><br>Design: <a href="https://cmdeco.com/" target="_parent">Cm deco</a><br><br>
                    
                        Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    </p>
                    
                    </div>

                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
         <!-- 
        <script src="js/jquery.min.js"></script>
    -->
        <script src="js/bootstrap.bundle.min.js"></script>
        
        <script src="js/jquery.sticky.js"></script>
        
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>