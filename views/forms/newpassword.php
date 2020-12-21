<?php 
session_start();
$title = 'New Password Form';
function get_content() {
?>

<div class="container oy-5">
	<div class="row">
		<h2 class="display-4 text-center mx-auto">New Password Form</h2>
		<div class="col-6 mx-auto">
			<form method="POST" action="/controllers/view_user/process_newpassword.php">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<div class="form-group">
					<label for="">New Password</label>
					<input type="password" name="newpassword" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Confirm Password</label>
					<input type="password" name="confirmpassword" class="form-control">
				</div>

				<button class="btn btn-success">Confirm Password</button>	
			</form>
			<hr>
			<a href="../partials/view.php" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</div>

<?php 
}
require_once '../partials/layout.php';
?>