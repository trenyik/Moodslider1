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
        <link href="css/sky_style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    </head>
    <body>        
        <!--Logo for Now Tv & Navigation to Home and Upload Pages-->
        <header>
            <div class="row">
            <div class="col-md-3">
                <a href="https://www.nowtv.com/"><img src="logo/nowtv.png" alt="Sky logo" height="100" width="250" align="left"></a>
            </div>

            <div class ="col-md-9" >  
                <p>What's up Dude, What's your mood?</p>
            </div>
            </div>
            <div class="navbar">
                <a class="active" href="/Moodslider1/index.php">Home</a>
                <a class="active" href="/Moodslider1/upload_file.php">Upload content</a>
            </div>
        </header> 
        
        <!-- Mood sliders = mySliderValueFunction value refers to the mood -->
        <form>
            <div class="row">
                <h2 class="col-md-2" id="mood" >Agitated</h2>
                <div class="col-md-7" ><input onclick="mySliderValueFunction(this.value)" id="slider" type="range" min="0" max="2" value="1"></div>
                <h2 class= "col-md-2" id="mood" >Calm</h2>
            </div>

            <div class="row">
                <h2 class="col-md-2" id="mood" >Happy</h2>
                <div class="col-md-7" ><input onclick="mySliderValueFunction(this.value)" id="slider" type="range" min="3" max="5" value="4"></div>
                <h2 class= "col-md-2" id="mood" >Sad</h2>
            </div>

            <div class="row">
                <h2 class="col-md-2" id="mood" >Tired</h2>
                <div class="col-md-7"><input onclick="mySliderValueFunction(this.value)" id="slider" type="range" min="6" max="8" value="7"></div>
                <h2 class= "col-md-2" id="mood" >Wide Awake</h2>
            </div>

            <div class="row">
                <h2 class="col-md-2" id="mood" >Scared</h2>
                <div class="col-md-7" ><input onclick="mySliderValueFunction(this.value)" id="slider" type="range" min="9" max="11" value="10"></div>
                <h2 class= "col-md-2" id="mood" >Fearless</h2>
            </div>
        </form>
        
        <!--Movie cards myXmlImgResultfunction will display the movies onto the cards-->
        <div class="row">           
            <div class="col-md-2">
                <div class="card" ><img id="card1" src="movies/nocontent.png" height="300" width="200"></div>
            </div>      
            <div class="col-md-2">
                <div class="card" ><img  id="card2" src="movies/nocontent.png" height="300" width="200"></div>
            </div>

            <div class="col-md-2">
                <div class="card" ><img  id="card3" src="movies/nocontent.png" height="300" width="200"></div>
            </div>

            <div class="col-md-2">
                <div class="card" ><img  id="card4" src="movies/nocontent.png" height="300" width="200"></div>
            </div>
            
            <div class="col-md-2">
                <div class="card" ><img  id="card5" src="movies/nocontent.png" height="300" width="200"></div>
            </div>
        </div>
        
        <script>
            function mySliderValueFunction(sliderValue) {
                //sliderValue parameter refers to the values on the slider 
                //moodValue will became string from the moodSringArray based on the sliderValue which coming from the slide
                var moodStringArray = ["agitated", "neutral", "calm", "happy", "neutral", "sad", "tired", "neutral", "wide awake", "scared", "neutral", "fearless"];
                var moodValue = moodStringArray[sliderValue];//

                //create a new request if status = 200 (success) will call the myXmlImgResultfuction method and passes in the xml and the moodValue eg.happy
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        myXmlImgResultfunction(xhttp.responseXML, moodValue);
                    }
                };
                
                //open the xml file from Uploads with GET
                xhttp.open("GET", "Uploads/movies.xml", true);
                xhttp.send();

                //retrieve and displays the movies from the xml file
                function myXmlImgResultfunction(xml, moodValue) {
                    //i is used by while loop
                    var i = 1;
                    //if statement shows when the value isn't neutral the movies will display
                    if (moodValue !== "neutral") {
                        //choose and gets movies based on slider tag in xml where it's value = moodValue eg.happy
                        var xmlPath = "//*[slider ='" + moodValue + "']";
                        var nodes = xml.evaluate(xmlPath, xml, null, XPathResult.ANY_TYPE, null);
                        var movies = nodes.iterateNext();
                        //choose 5 of the movies with while loop and display when id = card 
                        while (movies && i < 6) {
                            var img = movies.getElementsByTagName("img")[0].childNodes[0].nodeValue;
                            //this increments cardId tag with one to display movie on next card
                            var cardId = "card" + i;
                            //img path from xml wil be put into src where id=cardId
                            document.getElementById(cardId).src = img;
                            movies = nodes.iterateNext();
                            i++;
                        }
                    }
                }

            }
        </script>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center;">Moodslider by Nikolett 2019</p>
                </div>
            </div>         
        </footer>

    </body>
</html>