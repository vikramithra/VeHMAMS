<?php
require_once '../controllers/helpers.php';
session_start();
$title = "Return";
function get_content() {
    $assets = get_assets('../data/assets.json');
?>

<div class="container py-5">
    <div class="table-responsive-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Index</td>
                    <td>Username</td>
                    <td>Item</td>
                    <td>Category</td>
                    <?php if ( !$_SESSION['user_details']->isAdmin ) { ?>
                    <td class="text-center">Actions</td>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
                <?php if ( $_SESSION['user_details']->isAdmin ) { ?>
                <?php foreach($assets as $i => $asset): ?>
                    <?php if ( $asset->isLended) { ?>
                    <tr>
                        <td>#<?php echo $i + 1; ?></td>
                        <td><?php echo $asset->lendedTo; ?></td>
                        <td><?php echo $asset->name; ?></td>
                        <td><?php echo $asset->category; ?></td>
                    </tr>
                    <?php }?>
                <?php endforeach; ?>
                <?php }?>

                <?php if ( !$_SESSION['user_details']->isAdmin ) { ?>
                    <?php foreach($assets as $i => $asset): ?>
                        <?php if ( $_SESSION['user_details']->username == $asset->lendedTo) { ?>
                        <tr>
                            <td>#<?php echo $i + 1; ?></td>
                            <td><?php echo $asset->lendedTo; ?></td>
                            <td><?php echo $asset->name; ?></td>
                            <td><?php echo $asset->category; ?></td>
                            <?php if ( !$_SESSION['user_details']->isAdmin ) { ?>
                            <td>
                                <div class="row justify-content-center">
                                    <a href="/controllers/return_process/return_request_process.php?id=<?php echo $i ?>" class="mx-1 btn btn-warning">Return</a>
                                </div>
                            </td>
                            <?php }?>
                        </tr>
                        <?php }?>
                    <?php endforeach; ?>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

<?php
}
require_once 'partials/layout.php';
?>