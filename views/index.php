<?php
require_once '../controllers/helpers.php';
session_start();
$title = "Home";
function get_content() {
    $assets = get_assets('../data/assets.json');
?>

<div class="container py-5">
    <div class="table-responsive-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Index</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td class="text-center">Status</td>
                    <td class="text-center">Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($assets as $i => $asset): ?>
                    <tr>
                        <td>#<?php echo $i + 1; ?></td>
                        <td><?php echo $asset->name; ?></td>
                        <td><?php echo $asset->category; ?></td>
                        <td>
                            <div class="row justify-content-center">
                                    <a href="" class="mx-1 mb-2 mb-md-0 btn btn-<?php $asset->isLended ? print("secondary") : print("success") ?>">
                                    <?php $asset->isLended ? print("Lended") : print("Free") ?>
                                    </a>
                                    <?php if($_SESSION["user_details"]->isAdmin) {

                                    ?>
                                    <a href="/controllers/asset_process/asset_isActive_process.php?id=<?php echo $i ?>" class="mx-1 btn btn-<?php $asset->isActive ? print("success") : print("secondary") ?>">
                                    <?php $asset->isActive ? print("Active") : print("Inactive") ?>
                                    </a>
                                    <?php }else{ ?>    
                                    <button class="mx-1 btn btn-<?php $asset->isActive ? print("success") : print("secondary") ?>" disabled>
                                    <?php $asset->isActive ? print("Active") : print("Inactive") ?>
                                    </button>
                            <?php } ?>        
                            </div>
                        </td>
                        <td>
                            <div class="row justify-content-center">
                                <?php 
                                
                                    // isset()    dia masuk : kalau ada bender ini return True
                                    // $ada = false;
                                    // var_dump(isset($ada)) // True
                                    // var_dump(isset($noVar)) // false

                                    // $ialahTrue = true;
                                    // $bukanTrue =false ;
                                    // var_dump($ialahTrue)   // True
                                    // var_dump($bukanTure)   // false
                                    // var_dump(!$ialahTrue)  // False
                                    // var_dump(!$bukanTrue)  // True
                                    // ! macam !=

                                    if ($_SESSION["user_details"]->isAdmin) {
                                    # code...
                                 ?>
                                    <a href="/views/forms/edit_asset.php?id=<?php echo $i ?>" class="mx-1 btn btn-warning mb-2 mb-md-0">Edit</a>
                                    <a href="/controllers/asset_process/asset_delete_process.php?id=<?php echo $i ?>" class="mx-1 btn btn-danger mb-2 mb-md-0">Delete</a>
                                <?php }else{ ?>

                                    <?php if($asset->isActive) { ?>
                                    <a href="/controllers/borrow_process/borrow_request_process.php?id=<?php echo $i ?>" class="mx-1 btn btn-primary ">Borrow</a>
                                    <?php } else { ?>
                                    <a href="" class="mx-1 btn btn-secondary ">Borrow</a>
                                    <?php } ?>
                            <?php } ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="/views/forms/add_asset.php" class="btn btn-primary">Add</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php
}
require_once 'partials/layout.php';
?>