<?php
include_once("header.php");
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7">
<form id="registration" enctype="multipart/form-data" action="quote_process.php" method="post">
	<div class="form-group">
		<label for="property">Property Type :</label>
			<select name="property" id="property" class="form-control">
				<option selected disabled></option>
				<option>Apartment</option>
				<option>House</option>
				<option>Unit</option>
				<option>Townhouse</option>
			</select>
	</div>	
	<div class="form-group">
		<label for="bedroom">No. of Bedroom :</label>
			<select name="bedroom" id="bedroom" class="form-control">
				<option selected disabled></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>6+</option>
			</select>
	</div>	
	<div class="form-group">
		<label for="bathroom">No. of Bathroom :</label>
			<select name="bathroom" id="bathroom" class="form-control">
				<option selected disabled></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>6+</option>
			</select>
	</div>	
	<div class="form-group">
		<label for="reg_date">Registration Date :</label>
		<input type="date" name="reg_date" id="reg_date" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Name :</label>
		<input type="text"  class="form-control"  name="name" id="name">
	</div>
	<div class="form-group">
		<label for="phone_no">Phone no.:</label>
		<input type="text" name="phone_no" id="phone_no" class="form-control">					
	</div>
	<div class="form-group">
    	<label for="email">Email address</label>
    	<input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
	<div class="form-group">
		<label for="message">Any Message :</label>
		<textarea name="message" class="form-control"  id="message" rows="5" cols="40"></textarea>
	</div>
		<input type="submit" id="submit_personal" class="btn btn-primary" value="Submit">
		</form>
</div>
</div>
</div>			


<?php
include_once("footer.php");
?>
