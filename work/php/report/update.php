<?php 
    $pageTitle = "Update";
    require __DIR__ . "\\view\\header.php";     
    require dirname(__DIR__) . "\\database\\config.php";
    require dirname(__DIR__) . "\\database\\functions.php";

    $rowType = 1;

    $item  = $_GET["item"] ?? null;
    $id    = $_POST["id"] ?? null;
    $manufacturer = $_POST["manufacturer"] ?? null;
    $name  = $_POST["name"] ?? null;
    $type  = $_POST["type"] ?? null;
    $update = $_POST["update"] ?? null;

    //Fetch everything from the table
    $db = connectDatabase($dsn);
    $resSelectAll = selectAll($db);

    if ($item){
        $resSelect = selectId($db, $item);
    }

    if ($update){
        updateTech($db, $id, $manufacturer, $name, $type);

    }

?>

<form>
    <select name="item" onchange="this.form.submit()">
        <option value="-1">Select item</option>

        <?php foreach ($resSelectAll as $row) : ?>
            <option value="<?= $row["id"] ?>"><?= "(" . $row["id"]. ") " . $row["name"] ?></option>
        <?php endforeach; ?>

    </select>
</form>

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

<?php if ($resSelect ?? null) : ?>
<form method="post">
    <fieldset>
        <legend>Update</legend>
        <p>
            <label>Id: 
                <input type="text" readonly="readonly" name="id" value="<?= $resSelect["id"] ?>">
            </label>
        </p>
        <p>
            <label>Manufacturer: 
                <input type="text" name="manufacturer" value="<?= $resSelect["manufacturer"] ?>">
            </label>
        </p>
        <p>
            <label>Name: 
                <input type="text" name="name" value="<?= $resSelect["name"] ?>">
            </label>
        </p>
        <p>
            <label>Type: 
                <input type="text" name="type" value="<?= $resSelect["type"] ?>">
            </label>
        </p>
        <p>
            <input type="submit" name="update" value="Update">
        </p>
    </fieldset>
</form>
<?php endif; ?>


<?php
    require __DIR__ . "\\view\\footer.php";     
?>

<script type="text/javascript" src="js/move.js"></script>
