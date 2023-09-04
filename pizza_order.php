<?php
$smallPizzaPrice = 15;
$mediumPizzaPrice = 22;
$largePizzaPrice = 30;
$pepperoniSmallPrice = 3;
$pepperoniMediumPrice = 5;
$extraCheesePrice = 6;

// Get user's order details
$size = $_POST['size'];
$pepperoni = isset($_POST['pepperoni']) ? true : false;
$extraCheese = isset($_POST['extra_cheese']) ? true : false;

if ($size == "Small") {
    $basePrice = $smallPizzaPrice;
} elseif ($size == "Medium") {
    $basePrice = $mediumPizzaPrice;
} elseif ($size == "Large") {
    $basePrice = $largePizzaPrice;
} else {
    echo "Invalid pizza size!";
    exit;
}

if ($pepperoni) {
    if ($size == "Small") {
        $basePrice += $pepperoniSmallPrice;
    } elseif ($size == "Medium") {
        $basePrice += $pepperoniMediumPrice;
    }
}

if ($extraCheese) {
    $basePrice += $extraCheesePrice;
}

echo "You ordered a $size pizza";
if ($pepperoni) {
    echo " with pepperoni";
}
if ($extraCheese) {
    echo " with extra cheese";
}
echo ".<br>";
echo "Your total bill is RM" . $basePrice;
