<?php require_once (dirname(__DIR__)) . "/config/conn.php"; ?>
<?php
$helper->IsAccessibleByAdmin();

$user_id = $_SESSION['uid'];
if(isset($_POST['passwordUpdate'])){
    $old_password = $_POST['oldPassword'];
    $password = $_POST['newPassword'];
    
    $sql = "SELECT * FROM `tbl_users` WHERE id = $user_id AND password = '$old_password'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

    if($row !== false && !empty($row)){

        $sql = "UPDATE tbl_users SET password='$password' WHERE id = $user_id";
        $resultUpdate = $conn -> query($sql);

        if($resultUpdate){
            $helper->SendSuccessToast("Password Changed Sucessfully");
            $helper->Redirect(BASE_URL . 'profile.php');
        } else {
            $helper->SendErrorToast("Password Update Failed!!");
            $helper->Redirect(BASE_URL . 'profile.php');
        }
    } else {
        $helper->SendErrorToast("Old Password Incorrect!!");
        $helper->Redirect(BASE_URL . 'profile.php');
    }
}

$sql = "SELECT * FROM tbl_contact";
$result = $conn -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
?>
<?php 
$title = "Contact";
require_once __DIR__ . "/include/layout-start.php"; 
?>
<div class="py-5">
<div class="table-responsive">
    <table class="table table-bordered  table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">DateTime</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sl = 0;
            foreach ($rows as $key => $value) { 
                $sl++;
            ?>
                <tr>
                    <th scope="row"><?=$sl?></th>
                    <td><?=$value['name']?></td>
                    <td><?=$value['email']?></td>
                    <td><?=$value['phone']?></td>
                    <td><?=$value['subject']?></td>
                    <td><?=$value['message']?></td>
                    <td><?=$value['date']?></td>
                    <td>
                        <a href="<?=ADMIN_URL?>contact.php?did=<?=$value['id']?>"
                            onclick="return confirm('Are you sure?')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
            <?php if($sl == 0) { ?>
                <tr>
                    <td colspan="10">
                        <div class="text-center py-2">
                            No Users
                        </div>
                    </td>
                </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>
</div>
<?php require_once __DIR__ . "/include/layout-end.php"; ?>