<?php
require_once '../controllers/helpers.php';
session_start();
$title = "Borrow Requests";
function get_content() {
    $borrows = get_borrow('../data/borrow.json');
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
                <?php foreach($borrows as $i => $borrow): ?>
                    <tr>
                        <td>#<?php echo $i + 1; ?></td>
                        <td><?php echo $borrow->username; ?></td>
                        <td><?php echo $borrow->item; ?></td>
                        <td><?php echo $borrow->category; ?></td>
                        <td>
                            <div class="row justify-content-center">
                                <a href="/controllers/borrow_process/borrow_accept.php?id=<?php echo $i ?>" class="mx-1 mb-2 mb-md-0 btn btn-success">Accept</a>
                                <a href="/controllers/borrow_process/borrow_decline.php?id=<?php echo $i ?>" class="mx-1 btn btn-danger">Decline</a>
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