<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Spoon-Knife</title>
  <LINK href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>

<img src="forkit.gif" id="octocat" alt="" />

<!-- Feel free to change this text here -->
<p>
 Welcome to the page, Plz Navigate to /SamplePage.php for entering your details
</p>

<!-- need to change to the path.txt -->
<a href="https://www.freecodecamp.org/">
  <button>freeCodeCamp</button>
</a> 

<?php
   $firstline=`head -n1 path.txt`;          
   $path_img="https://".$firstline."/SamplePage.php";
   echo "<br>";
   echo "<a href='{$path_img}'>
    <button>SamplePage</button>
  </a>";
?>

<p>
 Thank You!!!!! 
</p>

</body>
</html>