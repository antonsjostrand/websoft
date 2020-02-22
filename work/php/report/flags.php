<?php 
    $pageTitle = "Flags";
    require __DIR__ . "\\view\\header.php";     
?>

<div class="flagLinks">
    <a href="#" id="sweden">Sweden</a>
    <a href="#" id="denmark">Denmark</a>
    <a href="#" id="finland">Finland</a>
</div>

<div class="flag" id="flagContainer">
    <div class="vertical" id="flagVertical"></div>
    <div class="horizontal" id="flagHorizontal"></div>
</div> 

<?php require __DIR__ . "../view/footer.php"; ?>
    
<script type="text/javascript" src="js/move.js"></script>
<script type="text/javascript" src="js/flag.js"></script>