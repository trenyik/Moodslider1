<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Sky Moodslider</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
                    <!-- Bootstrap & CSS links-->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--        <link href="css/sky_style.css" rel="stylesheet" type="text/css">-->

    </head>
    <body>
                    <!--Logo for Now Tv & Navigation to Home and Upload Pages-->
        <header>
            
             <div class="col-md-3">
                <img src="logo/nowtv.png" alt="Sky logo" height="80" width="150" align="left">
            </div>
                     
            <div class ="col-md-9" >  
                <h1>What's up Dude, What's your mood?</h1>
            </div>
                     
            <div class="navbar">
                <a class="active" href="/Moodslider1/index.php"><i class="fa fa-fw fa-home" ></i>Home</a>
                <a class="active" href="/Moodslider1/upload_file.php"><i class="fa fa-fw fa-home" ></i>Upload content</a>
            </div>

        </header>    
                    <!-- Moodsliders-->
        <div class="row">
            <h2 class="col-md-3">Agitated</h2>
            <div class="col-md-6" id="slider_a" ><input type="range" min="1" max="3" value="2"></div>
            <h2 class= "col-md-3">Calm</h2>
        </div>

        <div class="row">
            <h2 class="col-md-3">Happy</h2>
            <div class="col-md-6" id="slider_b" ><input type="range" min="1" max="3" value="2"></div>
            <h2 class= "col-md-3">Sad</h2>
        </div>

        <div class="row">
            <h2 class="col-md-3">Tired</h2>
            <div class="col-md-6" id="slider_c" ><input type="range" min="1" max="3" value="2"></div>
            <h2 class= "col-md-3">Wide Awake</h2>
        </div>

        <div class="row">
            <h2 class="col-md-3">Scared</h2>
            <div class="col-md-6" id="slider_d" ><input type="range" min="1" max="3" value="2"></div>
            <h2 class= "col-md-3">Fearless</h2>
        </div>
                     <!--Movie cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card"><img src="movies/BumbleBee.jpg" height="300" width="200"></div>
            </div>
            
            <div class="col-md-3">
                <div class="card"><img src="movies/Oblivion.jpg" height="300" width="200"></div>
            </div>
            
            <div class="col-md-3">
                <div class="card"><img src="movies/PeterRabbit.jpg" height="300" width="200"></div>
            </div>
            
            <div class="col-md-3">
                <div class="card"><img src="movies/PlanetEarth.jpg" height="300" width="200"></div>
            </div>
        </div>
                      <!--Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center;">Moodslider by Nikolett 2019</p>
                </div>
            </div>
        </footer>
                      
    </body>
</html>