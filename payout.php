<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Money Transfer </title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Sunil </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
 
                            </div>
                        </li>
                       
                      

                              
                        </li>
                         
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                              Admin House
                            </li>
                            <li class="nav-item ">
             
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php"  aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Cretae Contact</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="addfund.php"   aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Add Fund</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="payout.php"  aria-expanded="false"    >Payout</a>
                                            </li>
                                           
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                       
                           
                         
                           
                           
                             
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    
                        </div>
                    </div>
             <div class="container"> 
             <div class="alert alert-danger text-center" role="alert">
             <h1>Payout</h1>
</div>   


<form action="payoutdb.php" method="post">   
             <div class="card" >
 
  <div class="card-body ">

    <select class="form-control" id="contact_list" name="contact" onchange="serch_fund()">
    
   <?php


include_once('db.php');
include_once('dbs.php');
include_once('payoutdb.php');


    $query =mysqli_query($conn,"SELECT * FROM `contact` ");
    while ($a=mysqli_fetch_array($query)) {
     echo "<option value= '".$a['contact_id']."'>".$a['name']."</option>";
}

?>
    </select>
    </div>  
 

  <div class="form-group" >

  <select class="form-control" id="fund_id" name="fund_id">
    
   
     </select>
  </div>
  <div class="form-group">
  <input class="form-control" Type="text" name="amount" type="" placeholder="Enter Amount ">
  </div>
  
 

  <div class="form-group form-check" >
  <button type="submit" class="btn btn-primary" name="payout" style="width: 100% ">Payout</button>

  </div>

</form>




               
               
                 
    
      
               
          
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>


<script>

function serch_fund(){

    var contact_id=$("#contact_list :selected").val();
     $.ajax({


                        url:"http://localhost/MT/payoutdb.php",
                        type:"POST",
                        data:{serch_fund :contact_id},
                        success: function(contact_id){
                              


                             $("#fund_id").append(contact_id);


}



     })
     



}
</script>


</body>
 
</html>