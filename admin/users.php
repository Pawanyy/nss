<?php require_once (dirname(__DIR__)) . "/config/conn.php"; ?>
<?php
$helper->IsAccessibleByAdmin();

$title = "Users";
require_once __DIR__ . "/include/layout-start.php"; 
?>
<?php
$role = ROLE::USER;
$sql = "SELECT a.*, COUNT(DISTINCT b.event_id) AS reg_events, SUM(d.donation) AS donation FROM tbl_users a LEFT JOIN tbl_event_register b ON a.id=b.user_id LEFT JOIN tbl_events c ON c.id=b.event_id LEFT JOIN tbl_donation d ON a.id=d.user_id  WHERE a.role = $role GROUP BY a.id;";
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
                <th scope="col">Registered At</th>
                <th scope="col">Registered Events</th>
                <th scope="col">Total Donations</th>
                <th scope="col">Details</th>
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
                    <td><?=$value['created_at']?></td>
                    <td><?=$value['reg_events']?></td>
                    <td><?=$value['donation']?></td>
                    <td>
                        <a href="<?=ADMIN_URL?>eventDetails.php?event_id=<?=$value['id']?>">
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