<?php 
    $pageTitle = "Search";
    require __DIR__ . "\\view\\header.php";     
    require dirname(__DIR__) . "\\database\\config.php";
    require dirname(__DIR__) . "\\database\\functions.php";

    $rowType = 1;

    $value = $_GET["value"] ?? null;

    if($value){
        $db = connectDatabase($dsn);
        $res = selectWildcard($db, $value);
    }
?>

<form>
    <p>
        <label>Search for value:
            <input type="text" name="value" value="<?= $value ?>"/>
        </label>

        <label>
            <input type="submit" value="Submit"/>
        </label>
    </p>

</form>

<?php if ($value) : ?>
    <table class="dataTable">
        <tr class="dataColumn">
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Manufacturer</th>
        </tr>

    <?php foreach ($res as $row) : ?>
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

<?php require __DIR__ . "\\view\\footer.php"; ?>

<script type="text/javascript" src="js/move.js"></script>