<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css\noti.css">

	<title>Welcome to our website</title>
	<link rel="stylesheet" type="text/css" href="css\main_page.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css\owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css\aboutus.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body id="bodyx" style="overflow-x: hidden;">
	

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
				</script>	
			<div class="orange_div">
					
				</div>
				<?php 
					include("connection.php");
				$query="select * from ESPData";
				$data= mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
				$val=intval($result['value3']);
				// echo $val;
			if ($val > 310) {
    
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
				<div class="nav-bar" >
					<a href="">Home</a>
					<a href="#slider_">Services</a>
					<a href="#aboutus">About us</a>
					<a href="#contactus" style="">Contact</a>
					<button class="Lbutton" style="width:200px; padding-left: 2px;"><i class="fa fa-user"  style=" color: #778899 ;" onclick = "window.location.href='dashboard.php';">   Go To Dashbord   </i></button>
				</div>
				<div style=" width: 400px; position: absolute; margin-top: 280px; margin-left: 250px; ">
					<label style="font-family: 'Raleway', sans-serif; font-size: 30px;";>Welcome to our site</label><br><br>
					<label style="font-family: 'Fjalla One', sans-serif; color: #FF8C00; font-size: 48px;">Forest Fire </label><br>
					<label style="font-family: 'Fjalla One', sans-serif; color: #FF8C00;font-size: 48px;">  Detection </label><label style="font-family: 'serif'; font-size: 48px;color: #FF8C00;">&nbsp; using IOT</label>
					<p>Welcome to our website, where innovation meets nature's safety! Explore our cutting-edge IoT-based forest fire detection system and join us in protecting our precious forests from devastating fires.</p>
				</div>
				<div style="position: absolute; width: 500px; height: 500px ;margin-left: 900px;margin-top: 260px;">
					<img src="images/fire.png" style="width: 380px; height: 460px">
				</div>
				<!-- <div style="position: absolute; width: 92px ;height:137px;border: 2px solid #778899;margin-top: 570px; margin-left: 250px; border-radius: 10px; background-color: #778899; z-index: 3; text-align: center;">
						<img src="images/sensor.jpg" style="height: 110px ;width:90px; padding: 2px;border-radius: 3px;">
						<label style="font-size: 12px;color: #ffff">Sensor Monitoring</label>
				</div>
				<div style="position: absolute; width: 92px ;height:137px;border: 2px solid #778899;margin-top: 570px; margin-left: 390px; border-radius: 10px; background-color: #778899; z-index: 3; text-align: center;">
						<img src="images/realtime_data.png" style="height: 110px ;width:90px; padding: 2px;border-radius: 3px;">
						<label style="font-size: 12px;color: #ffff">Realtime Data</label>
				</div>
				<div style="position: absolute; width: 92px ;height:137px;border: 2px solid #778899;margin-top: 570px; margin-left: 530px; border-radius: 10px; background-color: #778899; z-index: 3; text-align: center;">
						<img src="images/cloud.png" style="height: 110px ;width:90px; padding: 2px;border-radius: 3px;">
						<label style="font-size: 12px;color: #ffff">Cloud based</label>
				</div> -->

		</div>
		<div >	
			
	<div class="jumbotron"  style="margin-bottom: 0px; padding-bottom: 0px;">
   <section id="slider" class="pt-5"  style="">
  <div class="container" id="slider_" style="margin-bottom:0px;">
    <h1 class="text-center"><b style="font-family: 'Fjalla One', sans-serif;">Services</b></h1>
	  <div class="slider">
				<div class="owl-carousel">
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-1">
							<img src="images/sensor_monitoring.png" alt=""  style="width: 300px;height: 300px;">
						</div>
						<h5 class="mb-0 text-center"><b>Sensor Monitoring</b></h5>
						<p class="text-center p-2">sensor, collects data from outside the system and inputs it into an application system for data statistics inside the system. </p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-1">
							<img src="images/realtime_data.png" alt="" style="width: 300px;height: 300px;">
						</div>
						<h5 class="mb-0 text-center"><b>Realtime Data</b></h5>
						<p class="text-center p-2">Data stored in Realtime Database is retrieved by attaching an asynchronous listener to a database reference.</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-1">
							<img src="images/cloud.png" alt="" style="width: 300px;height: 300px;">
						</div>
						<h5 class="mb-0 text-center"><b>Cloud Based</b></h5>
						<p class="text-center p-2">cloud-based project management software coordinates the planning, collaborating, monitoring, and delivering of a project.</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-1">
							<img src="images/accurate_data.png" alt="" style="width: 300px;height: 300px;">
						</div>
						<h5 class="mb-0 text-center"><b>Accurate Data</b></h5>
						<p class="text-center p-2">Data accuracy refers to error-free records that can be used as a reliable source of information.</p>
					</div>
					
				</div>
			</div>
  </div>
</div>
<div class="aboutus-section"  style="margin-top: 0px; margin-bottom: 0px;padding-bottom: 0px;  padding-top: 0px;" id="aboutus">
	<div class="jumbotron" style="margin-bottom: 0px; background-color: white;">
		<div class="container">
		<br>
		<br>	 
	    <br>
		<h3 style="font-family: 'Fjalla One', sans-serif; font-weight: bolder;"  class=" text-center aboutus-title">About Us</h3>	
		<div class="row ">
			
			<div class="col-md-4 col-sm-6 col-xs-12" style="font-family: 'Raleway', sans-serif; font-size: 30px;">
				<div class="aboutus">
					
					<p class="aboutus-text">We are passionate about preserving our forests and mitigating the risks posed by devastating wildfires. With our expertise in IoT (Internet of Things) technology, we have developed an advanced forest fire detection system that harnesses the power of connectivity to provide real-time monitoring and early warning alerts.</p>
					<p class="aboutus-text">Our team of dedicated engineers and environmental enthusiasts have worked tirelessly to create a robust and efficient solution that leverages the potential of IoT devices, sensors, and data analytics. By integrating these technologies, we have built a comprehensive system that revolutionizes forest fire detection and response.</p>
					<a class="aboutus-more" href="#">read more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="aboutus-banner">
					<img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
				</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12" style="font-family: 'Raleway', sans-serif; font-size: 30px;">
				<div class="feature">
					<div class="feature-box">
						<div class="clearfix">
	
							<div class="feature-content">
								<h4>RealTime Monitoring</h4>
								<p>Our system constantly monitors critical parameters such as temperature, humidity, and smoke levels to detect potential fire outbreaks in their early stages.</p>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<div class="clearfix">
							
							<div class="feature-content">
								<h4>Advanced Sensors</h4>
								<p>We deploy state-of-the-art sensors strategically placed across forest areas to ensure accurate and reliable data collection. These sensors provide precise measurements and trigger immediate alerts when abnormal conditions are detected.</p>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<div class="clearfix">
							
							<div class="feature-content">
								<h4>Immediate Alerts and Notifications</h4>
								<p> Our system instantly notifies forest authorities, fire departments, and relevant stakeholders when a potential fire event is detected. These alerts enable swift response and intervention, minimizing the risk of extensive forest damage.</p>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="feature-box">
						<div class="clearfix">
							
							<div class="feature-content">
								<p>Join us in our mission to protect and preserve our forests by implementing our IoT-based forest fire detection system. Together, let's make a significant impact in safeguarding our natural heritage from the devastating effects of wildfires.</p>
							</div>
						</div>
					</div>

					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
		<div class="jumbotron" id="contactus" style="margin-top: 0px; margin-bottom: 0px; padding-bottom: 0px;">
			<div class="container">
				<br>
				<br>
				<h2 class="text-center" style="font-family: 'Fjalla One', sans-serif; font-weight: bolder;">Contact Us</h2>
				<br>
				<br>
				<br>
				<div class="row">
				  <div class="col-lg">
				  <i class="fa fa-phone " style="color: #FF8C00; font-size:80px;text-align: center;"></i>
				  <br>
				  <br>
				  <h3 style="font-weight: lighter;">By Phone</h3>
				  <p class="founting" style="margin: 0%;">Our toll free number:</p>
				  <p  class="founting" style="margin: 0%;">1-234-678-99</p>
				  <p class="founting" style="margin: 0%;">customer care number:</p>
				  <p class="founting" style="margin: 0%;">9876599033</p>
					<br>
				  <br>
				  </div>
				  <div class="col-lg"  class="founting">
					<i class="fa fa-folder-open" style="color: #FF8C00; font-size:80px;"></i>
					<br>
				  <br>
				  <h3  style="font-weight: lighter;">Start new case</h3>
				  <p>Just send us your questions or concern by starting a new case.</p>
				  <br>
				  <br>
				  
				  <br>
				  <br>
				  </div>
				  <div class="col-lg">
					<i class="fa fa-comments" style="color: #FF8C00; font-size:80px;"></i>
					<br>
				  <br>
				  <h3  style="font-weight: lighter;"> By Live Chat</h3>
				  <p>Chat with our customer care survice for more information.</p>
				  <br>
				  <br>
				  <button>Start New Chat</button>
				  <br>
				  <br>
				  </div>
				</div>
				<div class="row"></div>
			  </div>
			  <hr>
			  <div class="row">  
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">  
				<ul class="list-unstyled list-inline social text-center">  
				 
				<li class="list-inline-item"> <a href="https://www.linkedin.com/in/shreeyash-janawade/"> <i class="fa fa-linkedin"> </i> </a> </li>  
	        	 <li class="list-inline-item"> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>  
				<li class="list-inline-item"> <a href="https://www.instagram.com/shreeyash_028?igsh=bmoxemFteWM2dmh0"> <i class="fa fa-instagram"> </i> </a> </li>   
				<li class="list-inline-item"> <a href="mailto:shreeyashjanawade@gmail.com"> <i class="fa fa-envelope"> </i> </a> </li>  
				</ul>  
				</div>  

		</div>
		

	
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>