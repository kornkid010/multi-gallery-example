
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
					<li><a href="#">Home</a></li>
					<li><a href="../index.php">gallery</a></li>
					<li><a href="/admin/">Admin</a></li>
				</ul>
			</div>	
		</div>



		<div id="upload">

			<h1>Results</h1>

				<?php
				$foldername = $_POST['destination'];

				$path = '../galleries/' . $foldername;
				mkdir($path);

				if(file_exists($path) && is_dir($path)) {
				 
					echo "The gallery $foldername was successfully created!!! ";
					exit;
				} else {
					echo "failed to create $foldername gallery!! ";
				}
				?> 
		</div>

</div>

</body>
</html>