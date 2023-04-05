<?php require_once (dirname(__DIR__)) . "/config/conn.php"; ?>
<?php
$helper->IsAccessibleByAdmin();

$title = "Donations";
require_once __DIR__ . "/include/layout-start.php"; 
?>
<?php
$sql = "SELECT a.*, b.name, b.email, b.phone FROM tbl_donation a JOIN tbl_users b ON a.user_id=b.id;";
$result = $conn -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
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
                <th scope="col">Donation Amount</th>
                <th scope="col">Donation Date</th>
                <th scope="col">User Details</th>
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
                    <td><?=$value['donation']?></td>
                    <td><?=$value['date']?></td>
                    <td>
                        <a href="<?=ADMIN_URL?>user.php?user_id=<?=$value['id']?>">
                            visit
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