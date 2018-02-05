<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, shrink-to-fit=no">
	        <meta name="keywords" content="footer, address, phone, icons" />
<!-- appel CSS !-->
            <link rel="stylesheet" href="css/styles.css">
<!-- appel polices google -->
            <link href="http://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
            <link href="http://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<!-- appel icones socialsnetwork ! -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- appel jquery skills langages ! -->            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
           
            <title>Mon Portfolio</title>
            
 <!-- bandeau mobile message en JS  -->  
            
            <script>
    $(document).ready(function(){
 
//au chargement de la page je règle le marginTop de #barre à 0 (il etait fixé à -50px dans le css) en 500ms
 
             $('#barre').animate({
                marginTop: "0",
            }, 500);
 
//au clic sur #fermer qui est la croix j'anime le marginTop de #barre à -35px pour le faire remonter et laisser le border bottom apparent
             
            $("#fermer").mousedown(function(){      
 
                        $('#barre').animate({ 
                                marginTop: "-35px",
                        }, 500);
                     
               });
     });
            </script>
        
        </head>
    
    <body>
        <div id="barre">
    En version Wordpress sur  <a href="http://damienbenard.fr">http://damienbenard.fr</a>. Rejoignez-moi sur <a href="http://www.linkedin.com/in/damienbenard06210">Linkedin</a>
                <div id="fermer">
                        <i class="fa fa-lg fa-window-close"></i>
                </div>
        </div>
                
        <header>
                <a id="hautdepage"></a>
                    <div class="wrapper">
                        <img class="logo" src="img/logo2.png" alt="logo de damien benard" />
                            <nav>
                                <ul>
                                    <li><a href="#presentation">Présentation</a></li>
                                    <li><a href="#cv">Cv</a></li>
                                    <li><a href="#competences">Compétences</a></li>
                                    <li><a href="#projets">Projets</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                        <h1>Damien Benard<span class="slogan">, Développeur Web à vos services</span></h1>
                    </div>
        </header>
        
        <main>
                <div class="wrapper">
                    <div id="presentation">
                        <div class="photo" id="photo">
                                <img src="img/damss.jpg" alt="photo de damien" />
                        </div>
                                <aside> 
                                    <div class="profile-info">
                                        <div class="lebonjour"><span>"Bonjour"</span></div>  
                                            <h2 class="profile-title">Damien Benard</h2>	
                                            <h2 class="profile-position">Développeur Web &amp; IT Services</h2>
                                    
                                    <div id="trait"></div>
                                            <ul class="profile-list">
                                                <li class="clearfix">
                                                    <strong class="title">Age</strong>
                                                        <span class="cont">44</span>
                                                </li>   
                                                <li class="clearfix">
                                                    <strong class="title">Adresse</strong>
                                                        <span class="cont">265, Bd Jeanne D' Arc 06210 Mandelieu</span>
                                                </li>
                                                <li class="clearfix">
                                                    <strong class="title">Email</strong>
                                                        <span class="cont">damienbenard@gmail.com</span>
                                                </li> 
                                                <li class="clearfix">
                                                    <strong class="title">Tel</strong>
                                                        <span class="cont">0644070402</span>
                                                </li>
                                                <li class="clearfix">
                                                    <strong class="title">Freelance</strong>
                                                        <span class="cont">10/2016</span>
                                                </li> 
                                            </ul>
                                    </div>
                                </aside>
                        </div>
 
<!-- social bar --><div class="profile-social">
            
                        <ul class="social">
                                <li>
                                    <a href="https://www.twitter.com/DamienBenard" target="_blank">
                                        <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/damsszz" target="_blank">
                                        <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/sodapop69" target="_blank">
                                        <i class="fa fa-github-square fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com/in/damienbenard06210" target="_blank">
                                        <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/damiendamzzz/" target="_blank">
                                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/102322085432610601857" target="_blank">
                                        <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                        </ul>
                    </div>
                    
                    <div class="parallax"></div>
                    
<!-- bouton CV -->  <div id="cv">
                                <p><a class="bouton" target="_blank" href="http://damienbenard.fr/wp-content/uploads/2017/07/CV-DamDam.pdf">Télécharger mon CV</a>
                               </p>
                                <p>Bonjour , Je suis Damien Benard. Développeur Web Junior et passionné , spécialisé dans le Développement Front End . Formé à l’ organisme de formation 3W Academy de Marseille , je maitrise les langages de développement &nbsp;les plus connus du Web tel que Javascript , MySQL , PHP , ainsi que les langages d’intégration HTML5 et CSS , j’ ai eu la possiblité d’évoluer dans un environnement professionnel et développer des relations clients .</p>
                    </div>
                    
                    <div class="parallax2"></div>

                    <div id="competences">
                                
				                <h2 class="section-title">Langages</h2>

<!-- skills bars langages -->      <div class="skillbar clearfix " data-percent="80%">
	                               <div class="skillbar-title" style="background: #d35400;"><span>HTML</span></div>
	                               <div class="skillbar-bar" style="background: #e67e22;"></div>
	                               <div class="skill-bar-percent">80%</div>
                                        </div> <!-- End Skill Bar -->
                        
                                   <div class="skillbar clearfix " data-percent="80%">
	                               <div class="skillbar-title" style="background: #2980b9;"><span>CSS</span></div>
	                               <div class="skillbar-bar" style="background: #3498db;"></div>
	                               <div class="skill-bar-percent">80%</div>
                                        </div> <!-- End Skill Bar -->
                        
                                   <div class="skillbar clearfix " data-percent="70%">
	                               <div class="skillbar-title" style="background: #124e8c;"><span>PhP&amp;MySQL</span></div>
	                               <div class="skillbar-bar" style="background: #4288d0;"></div>
	                               <div class="skill-bar-percent">70%</div>
                                        </div> <!-- End Skill Bar -->
                        
                                   <div class="skillbar clearfix " data-percent="50%">
	                               <div class="skillbar-title" style="background: #2c3e50;"><span>JS/jQuery</span></div>
	                               <div class="skillbar-bar" style="background: #2c3e50;"></div>
	                               <div class="skill-bar-percent">50%</div>
                                        </div> <!-- End Skill Bar -->
                        
                                   <div class="skillbar clearfix " data-percent="70%">
	                               <div class="skillbar-title" style="background: #27ae60;"><span>BootStrap</span></div>
	                               <div class="skillbar-bar" style="background: #2ecc71;"></div>
	                               <div class="skill-bar-percent">70%</div>
                                        </div> <!-- End Skill Bar -->
                        
                                   <div class="skillbar clearfix " data-percent="75%">
	                               <div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
	                               <div class="skillbar-bar" style="background: #525252;"></div>
	                               <div class="skill-bar-percent">75%</div>
                                        </div> <!-- End Skill Bar -->
                        
                    </div>
                    
                    <div id="projets">
                                <div class="tada">
                                    <h2>Mes Projets</h2>
                                    <div class="carousel slide" id="myCarousel">
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                            <div class="thumbnail">
                                <a href="http://damienbenard.fr/"><img src="img/sites/damienbenard.fr280X210.PNG" alt="damienbenard.fr" /></a>
                            </div>
                            <div class="caption">
                                <h4>Modification de Theme Wordpress</h4>
                				<p>http://damienbenard.fr</p>
                                
                            </div>
                                </li>
                                <li class="span3">
                            <div class="thumbnail">
                                <a href="http://collinesdecapitou.damienbenard.fr//"><img src="img/sites/collines280X210.PNG" alt="Capitou" /></a>
                            </div>
                            <div class="caption">
                                <h4>Modification de Theme Wordpress</h4>
                				<p>http://collinesdecapitou.damienbenard.fr</p>
                                
                            </div>
                                </li>
                                <li class="span3">
                            <div class="thumbnail">
                                <a href="https://youtu.be/pHl1X5H_LwI/"><img src="img/sites/esterel280X210.PNG" alt="EsterelGraffitis" /></a>
                            </div>
                            <div class="caption">
                                <h4>Captures en Vol</h4>
                				<p>Phantom 3 Advanced</p>
                                
                            </div>
                                </li>
                            </ul>
                    </div>  
                              
                    </div>
                        </div>
                    
                            <section>
                                <div id="contact">
                                    <div class="titrecontact">
                                    <h2>Me contacter</h2>
                                </div>
<!--formulaire contact -->
<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }
  
  if (!isset($_POST['captcha'])) {
    $nombreErreur++;
    $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
  } else {
    if ($_POST['captcha']!=4) {
      $nombreErreur++;
      $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
    }
  }
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    $destinataire = 'damienbenard@gmail.com'; // Adresse email du webmaster
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
	if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
	if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
    echo '</div>';
  }
}
?>
                             
                                    <form method="post" action= "<?php echo strip_tags($_SERVER['REQUEST_URI'])?>">
                                    <p>Votre nom et prénom: <input type="text" name="nom" size="30" /></p>
                                    <p>Votre email: <span style="color:#ff0000;">*</span>: <input type="text" name="email" size="30" /></p>
                                    <p>Message <span style="color:#ff0000;">*</span>:</p>
                                    <textarea name="message" cols="60" rows="10"></textarea>
                                    <p>Combien font 1+3: <span style="color:#ff0000;">*</span>: <input type="text" name="captcha" size="2" /></p>
                                    <p><input type="submit" name="submit" value="Envoyer" /></p>
                                    </form>

                            </div>
                            </section>
                    
                    <div class="boutonhautdepage">
                        <a href="#hautdepage">haut de page</a>
                    </div>
                       
<!-- script jquery skills langages ! -->
            <script>
jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},4000);
	});
});
            </script>
                </div>
                    </div>      
                        </div>
            </main>
        
<!--footer-->       <div class="wrapper">
                        <footer class="footer-customise">
                        <div class="footer-gauche">
                            <h3>http://damienbenard<span>.fr</span></h3>
                            <p class="footer-liens">
				                <a href="#presentation">Presentation</a>
				                <a href="#cv">Cv</a>
					            <a href="#competences">Compétences</a>
					            <a href="#projets">Projets</a>
					            <a href="#contact">Contact</a>
					        </p>

				<p class="footer-company-name">http://damienbenard.fr &copy; 2016</p>
			             </div>

			         <div class="footer-centre">

				        <div>
					       <i class="fa fa-map-marker"></i>
					       <p><span>265 Bd Jeanne d' Arc,06210</span></p>
				        </div>
                     <div>
					       <i class="fa fa-phone"></i>
					       <p>+33 0644070402</p>
				        </div>

				    <div>
					       <i class="fa fa-envelope"></i>
					       <p><a href="mailto:damienbenard@gmail.com">damienbenard@gmail.com</a></p>
				        </div>

			         </div>

			     <div class="footer-droite">
                        <p class="footer-company-about">
					       <span>Infos</span>
					       Autodidacte , formé à la 3W Academy , votre site internet sera le mien.
				        </p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/damsszz"><i class="fa fa-facebook"></i></a>
					<a href="https://www.twitter.com/DamienBenard"><i class="fa fa-twitter"></i></a>
					<a href="http://www.linkedin.com/in/damienbenard06210"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/sodapop69"><i class="fa fa-github"></i></a>

				</div>
                    </div>
                        </footer>
                            </div>
        </body>
            </html>