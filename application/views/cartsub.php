	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Hotel Aj </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lvbs/css/bootstrap.min.css"></head>
<body>	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand text text-warning" href="#"><strong>Aj Hotel</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        
      </ul>
          </div>
  </div>
</nav>
	
	<?php
				$user = $this->session->userdata('id');
				extract($user);

	 ?>    <div class="table-responsive-xl shadow-lg" >

	<table class="table table-striped table-hover table-bordered-outside">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Dish</th>
      <th scope="col">Price</th>
		<th scope="col">GST</th>
<th scope="col">Discount</th>
		<th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr> <td><?php   echo $pname; ?></td>
      <td><?php echo ($price); ?></td>
		<td>18%</td>
		<td>3%</td>
		<td><?php
			$gsta=18; $dis=3;
			$ingst=( $price * $gsta ) / 100 ;
            $agst=$ingst+$price;
            $dis1 =$agst*.3; 
			$tot=$agst-$dis1; echo $tot;
				$user = $this->session->userdata('user');
				extract($user);
			
						 
						 	?></td>
		
		            
      
    </tr></tbody></table>
	<center><form method="post" action="<?php echo base_url(); ?>index.php/user/invoice">
		  <input type="hidden" name="pname" value="<?php echo $pname;?>"><input type="hidden" value="<?php echo $tot;?>" name="tot">  <input type="hidden" name="c_id" value="<?php echo $id;?>"><input type="hidden" name="fname" value="<?php echo $fname;?>"><input type="hidden" name="pro_id" value="<?php echo $pro_id;?>">
		  <button class="btn btn-success" type="submmit">Finalise Order</button></form></center>