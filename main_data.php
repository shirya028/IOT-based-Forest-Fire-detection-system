<!DOCTYPE html>
<html>
<head>
	<title>Main data</title>
<link rel="stylesheet" type="text/css" href="css\main_data.css">
<link rel="stylesheet" type="text/css" href="css\noti.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body id="bodyx" style="overflow-x: hidden;" >
    <div class="home" >
			<div class="toastx" id="notei">
				<div class="toastx-content">
					<i class="fa fa-solid fa-exclamation-triangle check "></i>
					<div class="message" >
						<span class="text text-1">Warning:</span><br>
						<span class="text text-2">Conditions Are not Good!</span>
					</div>
				</div>
				<i class=" fa fa-solid fa-close close" style="font-weight:4px;"></i>
			</div>
			<script>
				const btn=document.querySelector("buttonx");
				const toast=document.querySelector(".toastx");
				const close=document.querySelector(".close");
				const body=document.querySelector("#bodyx");
				let beat = new Audio('ems.mp3');
		 
				btn.addEventListener("click",()=>{
					body.classList.add("blurx");
				 toast.classList.add("activex");
				 beat.play();
					 close.addEventListener("click",()=>{
						 beat.pause();
						 toast.classList.remove("activex");
						 body.classList.remove("blurx");
				
						 });
		 
				});
		 
		 
				close.addEventListener("click",()=>{
				 beat.pause();
				 toast.classList.remove("activex");
				
				});
		 
				function doit(){
					body.classList.add("blurx");
				 toast.classList.add("activex");
				 
				 beat.play();
					 close.addEventListener("click",()=>{
						 beat.pause();
						 toast.classList.remove("activex");
						 body.classList.remove("blurx");
						 });
				}
				function pass()
				{
				    window.location.href = 'dashboard.php';
				}
				</script>
	<div class="main_div" id="link_wrapper">
	    
			
	</div>
		<?php 
					include("connection.php");
				$query="select * from ESPData";
				$data= mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
				$val=intval($result['value3']);
				// echo $val;
			if ($val > 300) {
    
                        echo"<script type='text/javascript'>
                    			doit();
                    			</script>";
                            }
echo"<script type='text/javascript'>
			setInterval(function() {
              location.reload();
            }, 15000);
			</script>";
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