<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Hotel Aj </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lvbs/css/bootstrap.min.css"></head>
<body>	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text text-warning" href="#"><strong>Aj Hotel</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text text-white" href="#">About Us</a>
        </li>        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/user/invoicelist">Invoices</a></li>
            <li><a class="dropdown-item" href="#">Lodging</a></li>
            <li><a class="dropdown-item" href="#">Cattering</a></li>
          </ul>
        </li>
 
<li class="nav-item"><a class="nav-link text text-danger position-absolute" href="<?php echo base_url(); ?>index.php/user/logout">Logout</a>        
      </ul>
          </div>
  </div>
</nav>
	<?php
				$user = $this->session->userdata('user');
				extract($user);
	      ?>

<?php 		$dataid =$id;

			$this->session->set_userdata('userid', $dataid);
	
	
	?>
		
<center>
	<small class="page-header text-center"><strong class="text text-info">Welcome <?php echo ucwords($fname); ?></strong></small>
<br/><small>Please Select Dish</small>
	</center>
	
	<style>
.img-container {
    position: relative;

}
.img-container .img-footer {
    position: absolute;
    bottom: 20px; left: 0;
    
    width: 100%;

    color: #fff;
    background: rgba(0,0,0,0.7);   
}</style>
	
   <form action="<?php echo base_url(); ?>index.php/user/cart_sub" method="post" enctype="multipart/form-data">  
<center><button type="submit" class="btn btn-danger" name="sub">Order Now</button></center>
	<div class="container-fluid">
	<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <div class='col-xs-4'>
                <div class='img-container'>
  <img
      src="<?php echo base_url(); ?>application/img/kaju.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    /> <div class='img-footer'>
                        <p>Kaju Masala<br/><small>
Rs.550/-</small></p>
<div class="col"><input type="checkbox" id="1" name="dish[]" value="1"/>Add To Cart</div>
                    </div>    
                </div></div> 
 <div class='col-xs-4'>
                <div class='img-container'>
		
    <img
      src="<?php echo base_url(); ?>application/img/mashroom.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  
				<div class='img-footer'>
                        <p>Panner Mix<br/><small>
Rs.550/-</small></p>
							  <div class="col"><input type="checkbox" id="2" name="dish[]" value="2"/>Add To Cart</div>
                    </div>    
                </div></div> 
</div>
	
  <div class="col-lg-4 mb-4 mb-lg-0">
    
         <div class='col-xs-4'>
                <div class='img-container'>
				
	  <img
      src="<?php echo base_url(); ?>application/img/panner.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    /><div class='img-footer'>
                        <p>PannerTika<br/><small>
Rs.550/-</small></p>
							  <div class="col"><input type="checkbox" id="3" name="dish[]" value="3"/>Add To Cart</div>
                    </div>    
                </div></div> 
         <div class='col-xs-4'>
                <div class='img-container'>
		
    <img
      src="<?php echo base_url(); ?>application/img/veggi.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
<div class='img-footer'>
                        <p>Mix Vegg<br/><small>
Rs.550/-</small></p>
							 <div class="col"><input type="checkbox" id="4" name="dish[]" value="4"/>Add To Cart</div>
                    </div>    
                </div></div></div> 
  <div class="col-lg-4 mb-4 mb-lg-0">
              <div class='col-xs-4'>
                <div class='img-container'>
		
	  <img
      src="<?php echo base_url(); ?>application/img/nan.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
		
				<div class='img-footer'>
                        <p>Naan Rtoi<br/><small>
Rs.50/-</small></p>
							<div class="col"><input type="checkbox" id="5" name="dish[]" value="5"/>Add To Cart</div>
                    </div>    
                </div></div> 

             <div class='col-xs-4'>
                <div class='img-container'>
				
<img
      src="<?php echo base_url(); ?>application/img/kaju.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />   
			
				<div class='img-footer'>
                        <p>Kaju  Panner Masala<br/><small>
Rs.550/-</small></p>
				 <div class="col"><input type="checkbox" id="6" value="6"  name="dish[]"/>Add To Cart</div>
                    </div>    
                </div></div> 
	
	</div>
</div>
<!-- Gallery --></div>
	</form><script src="<?php echo base_url(); ?>lvbs/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>lvbs/js/popper.js"></script>
	</body>
</html>
