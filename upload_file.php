<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/sky_style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="col-sm-3">
                <img src="logo/nowtv.png" alt="Sky logo" height="80" width="150" align="left">
            </div>

            <div class ="col-sm-9" >  
                <h1>Hey Dude, Upload your XML</h1>
            </div>

            <div class="navbar">
                <a class="active" href="/Moodslider1/index.php"><i class="fa fa-fw fa-home" ></i>Home</a>
                <a class="active" href="/Moodslider1/upload_file.php"><i class="fa fa-fw fa-home" ></i>Upload content</a>
            </div>

        </header>
                        <!--Form for Xml upload (using POST and calling Upload backend)-->
        <form action="upload_backend.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload">
            <input type="submit" value="Upload Content">
        </form>
        
    </body>
</html>