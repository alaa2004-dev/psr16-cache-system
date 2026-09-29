<!-- Task2.2 -->
<?php
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
<!-- Task2.3 -->
<!-- Multi-demensional Array -->
<?php
$products = [
    ["name" => "T-shirt", "price" => 20],
    [
        "name" => "Shose",
        "price" => 40
    ]
]; ?>
<!-- Task2.4 -->
<h1>Our Products</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <?php echo $product["name"]; ?>
            <?php echo $product["price"]; ?>$
        </li>

    <?php endforeach; ?>
</ul>