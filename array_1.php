<?php
$outfits = array("kode_barang"=>["1","2","3"],
                "nama_barang"=>["crewnek","jaket","hoodie"],
                "Harga"=>["30k","40k","55k"]);
    for ($i=0; $i < count($outfits["kode_barang"]); $i++) { 
        echo "|".$outfits["kode_barang"][$i];
        for ($j=$i; $j < count($outfits["nama_barang"]); $j+=3) { 
            // echo "\n";
        echo "|".$outfits["nama_barang"][$j];
        for ($k=$j; $k < count($outfits["Harga"]); $k+=3) { 
            echo "|".$outfits["Harga"][$k];
            echo "\n";
            }
        }
    }
?>