<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>contact form response</title>
<link rel="stylesheet" href="style.css"> 
<style type="text/css">
#container  {
width: 800px;
border: 1px solid black;
padding: 10px;
margin: 10px auto;
}
.colorRed {
	color: #F00;
}
</style>
</head>

<body>
<a id="top"></a>
  <div class="container black-border-1px">
    <header>
      <img src="images/banner.jpg" alt="adventure travel banner" />
      <nav>
        <ul>
          <li><a class="nav-link" href="home.html">Home</a></li>
          <li>
            <a class="nav-link" href="adventureAdvantages.html">Adventure Advantages</a>
          </li>
          <li>
            <a class="nav-link" href="destinations.html">Destinations</a>
          </li>
          <li><a class="nav-link" href="FAQ.html">FAQ</a></li>
          <li><a class="nav-link" href="contact.html">Contact</a></li>


        </ul>
      </nav>
    </header>
    <main>
      <h1>Contact</h1>
      
<?php



//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";


?>
       </main>
    <footer>
      <pre>
<a href="#top">Back to Top</a>
Adventure Travel
3450 Conhost Avenue
Boulder Colorado 12345
(317) 555-7414
&copy; 2024 Adventure Travel. All rights reserved.
<a href="/index.html">Exit Adventure Site</a></pre>
      <img src="images/AT_logo.jpg" alt="advenure travel logo" />
    </footer>
  </div>
</body>

</html>