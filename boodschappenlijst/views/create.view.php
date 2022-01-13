<?php require("partials/header.php");?>

<form method="POST" action="/groceries">

    <p>productnaam: <input type="text" name="name"> </p>
    <p>aantal: <input type="number" min="0" name="number"> </p>
    <p>productprijs: <input type="number" min="0" step="0.05" name="price"> </p>
    
    <button type="submit">submit</button>
</form>

    <?php require("partials/footer.php");?>

