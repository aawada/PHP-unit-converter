<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>MyFreeCssTemplates.com free CSS template</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
    	
    	<div id="bg2"></div>
	    <div id="wrapper1">
				<div id="menu">
					<ul>
						
						<li><a href="http://lamp.cse.fau.edu/~aawada/">Portfolio</a></li>
						
					</ul>
					<div class="clear"></div>
				</div>	
				<div id="logo">
					
				</div>
			
			    <div id="content_bg_top"></div>
				<div id="content_box">
					<div id="header">
					
					   

					
					</div>
				<html>
<head>
    <title>PHP Astronomical Converter</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-5 col-md-offset-3">
             <form class="form-horizontal" action="index.php" method="POST">
                <div class="form-group">
                    <label for="distance">Astronomical Conversion</label>
                    <input type="text" id="distance" name="distance" class="form-control" required autofocus>
                </div>

                <div class="form-group"> 
                    <div class="checkbox-inline">
                        <label for="astronomical">Kilometers to Astronomical Units</label>
                        <input type="radio" name="conversion" id="astronomical" value="astronomical">
                     </div>

                     <div class="checkbox-inline">
                        <label for="kilometers">Astronomical Units to Kilometers</label>
                        <input type="radio" name="conversion" id="kilometers" value="kilometers">
                     </div>
                 </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        
<?php
function sanitizeString($str)
{
    $str = strip_tags($str);
    $str = htmlentities($str);
    $str = stripslashes($str);
    return $str;
}

function toAstronomical($kilometers)
{
    return (149600000 * $kilometers); 
}

function toKilometers($astronomical)
{
    return($astronomical / 149600000); 
}

if(isset($_POST['distance']))
{
    // sanitize distance
    $distance = sanitizeString($_POST['distance']);
    
    $output = "Error!";
    
    // business logic
    if(isset($_POST['conversion']) && $_POST['conversion'] === 'astronomical')
    {
        $output = $distance . " KM == " . toKilometers($distance) . " AU ";
    }
    else if(isset($_POST['conversion']) && $_POST['conversion'] === 'kilometers')
    {
        $output = $distance . " AU == " . toAstronomical($distance) . " KM ";       
    }
    
    // print distance
    echo $output;
}
?>   
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

				
				</div>
				<div id="content_bg_bot"></div>
			<div id="footer_bot">
				<p>Copyright  Ahmed Awada 2015. <!-- Do not remove -->Designed by <a href="http://www.myfreecsstemplates.com/" title="Free CSS Templates">Free CSS Templates</a><!-- end --></p>
				
			</div>
			
		</div>

    </body>
</html>
