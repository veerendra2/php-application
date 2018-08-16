<?php
$random_number=rand(0,10);
$lucky_number=0;
$app_version=1;
for($i=0; $i < 100000; $i++) {
     $lucky_number += $i*$random_number*0.00123;
}
$pod_name = getenv("HOSTNAME");
echo("App Version:".$app_version." >> Lucky Random Number: ".$lucky_number.". :: Responce from the POD: ".$pod_name);
?>
