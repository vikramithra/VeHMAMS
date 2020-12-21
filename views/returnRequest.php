<?php
require_once '../controllers/helpers.php';
session_start();
$title = "Return Requests";
function get_content() {
    $returns = get_return('../data/return.json');
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
                    <td class="text-center">Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($returns as $i => $return): ?>
                    <tr>
                        <td>#<?php echo $i + 1; ?></td>
                        <td><?php echo $return->username; ?></td>
                        <td><?php echo $return->item; ?></td>
                        <td><?php echo $return->category; ?></td>
                        <td>
                            <div class="row justify-content-center">
                                <a href="/controllers/return_process/return_accept.php?id=<?php echo $i ?>" class="mx-1 mb-2 mb-md-0 btn btn-success">Accept</a>
                                <a href="/controllers/return_process/return_decline.php?id=<?php echo $i ?>" class="mx-1 btn btn-danger">Decline</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
}
require_once 'partials/layout.php';
?>