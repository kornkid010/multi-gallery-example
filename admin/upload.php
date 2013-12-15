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
          Upload Results
        </h1>
				<?php
        //source code for upload script:

        // http://techstream.org/Web-Development/PHP/Multiple-File-Upload-with-PHP-and-MySQL

				if(isset($_FILES['files'])){
					$errors= array();
					foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
						$file_name = $key.$_FILES['files']['name'][$key];
						$file_size =$_FILES['files']['size'][$key];
						$file_tmp =$_FILES['files']['tmp_name'][$key];
						$file_type=$_FILES['files']['type'][$key];	
						$extensions = array("jpeg","jpg","png","gif"); 
						
						if($file_size > 6145724.908){
							$errors[]='File size must be less than 5 MB';
						}	
						$file_ext=explode('.',$_FILES['files']['name'][$key])	;
				$file_ext=end($file_ext);  
				$file_ext=strtolower(end(explode('.',$_FILES['files']['name'][$key])));  
				if(in_array($file_ext,$extensions ) === false){
					$errors[]="extension not allowed";
				}            

						$desired_dir=$_POST['myDirs'];
						if(empty($errors)==true){
							if(is_dir($desired_dir)==false){
								mkdir("$desired_dir", 0700);		// Create directory if it does not exist
							}
							if(is_dir("$desired_dir/".$file_name)==false){
								move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
							}else{									// rename the file if another one exist
								$new_dir="$desired_dir/".$file_name.time();
								 rename($file_tmp,$new_dir) ;				
							}
						}else{
								print_r($errors);
						}
					}
					if(empty($error)){
						echo "Great Success!!";
					}
				}
				?>
      </div>
      
      
    </div>
    
    
    
  </body>
</html>