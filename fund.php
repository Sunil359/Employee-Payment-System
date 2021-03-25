
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>
  <body>



  <?php

 
include_once('dbs.php');



// add fund 


if(isset($_REQUEST['submit_1'])){

   $cont_id =$_REQUEST['contact'];
   $bank=$_REQUEST['bank_ac'];
   $ifsc=$_REQUEST['ifsc'];
   $name =$_REQUEST['c_name'];
   
}
      
   
   $curl = curl_init();
   
   curl_setopt_array($curl, array(
     CURLOPT_URL => 'https://api.razorpay.com/v1/fund_accounts',
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_ENCODING => '',
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 0,
     CURLOPT_FOLLOWLOCATION => true,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => 'POST',
     CURLOPT_POSTFIELDS =>'{
     "contact_id": "'.$cont_id.'",
     "account_type": "bank_account",
     "bank_account": {
       "name": "'.$name.'",
       "ifsc": "'.$ifsc.'",
       "account_number": "'.$bank.'"
     }
   }',
     CURLOPT_HTTPHEADER => array(
       'Content-Type: application/json',
       'Authorization: Basic cnpwX3Rlc3RfTTF0eDdyakhpSkdpU0s6Mkl5bGFYUnhmVkU1VW5xY05OWTY5M1V4'
     ),
   ));
   // dump fund data to database

   $response = curl_exec($curl);
   
   curl_close($curl);
  // echo $response;
   $response = curl_exec($curl);

echo '<div class="alert alert-danger text-center" role="alert">
Your Fund Created Sucessfully !
</div> ';
header('Refresh: 1; URL=addfund.php');

$data=json_decode($response,true);


if($data['id']!=''){

 $id=$data['id'];
 $sql="INSERT INTO `addfund`(`fund_acc_id`, `contact_id`, `name`, `ac_no`) VALUES ('$id','$cont_id','$name','$bank')";
 mysqli_query($conn,$sql);


   
   }






?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>






