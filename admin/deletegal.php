


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>
      Admin Panel 
    </title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  
  
  
  <body>
	<div class="pageWrap">
      
      
      <h1 id="pageTitle">
        Gallery Demo Admin panel
      </h1>
      
		<div id="nav">			
			<div id="menu">
				<ul>

					<li><a href="../index.php">gallery</a></li>
					<li><a href="/admin/index.php">Admin</a></li>
				</ul>
			</div>	
		</div>
      
      
      
      <div id="upload">
        
        <h1>
          Results
        </h1>
        
        
        <?php

$dir = $_POST['myDir'];



if (!rmdir($dir)) {
    echo ("Could not remove the $dir gallery. You must delete all photos from the gallery before it can be deleted. Sorry for your bad luck. ");
}

else {
    echo (" Great success!!! $dir gallery has been deleted.");
}

?>
    
         
          
      </div>
      
  </div>
  
  </body>
</html>