<?php  
$title = "Register";
function get_content() {
?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto py-5">
				<h2 class="text-center">Register</h2>
				<form method="POST" action="/controllers/view_user/process_register.php">
					<div class="form-group">
						<label>First name</label>
						<input type="text" name="firstname" class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lastname" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
						<div id="emailHelp" class="form-text testing">We'll never share your email</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
						<div id="passwordHelpBlock" class="form-text t-2">
 							Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
 						</div>	
					</div>
					<div class="form-group">
						<label for="admin">Admin</label>
						<select name="admin" id="admin" class="form-control">
							<option value="false">No</option>
							<option value="true">Yes</option>
						</select>
					</div>
					<button class="btn btn-primary">Register</button>
				</form>
				<hr>
	            <a href="/views/partials/view.php" class="btn btn-danger">Close</a>
			</div>
		</div>
	</div>

<?php  
	}
	require_once '../partials/layout.php';
?>