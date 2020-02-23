<?php 
    $pageTitle = "Update";
    require __DIR__ . "\\view\\header.php";     
    require dirname(__DIR__) . "\\database\\config.php";
    require dirname(__DIR__) . "\\database\\functions.php";

    $rowType = 1;
    $crud = $_GET["crud"] ?? null;

    //Fetch everything from the table
    $db = connectDatabase($dsn);
    $resSelectAll = selectAll($db);


?>

<?php if ($resSelectAll) : ?>
    <table class="dataTable">
        <tr class="dataColumn">
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Manufacturer</th>
        </tr>

    <?php foreach ($resSelectAll as $row) : ?>
        <tr class="dataRow<?= $rowType ?>">
            <td><?= $row["id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["type"] ?></td>
            <td><?= $row["manufacturer"]?></td>
        </tr>
    <?php 
        if ($rowType == 1){
            $rowType = 0;
        }else {
            $rowType = 1;
        }
        endforeach;
    ?>

    </table>
<?php endif; ?>

<h3>Click the desired action to perform on the table</h3>
<div class="linkContainer">
    <a href="read.php?crud=create">Create</a>
    <a href="read.php?crud=update">Update</a>
    <a href="read.php?crud=delete">Delete</a>
    <a href="read.php?crud=search">Search</a>
</div>
<br>

<?php
    if (isset($crud)){
        switch($crud){
            case "create":
                require __DIR__ . "\\view\\createView.php";    
            break;
            case "delete":
                require __DIR__ . "\\view\\deleteView.php";  
            break;
            case "update":
                require __DIR__ . "\\view\\updateView.php";  
            break;
            case "search":
                require __DIR__ . "\\view\\searchView.php";  
            break;
        }
    }
?>

<?php require __DIR__ . "\\view\\footer.php"; ?>

<script type="text/javascript" src="js/move.js"></script>