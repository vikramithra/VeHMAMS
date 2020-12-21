<?php
session_start();
$title = 'Add Asset(s)';
function get_content() {
?>

<div class="container py-5">
    <div class="row">
        <h2 class="display-4 text-center mx-auto">Add Asset(s)</h2>
        <div class="col-6 mx-auto">
            <form method="POST" action="../../controllers/asset_process/asset_add_process.php">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="asset_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" name="asset_category" class="form-control">
                </div>
                <button class="btn btn-success">Add</button>
            </form>
            <hr>
            <a href="/views/index.php" class="btn btn-danger">Close</a>
        </div>
    </div>
</div>

<?php
}
require_once '../partials/layout.php';
?>