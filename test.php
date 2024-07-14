<!DOCTYPE html>
<html>
<head>
	<title>Main data</title>
<link rel="stylesheet" type="text/css" href="css\main_data.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
	<div class="main_div" id="link_wrapper">
	    
			
	</div>
		<?php 
					include("connection.php");
				$query="select * from ESPData";
				$data= mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
				echo"<label style='margin-left: 100px;font-size: 50px;'>".$result['value3']."</label>";
				$val=intval($result['value3']);
				// echo $val;
			if ($val > 260) {
    echo '<script type="text/javascript">';
    echo 'alert("Fire  detected!!!");';
   
    echo '</script>';
}
?>
</body>
</html>
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server2.php", true);
  xhttp.send();
}
setInterval(function()
{
	loadXMLDoc();
},1000);

window.onland = loadXMLDoc;
</script>