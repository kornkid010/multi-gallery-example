


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

//source code php script: 
// http://www.techques.com/question/1-6359197/delete-selected-images-with-the-help-of-checkboxes
$file      = $_REQUEST['imgfile'];
$num_files = count($file);
for ($i = 0; $i < $num_files; $i++) {
    unlink("$file[$i]");
}
echo "Images successfully deleted.";

?>
          
          
      </div>
      
  </div>
  
  </body>
</html>