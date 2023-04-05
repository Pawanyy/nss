<?php require_once (dirname(__DIR__)) . "/config/conn.php"; ?>
<?php
$helper->IsAccessibleByAdmin();

$title = "Events";
require_once __DIR__ . "/include/layout-start.php"; 
?>
<?php
$sql = "SELECT a.*, (SELECT COUNT(b.event_id) FROM tbl_event_register b WHERE b.event_id = a.id) AS reg_users  FROM tbl_events a; ";
$result = $conn -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
?>
<div class="py-5">
<div class="table-responsive">
    <table class="table table-bordered  table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Date</th>
                <th scope="col">Registered Users</th>
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
                    <td><?=$value['date']?></td>
                    <td><?=$value['reg_users']?></td>
                    <td>
                        <a href="<?=ADMIN_URL?>eventDetails.php?event_id=<?=$value['id']?>">
                            visit
                        </a>
                    </td>
                </tr>
            <?php } ?>
            <?php if($sl == 0) { ?>
                <tr>
                    <td colspan="5">
                        <div class="text-center py-2">
                            No Events
                        </div>
                    </td>
                </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>
</div>
<?php require_once __DIR__ . "/include/layout-end.php"; ?>