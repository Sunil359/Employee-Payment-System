
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php

//Crete customer 
ob_start();
session_start(); 
include_once('dbs.php');

if(isset($_REQUEST['submit'])){


  $name=$_REQUEST['name'];
  $mob=$_REQUEST['mob'];

 


}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.razorpay.com/v1/contacts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "name": "'.$name.'",
  "email": "",
  "contact": '.$mob.',
  "type": "employee",
  "reference_id": "Acme Contact ID 12345",
  "notes":{
    "random_key_1": "Make it so.",
    "random_key_2": "Tea. Earl Grey. Hot."
  }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic cnpwX3Rlc3RfTTF0eDdyakhpSkdpU0s6Mkl5bGFYUnhmVkU1VW5xY05OWTY5M1V4'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo '<div class="alert alert-danger text-center" role="alert">
Your Acount Created Sucessfully !
</div> ';
header('Refresh: 1; URL=contact.php');



$data=json_decode($response,true);
 


if($data['id']!=''){

  $id=$data['id'];
  
mysqli_query($conn,"INSERT INTO `contact`(`contact_id`, `name`, `mob`) VALUES ('$id','$name','mob')");



}


 
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

