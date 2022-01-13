<?php require("partials/header.php");?>
<table>
    <tr>
        <th scope="col">Product</th>
        <th scope="col">Prijs</th>
        <th scope="col">Aantal</th>
        <th scope="col">Subtotaal</th>
    </tr>
    <?php foreach ($boodschappenlijst as $product) : ?>
    <tr>
        
        <td><?= $product->name;?></td>
        <td class="productPrice" value="1"><?= $product->price;?></td>
        <td><?= $product->number; ?></td>
        <td class="productTotalCost" ><?= $product->price * $product->number;?></td>
        <?php $totaal_prijs += ($product->price * $product->number);?>
    </tr>
    <?php endforeach; ?>
    
    </tr>
    <tr id="totaalrow">
        <td colspan="3">Totaal</td>
                    <td id="totalCost" class="productTotalCost"><?= $totaal_prijs ?></td>
    </tr>
</table>

    
<?php require("partials/footer.php");?>
