<?php

$servername = "localhost";
$dbname = "id20884190_iot_forest_fire";
$username = "id20884190_forest_fire";
$password = "hPa1]p>=cCXxG5[N";
 
$api_key_value = "#54321";
$api_key_value2 = "#12345";

$api_key= $SensorData = $LocationData = $value1 = $value2 = $value3 = "";
$loc = $status = $current= "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $api_key = test_input($_POST["api_key"]);
        if($api_key == $api_key_value) 
        {
                $SensorData = test_input($_POST["SensorData"]);
                $LocationData = test_input($_POST["LocationData"]);
                $value1 = test_input($_POST["value1"]);
                $value2 = test_input($_POST["value2"]);
                $value3 = test_input($_POST["value3"]);
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "UPDATE ESPData SET SensorData='".$SensorData."',LocationData='".$LocationData."',value1='".$value1."',value2='".$value2."',value3='".$value3."' WHERE id=1";
                
                if ($conn->query($sql) === TRUE) 
                {
                    echo "New record created successfully";
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
            $conn->close();
        }
        elseif($api_key == $api_key_value2)
        {
             $loc = test_input($_POST["location"]);
             $status = test_input($_POST["status"]);
             $current = test_input($_POST["current_status"]);
             $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) 
                    {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    $query = "SELECT * FROM dashboard_data WHERE location = '$loc'";

                    $result = $conn->query($query);
                    
                    if ($result) 
                    {
                        if (mysqli_num_rows($result) > 0) 
                        {
                            //do nothing
                        } 
                        else {
                            
                            $query2="INSERT INTO dashboard_data(location,status,current_status) VALUES('$loc','$status','$current')";
                                    if ($conn->query($query2) === TRUE) 
                                    {
                                        echo "New record created successfully";
                                    } 
                                    else 
                                    {
                                        echo "Error: " . $query2 . "<br>" . $conn->error;
                                    }
                        }
                    } 
                    else 
                    {
                        echo 'Error: ' . mysqli_error();
                    }
                    
            $conn->close();
        }
        else 
        {
            echo "Wrong API Key";
        }
 
}
else 
{
    echo "No data posted HTTP POST.";
}
 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}