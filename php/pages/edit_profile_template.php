<!DOCTYPE html>
<html>
	<?php require getcwd()."../../php/components/headers.php"; ?>
	<body>
		<?php require getcwd().'../../php/components/navigation.php'; ?>

		<div class="container-fluid row no-spaces">
			<?php require getcwd().'../../php/components/profile_navbar.php'; ?>
			<div class="col-md-10 content">
				<div class="container jumbotron" style="top:30vh;">
					<h1 class="text-center text-gray-dark">Edit your Profile Details</h1>
				</div>
				<div class="container w-75">
					<form action="#" method="POST">
						<div class="form-group">
							<label for="first_name">Email address:</label>
							<input type="text" class="form-control" id="first_name" name="first_name">
						</div>
						<div class="form-group">
							<label for="last_name">Email address:</label>
							<input type="text" class="form-control" id="last_name" name="last_name">
						</div>
						<div class="form-group">
							<label for="college_name">Select College:</label>
							<select class="form-control" id="college_name">
								<option>V.J.T.I.</option>
								<option>S.P.I.T.</option>
								<option>I.I.T.</option>
							</select>
						</div>
						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" class="form-control" id="address" name="address">
						</div>
						<div class="form-group">
							<label for="city">City:</label>
							<input type="text" class="form-control" id="city" name="city">
						</div>
						<div class="form-group">
							<label for="state">State:</label>
							<input type="text" class="form-control" id="state" name="state">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>