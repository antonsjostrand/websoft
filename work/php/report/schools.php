<?php 
    $pageTitle = "Schools";
    require __DIR__ . "\\view\\header.php";     
?>

<p>To fetch schools select a municipality in the dropdown, then press fetch.</p>

<div>
    <button id="fetchSchools" class="fetchButton">Fetch</button>
    <select id="municipalitySelect"></select>
</div>

<table id="schoolTable" class="schoolTable"></table>

<?php require __DIR__ . "../view/footer.php"; ?>

<script type="text/javascript" src="js/move.js"></script>
<script type="text/javascript" src="js/schools.js"></script>
