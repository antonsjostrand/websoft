<?php 
    
    $item  = $_GET["item"] ?? null;
    $id    = $_POST["id"] ?? null;
    $manufacturer = $_POST["manufacturer"] ?? null;
    $name  = $_POST["name"] ?? null;
    $type  = $_POST["type"] ?? null;
    $delete = $_POST["delete"] ?? null;

    $crud = "&crud=delete";

    //Fetch everything from the table
    $db = connectDatabase($dsn);
    $resSelectAll = selectAll($db);

    if ($item){
        $resSelect = selectId($db, $item);
    }

    if ($delete){
        delete($db, $id);
    }

?>

<link rel="stylesheet" href="css/style.css">

<form class="formView">
    <select name="item" onchange="this.form.submit()">
        <option value="-1">Select item</option>

        <?php foreach ($resSelectAll as $row) : ?>
            <option value="<?= $row["id"]?>"><?= "(" . $row["id"]. ") " . $row["name"] ?></option>
        <?php endforeach; ?>
        <input type="hidden" name="crud" value="delete">
    </select>
</form>


<?php if ($resSelect ?? null) : ?>
<form method="post">
    <fieldset>
        <legend>Delete</legend>
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
            <input type="submit" name="delete" value="Delete">
        </p>
    </fieldset>
</form>
<?php endif; ?>
