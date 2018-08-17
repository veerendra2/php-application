<?php
$app_version="2.0";
$servername = "172.17.0.3";
$username = "root";
$password = "rebaca";
$database = "employees";
$pod_name =  getenv("HOSTNAME");;
$random_emp_id=rand(10002,499999);
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select employees.first_name, employees.last_name, titles.title from employees,titles where employees.emp_no=".$random_emp_id." and titles.emp_no=".$random_emp_id;
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
echo("Random Employee Name:".$row["first_name"]." ".$row["last_name"].". Title:".$row["title"]);
echo("\nApp Version:".$app_version.". Responce from the POD:".$pod_name);
?>
