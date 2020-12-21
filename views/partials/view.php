<?php
session_start();
$title = "View User";
function get_content() {
    include '../../controllers/helpers.php';
    $users = get_users('../../data/user.json');
?>

    <div class="container py-5">
        <h2 class="text-center col-md-6 mx-auto py-5">User Lists</h2>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <td>Index</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td class="text-center">Actions</td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $i => $user): ?>
                        <tr class="text-center">
                            <td>#<?php echo $i + 1; ?></td>  
                            <td><?php echo $user->firstname; ?></td>
                            <td><?php echo $user->lastname; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="/views/forms/newpassword.php?id=<?php echo $i ?>" class="btn btn-warning mb-2 mb-md-0">Change Password</a>  
                                    <a href="../../controllers/view_user/delete_user.php?id=<?php echo $i ?>" class="btn btn-danger mb-2 mb-md-0">Delete User</a>
                                </div>
                            </td>   
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr></tr>
                    <td colspan="6" class="text-right">
                        <a href="/views/forms/register.php" class="btn btn-primary">Add User</a>
                    </td>
                </tfoot>
            </table>
        </div>
    </div>

<?php
}
require_once 'layout.php';
?>