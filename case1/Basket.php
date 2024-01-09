<?php

declare(strict_types=1);

class Basket {
    public $name;
    public $quantity;
    public $price;

    public function __construct (string $name, int $quantity, float $price) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

}

$Banana = new Basket ("Banana", 6, 1.00);
$Apples = new Basket ("Apple", 3, 1.50);
$Wine = new Basket ("Wine", 2, 10.00);

$itemsBasket = [$Banana, $Apples, $Wine];

$taxFruit = 0.06;
$taxWine = 0.21;

$totalPrice = 0;
$totalTaxPrice = 0;

foreach ($itemsBasket as $item) {
    $itemTotal = $item->quantity * $item->price;

    $totalPrice += $itemTotal;

    if ($item->name === 'Wine') {
        $totalTaxPrice += $itemTotal * $taxWine;
    } else {
        $totalTaxPrice += $itemTotal * $taxFruit;
    }
}







echo "Total Price without classes:" . " " . "€" . $totalPrice;
echo "<br>";
echo "Total Tax Price without classes:" . " " . "€" . $totalTaxPrice;