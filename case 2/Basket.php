<?php

declare(strict_types=1);

class Basket {
    public $name;
    public $quantity;
    public $price;
    public $category;
    public $discount;

    public function __construct (string $name, int $quantity, float $price, string $category = 'other', float $discount = 0.0) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->category = $category;
        $this->discount = $discount;
    }

    public function applyDiscount() {
        if ($this->category === 'fruit') {
            $this->discount = 0.5;
        } else {
            $this->discount = 0.0;
        }

        $this->price *= (1 - $this->discount);
    }

    public function getBasketCalculator( array $items, float $taxFruit, float $taxWine) {
        $totalPrice = 0;
        $totalTaxPrice = 0;

        foreach ($items as $item) {
            $item->applyDiscount();
            $itemTotal = $item->quantity * $item->price;

            $totalPrice += $itemTotal;

            if ($item->name === 'Wine') {
                $totalTaxPrice += $itemTotal * $taxWine;
            } else {
                $totalTaxPrice += $itemTotal * $taxFruit;
            }
        }

        return [
        'totalPrice' =>$totalPrice,
        'totalTaxPrice' => $totalTaxPrice,
        ];
    }

}

$Banana = new Basket ("Banana", 6, 1.00, 'fruit');
$Apples = new Basket ("Apple", 3, 1.50, 'fruit');
$Wine = new Basket ("Wine", 2, 10.00, 'alcohol');

$itemsBasket = [$Banana, $Apples, $Wine];

$taxFruit = 0.06;
$taxWine = 0.21;

$basketInstance = new Basket("", 0, 0);

$calculatorResult = $basketInstance->getBasketCalculator($itemsBasket, $taxFruit, $taxWine);

echo "Total Price with classes and discount: €" . $calculatorResult['totalPrice'] . "<br>";
echo "Total Tax Price with classes and discount: €" . $calculatorResult['totalTaxPrice'] . "<br>";