
            <!--Background Video-->
<video autoplay muted loop poster="avengers" id="bgvid"  height="1024px">
    <source src="avengers_2/avengers_2.ogv" type='video/ogg; codecs="theora, vorbis"'/>
    <source src="avengers_2/avengers_2.webm" type='video/webm' >
    <source src="video/avengers2.mp4" type='video/mp4'>
    <source src="video/avengers_2.mp4" type="video/mp4">
</video>
            <!--<button id="vidpause">Pause</button>-->
            
<!--            LOGO-->
           
    <div class="logoVideo"></div>
       
        
<!--            annonce de temps-->
    <h2 id="sortie">Bientôt dans vos salles : </h2>
            
<!--             Compteur de Temps-->
        
<div class="counterD">
            
    <ul id="countdown">
        <li>
            <span class="days">00</span>
            <p class="timeRefDays">jours</p>
        </li>
        <li>
            <span class="hours">00</span>
            <p class="timeRefHours">heures</p>
        </li>
        <li>
            <span class="minutes">00</span>
            <p class="timeRefMinutes">minutes</p>
        </li>
        <li>
            <span class="seconds">00</span>
            <p class="timeRefSeconds">secondes</p>
        </li>
	</ul>
</div>
<a class="button" id="scrollButton" href="#synopsish3" data-slide="2" title=""></a>        
<div id="content">
    <div id="synopsis">
        <h3 id="synopsish3">Le 29 Avril 2015, </h3>
        <p>Alors que Tony Stark tente de relancer 
        un programme de maintien de la paix jusque-là suspendu, 
        les choses tournent mal et les super-héros Iron Man, 
        Captain America, Thor, Hulk, Black Widow et Hawkeye vont devoir 
        à nouveau unir leurs forces pour combattre le plus puissant 
        de leurs adversaires : 
        le terrible Ultron, un être technologique terrifiant qui s’est juré 
        d’éradiquer l’espèce humaine.
        Afin d’empêcher celui-ci d’accomplir ses sombres desseins, 
        des alliances inattendues se scellent, les entraînant dans 
        une incroyable aventure et une haletante course contre le temps… </p>
    </div>  
 <a class="button3" id="scrollButton" href="#" data-slide="2" title=""></a>       
        <img class="captain"src="img/captain.png" alt="" >

        <img class="thor"src="img/Thor-TDWpromo.png" alt="" >
       
</div>
<!--        End compteur-->
        
<!--        SCRIPT-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#scrollButton').click( function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 1000; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>
<script type="text/javascript" src="js/jquery-1.6.4.js"></script>

<script type="text/javascript" src="js/javascript.js"></script>
        <!--    COMPTEUR DE TEMPS-->
<script type="text/javascript" src="js/countdown.js"></script>

<script src="js/counterActivation.js"></script>
<!--       -->
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

     
<script type="text/javascript" src="js/javascript.js"></script>
<!--    COMPTEUR DE TEMPS-->
<script type="text/javascript" src="js/countdown.js"></script>
    
<script src="js/counterActivation.js"></script>
	
<script type="text/javascript" src="js/jquery-scrollto.js"></script>

