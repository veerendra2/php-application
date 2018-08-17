<?php
$app_version="1.0";
$servername = getenv("MYSQl_HOST");
$username = getenv("USERNAME");
$password = getenv("PASSWORD");
$database = getenv("DATABASE");
$pod_name =  getenv("HOSTNAME");
$random_emp_id=rand(10003,499999);
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select first_name, last_name from employees where emp_no=".$random_emp_id;
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
echo("Random Employee Name:".$row["first_name"]." ".$row["last_name"]);
echo("\nApp Version:".$app_version.". Responce from the POD:".$pod_name);
?>
