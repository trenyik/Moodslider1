<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/sky_style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        
    </head>

    <body>
        <header>
            <div class="row">
            <div class="col-md-3">
                <a href="https://www.nowtv.com/"><img src="logo/nowtv.png" alt="Sky logo" height="100" width="250" align="left"></a>
            </div>

            <div class ="col-md-9" >  
                <p>Hello Dude, Upload your XML</p>
            </div>
            </div>
            <div class="navbar">
                <a class="active" href="/Moodslider1/index.php">Home</a>
                <a class="active" href="/Moodslider1/upload_file.php">Upload content</a>
            </div>

        </header>    
                        <!--Form for Xml upload (using POST and calling Upload backend)-->
        <form action="upload_backend.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload">
            <input type="submit" value="Upload Content">
        </form>
        
    </body>
</html>