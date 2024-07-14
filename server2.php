<?php
include("connection.php");
?>          <div>
				<img class="image_d" src="images\thermometer.png"><br>
				<label style="margin-left: 90px;"> Current Temprature:</label><?php 
					include("connection.php");
				$query="select * from ESPData";
				$data= mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
				echo"<label style='margin-left: 120px;font-size: 50px;'>".$result['value1']."</label>";
				?>
			</div>
			<div  >
				<img class="image_d" src="images\humidity.png"><br>
				<label style="margin-left: 90px;"> Current Humidity:</label> 
				<?php 
					include("connection.php");
				$query="select * from ESPData";
				$data= mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
				echo"<label style='margin-left: 147px;font-size: 50px;'>".$result['value2']."</label>";
				?>
			</div>
			<div  >
				<img class="image_d" src="images\smoke_s.png"><br>
				<label style="margin-left: 90px;"> Current Smoke Value:</label>
				<?php 
					include("connection.php");
				$query="select * from ESPData";
				$data= mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
				echo"<label style='margin-left: 100px;font-size: 50px;'>".$result['value3']."</label>";
				$val=intval($result['value3']);
                ?>
			</div><br>