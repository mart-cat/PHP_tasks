<?php 
/* $products = [
    [
        'name' => 'Товар 1',
        'price' => 100.50,
        'quantity' => 10
    ],
    [
        'name' => 'Товар 2',
        'price' => 200.00,
        'quantity' => -5
    ],
    [
        'name' => 'Товар 3',
        'price' => 150.75,
        'quantity' => 20
    ],
    [
        'name' => 'Товар 2',
        'price' => 200.00,
        'quantity' => 5
    ]
];*/


class Product{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity){

        $this ->name = $name;
        $this ->price = $price;
        $this ->quantity = $quantity;}

        public function getName(){
            return $this-> name;
        }

        public function getPrice(){
            return $this-> price;
        }
        
        public function getQuantity(){
            return $this-> quantity;
        }

        public function isStuck(){
            if ($this-> quantity > 0){
                return true;
            }
            else return false;
        }


    }


$products =[];
$products [] = new Product('Товар 1', 100.50,10);
$products [] = new Product('Товар 2', 100.50, -10);