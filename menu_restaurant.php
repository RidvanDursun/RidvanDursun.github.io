<!DOCTYPE html>
<html>
    <head>
            <title>Menu du restaurant</title>    
            <?php
                include('head.html');
            ?>
    </head> 
    <body>
        <header>
			<?php
				include('nav.html');
			?>
		</header>

        <div class="container-fluid">
            <div class="row" id="menu">
                <h1>MENU</h1>
                <div class="col-md-2">
                    <img src="images/image2.jpg" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-2">
                    <img src="images/image3.jpg" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-2">
                    <img src="images/image4.jpg" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-2">
                    <img src="images/image5.jpg" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-2">
                    <img src="images/image6.jpg" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-2">
                    <img src="images/image7.jpg" class="img-rounded img-responsive" />
                </div>
            </div>

            <div class="row blanc" id="aPropos">
                <h1>A propos</h1>
                <p>
                    Vous retrouverez plus d'information nous concernant dans l'article suivant :
                        <a href="https://www.programme-television.org/news-tv/Breaking-Bad-Deux-fans-ouvrent-un-Los-Pollos-Hermanos-a-Albuquerque-pour-feter-les-10-ans-4556807" target="_blank">programme-television</a>
                </p>
            </div>            
        </div>    

        <?php
            include('footer.html');
        ?>
    </body>
</html>
