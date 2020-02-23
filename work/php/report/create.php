<?php 
    $pageTitle = "Create";
    require __DIR__ . "\\view\\header.php";     
    require dirname(__DIR__) . "\\database\\config.php";
    require dirname(__DIR__) . "\\database\\functions.php";

    $name = $_POST["name"] ?? null;
    $type = $_POST["type"] ?? null;
    $manufacturer = $_POST["manufacturer"] ?? null;
    $create = $_POST["create"] ?? null;

    if ($create){
        echo "TEST!";
        $db = connectDatabase($dsn);
        $res = insertTech($db, $name, $type, $manufacturer);
    }

?>

<form method="post">
    <fieldset>
        <legend>Create</legend>
        <p>
            <label>Name: 
                <input type="text" name="name" placeholder="Enter product name">
            </label>
        </p>
        <p>
            <label>Type: 
                <input type="text" name="type" placeholder="Enter product type">
            </label>
        </p>
        <p>
            <label>Manufacturer: 
                <input type="text" name="manufacturer" placeholder="Enter product manufacturer">
            </label>
        </p>
        <p>
            <input type="submit" name="create" value="Create">
        </p>
    </fieldset>
</form>

<?php
    require __DIR__ . "\\view\\footer.php";     
?>

<script type="text/javascript" src="js/move.js"></script>
