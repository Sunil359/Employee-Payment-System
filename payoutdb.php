<?php

include_once('dbs.php');
 

if(isset($_REQUEST['serch_fund '])){

$cont_id =$_REQUEST['serch_fund '];


$contact_id='';
$query =mysqli_query($conn,"SELECT * FROM `addfund` WHERE `contact_id`='$cont_id'");
while($data=mysqli_fetch_array($query))
{

$contact_id=$contact_id."<option value ='".$data['fund_acc_id']."'>".$data['name']."</option>";

}
echo $cont_id;
die;

}
   ?>
