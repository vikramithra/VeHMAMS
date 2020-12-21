<?php
session_start();
require_once '../../controllers/helpers.php';
$title = 'Edit Asset(s)';
function get_content() {
    $id = $_GET['id'];
    $assets = get_assets('../../data/assets.json');
    $asset = $assets[$id];
?>

<div class="container py-5">
    <div class="row">
        <h2 class="display-4 text-center mx-auto">Edit Asset(s)</h2>
        <div class="col-6 mx-auto">
            <form method="POST" action="../../controllers/asset_process/asset_edit_process.php">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="asset_name" class="form-control" value="<?php echo $asset->name ?>">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" name="asset_category" class="form-control" value="<?php echo $asset->category ?>">
                </div>
                <button class="btn btn-success">Edit</button>
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