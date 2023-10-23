<?php 

    $products = json_decode(file_get_contents('products.json')); 
    $total = 0;
    $total_phone_laptop = 0;
    $count = 0;
    $list = "";

    foreach($products as $product) {
        $pounds = $product->price_in_pence/100;
        $total = $pounds + $total;

        //echo "Category: ".$product->category." | Name: ".$product->name." | Price: £".$pounds."<br>";

        if($product->category == "Laptop" || $product->category == "Phone")
        {
            $total_phone_laptop = $pounds + $total_phone_laptop;
        }
        if($product->category == "Graphics Card")
        {
            $count++;
        }
        if($product->category == "Phone")
        {
            $list .= $product->name.", ";
        }
    }

    echo "The total price of all products is £".$total."."."<br>";
    echo "The total price of all phones and laptops is £".$total_phone_laptop."."."<br>";
    echo "The total count of graphic cards is ".$count."."."<br>";
    echo "The names phones are: ".$list."<br>";


