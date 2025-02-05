<?php
    include("animal.php");
    include("frog.php");
    include("ape.php");

    echo "<h2> Latihan OOP </h2>";
    
    $sheep = new Animal("shaun");

    // Menampilkan properti objek sheep
    echo "Name: " . $sheep->name . "<br>";        // Output: shaun
    echo "legs: " . $sheep->legs . "<br>";        // Output: 4
    echo "cold blooded: " . $sheep->cold_blooded . "<br><br>"; // Output: no
    
    $frog = new Frog("Buduk");
    echo "Name: " . $frog->name . "<br>";        // Output: shaun
    echo "legs: " . $frog->legs . "<br>";        // Output: 4
    echo "cold blooded: " . $frog->cold_blooded . "<br>"; // Output: no
    echo "Jump: " . $frog->jump . "<br><br>";

    $ape = new Ape("Kera Sakti");
    echo "Name: " . $ape->name . "<br>";        // Output: shaun
    echo "legs: " . $ape->legs . "<br>";        // Output: 4
    echo "cold blooded: " . $ape->cold_blooded . "<br>"; // Output: no
    echo "Yell: " . $ape->yell . "<br><br>";
?>
