<form action="">
	<div class="group">
		<input type="text" class="form-control" placeholder="Name">
		<span></span>
	</div>
	<div class="group">
		<input type="email" class="form-control" placeholder="Email">
		<span></span>
	</div>
	<div class="group">
		<input type="text" class="form-control" placeholder="Telephone">
		<span></span>
	</div>
	<?php if(!is_page(15)) { ?> 
	<div class="group">
		<input type="text" class="form-control" placeholder="Postal Code">
		<span></span>
	</div>
	<? } ?>
	<div class="group">
		<select name="" id="" class="form-control">
			<option selected disabled>I am a:</option>
			<option value="">New Client</option>
			<option value="">Existing Client</option>
		</select>
		<span></span>
	</div>
	<div class="group">
		<textarea name="" rows="2" class="form-control" placeholder="Message"></textarea>
		<span></span>
	</div>
	<button class="btn-info">Contact Prep Academy Tutors</button>
</form>