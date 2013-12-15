 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title> Admin Panel </title>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="shortcut icon" href="images/favicon.png" />
</head>



<body>
	<div class="pageWrap">
	
	
        <h1 id="pageTitle">Gallery Demo Admin panel</h1>
		
		<div id="nav">			
			<div id="menu">
				<ul>

					<li><a href="../index.php">gallery</a></li>
					<li><a href="/admin/index.php">Admin</a></li>
				</ul>
			</div>	
		</div>

			<h2> Create a new gallery folder</h2>
			<div class= "left1" id="upload">


				
				<form name="form" method="post" action="galresults.php">
				Enter new gallery name:
				<input type="text" id="destination" name="destination">
				<br>
				<br>
				<input type="submit" name="create" value="Create"/>
				</form>
			</div>



				<h2> Upload photos to existing  gallery</h2>
			<div class= "right1" id="upload">
			 
				<form action="upload.php" method="post"
				enctype="multipart/form-data"> 
				
				<select name="myDirs">
				<option value="" selected="selected">Select existing gallery:</option>
				<?php
				$dirs = glob("../galleries/*", GLOB_ONLYDIR);
				foreach($dirs as $val){
				echo '<option value="'.$val.'">'.$val."</option>\n";
				}
				?>
				</select>

				<input type="file" name="files[]" multiple id="file"><br>
				<input type="submit" name="submit" value="Upload">
				</form>

			</div>

				<h2> Delete Photos</h2>
			<div class= "right1" id="upload">
			 
				<form action="deletephoto.php" method="post"
				enctype="multipart/form-data"> 
				
				<select name="myDirs">
				<option value="" selected="selected">Select existing gallery:</option>
				<?php
				$dirs = glob("../galleries/*", GLOB_ONLYDIR);
				foreach($dirs as $val){
				echo '<option value="'.$val.'">'.$val."</option>\n";
				}
				?>
				</select>

	
				<input type="submit" name="submit1" value="Open gallery">
				</form>

			</div>

        				<h2> Delete Gallery</h2>
			<div class= "right1" id="upload">
                <p> Gallery must be empty before it can be deleted </p>
			 
				<form action="deletegal.php" method="post"
				enctype="multipart/form-data"> 
				
				<select name="myDir">
				<option value="" selected="selected">Select existing gallery:</option>
				<?php
				$dirs = glob("../galleries/*", GLOB_ONLYDIR);
				foreach($dirs as $val){
				echo '<option value="'.$val.'">'.$val."</option>\n";
				}
				?>
				</select>


				<input type="submit" name="submit" value="Delete gallery">
				</form>

			</div>



	</div>


</body>
</html>