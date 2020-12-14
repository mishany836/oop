<?php


namespace classes\cart;


class Cart
{
    private $listCart = [];
    public function __construct()
    {
        if (!empty($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $item) {
                $this->listCart = unserialize($item);
            }
        }
    }
    public function addToCart(Product $product) // только обьект класса продукт
    {
      $this->listCart[] = $product;
      $_SESSION['cart'][] = serialize($product); // схраняем также и в сесссии ОБЬЕКТ преобразованнный в строку
    }

    public function getCart()
    {
        echo '<div>';
        foreach ($this->listCart as $cart){
            echo  '<p> Название: '. $cart->name . '</p>';
            echo  '<p> Цена: '. $cart->price . '</p>';
            echo  '<p> Количество: '. $cart->quantity . '</p>';
            echo '<br><hr></br>';
        }
        echo '</div>';
    }
}