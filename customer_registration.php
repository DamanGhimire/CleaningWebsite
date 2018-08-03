<?php
include_once("header.php");
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7">
<form id="registration" enctype="multipart/form-data" action="customer_process.php" method="post">
	<div class="form-group">
		<label for="name">Name :</label>
		<input type="text"  class="form-control"  name="name" id="name">
	</div>
	<div class="form-group">
		<label for="phone_no">Phone no.:</label>
		<input type="text" name="phone_no" id="phone_no" class="form-control">					
	</div>
	<div class="form-group">
    	<label for="email">Email</label>
    	<input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  	</div>
    <div class="form-group">
    	<label for="password">Password</label>
    	<input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
  	</div>
  	<div class="form-group">
		<label for="address">Address :</label>
		<input type="text"  class="form-control"  name="address" id="address">
	</div>
	<div class="form-group">
		<label for="best_contact">Best Contact :</label>
			<select name="best_contact" id="best_contact" class="form-control">
				<option selected disabled></option>
				<option>Phone</option>
				<option>Email</option>
				<option>Text Msg</option>
			</select>
	</div>	
		<input type="submit" id="submit_personal" class="btn btn-primary" value="Proceed To Next">
		</form>
</div>
</div>
</div>			


<?php
include_once("footer.php");
?>
