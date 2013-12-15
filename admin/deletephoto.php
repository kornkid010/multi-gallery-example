

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
      
      <?php $directory = $_POST['myDirs']; ?>
      
      
      <h3>
        Select photo(s) to delete from the "
        <span class="galname">
          
          <?php echo  $directory;   ?>
        </span>
        " gallery  
      </h3>
      
      <div id="delete">
        
        <form method="post" action="deletepho.php">
          
          
          <input type="submit" value="Delete" name="Delete">
          
          
          <?php
//source code php script: 
// http://www.techques.com/question/1-6359197/delete-selected-images-with-the-help-of-checkboxes
$title = "../galleries/";


$allowed_types = array(
    'jpg',
    'jpeg',
    'gif',
    'png'
);
$file_parts    = array();
$ext           = '';
$title         = '';
$i             = 0;

$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

while ($file = readdir($dir_handle)) {
    if ($file == '.' || $file == '..')
        continue;
    
    $file_parts = explode('.', $file);
    $ext        = strtolower(array_pop($file_parts));
    
    $title = implode('.', $file_parts);
    $title = htmlspecialchars($title);
    
    $nomargin = '';
    
    if (in_array($ext, $allowed_types)) {
        if (($i + 1) % 4 == 0)
            $nomargin = 'nomargin';
        echo '
<div id="picture">
<img src="' . $directory . '/' . $file . '" width="300" 
<br>
Select 
<input type="checkbox" value="' . $directory . '/' . $file . '" name="imgfile[]">


</div>
';
    }
    $i++;
}

closedir($dir_handle);

?>
          </form>
          
      </div>
      
  </div>
  
  </body>
</html>

