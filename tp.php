<?php
    $servernm="localhost";
    $username="id20884190_forest_fire";
    $password="hPa1]p>=cCXxG5[N";
    $dbname="id20884190_iot_forest_fire";
    $conn1=mysqli_connect($servernm,$username,$password,$dbname);

    if ($conn1->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    function execute()
    {
       include("connection.php");
        $query="select * from ESPData";
			$data= mysqli_query($conn,$query);
		
				while($result=mysqli_fetch_assoc($data))
				{
				    echo"\nhii".$result['value3'];
				}
				sleep(4);
		execute();		
    }
   execute();
    
    
    // close connection
    mysqli_close($conn1);
    
?>
                