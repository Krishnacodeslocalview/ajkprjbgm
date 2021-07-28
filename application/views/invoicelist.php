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
</nav><h1>Your Invoices</h1>
			<?php
				$user = $this->session->userdata('user');
				extract($user);
	      
//$query = $this->db->get_where('invoice','c_id'='$id');

//foreach ($query->result() as $row)
//{
  //  echo $row->c_id;
//}
//$this->get->where('c_id', $id);
//$query = $this->db->get('invoice');
//$query = $this->db->get_where('invoice', array('c_id'=>$id));

$this->db->select('c_id,id,p_name,subtotal,datet,c_name');
$this->db->distinct('cid');
$this->db->order_by("id", "desc");
	
$query = $this->db->get_where('invoice', array('c_id'=>$id));
$query->result();
?>   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Invoice Id</th>
      <th scope="col">Date</th>
	      <th scope="col">Total Paid</th></tr>
  </thead>
<?php
foreach ($query->result() as $row)
{?>

  <tbody>
    <tr>      <td>	<?php echo $row->id;?>
</td><td>	<?php echo $row->datet;?>
</td><td>	<?php echo $row->subtotal;?>
</td><td><button class="btn btn-danger rounded-pill shadow-sm btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row->id;?>" data-id="<?php echo $row->id;?>">View Invoice </button></td></tr>
  </tbody>
	
	
	<?php 
	


}

?>
</table>

<?php
foreach ($query->result() as $row)
{?>


	<div class="modal fade" id="exampleModal<?php echo $row->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
		<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Date</th>
      <th scope="col">Dish</th>
      <th scope="col">Ammount Paid</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><small class="text text-info"><?php echo $row->datet;?></small></td>
		<td><small class="text text-info"><?php echo $row->p_name;?></small></td>
		<td><small class="text text-info"><?php echo $row->subtotal;?></small></td>

    </tr>
      </tbody>
</table>
		
		</div>
      <div class="modal-footer">
<small>Includes GST and Discount</small>
		  <button type= "button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

  </div>
</div></div>
<?php }?>   		
	
	
	
	<script src="<?php echo base_url(); ?>lvbs/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>lvbs/js/popper.js"></script>