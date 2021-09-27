<?php 

include "Animal.php";

Class serigala{var $Jacob;
function Bisa_berlari_dengan_cepat (){//$Jacob-> Bisa_berlari_dengan_cepat;
}
function bersuara (){//$Jacob-> Aauuuuu Aauuuuu;
}
} 

$Jacob=new serigala;
$Jacob->jumlah_kaki=4;
echo "Jacob adalah serigala <br>";
echo"punya kaki sebanyak:".$Jacob-> jumlah_kaki."<br>";
echo " Bisa berlari dengan cepat". "<br>";
echo"Suaranya: Aauuuuu Aauuuuu". $Jacob-> bersuara ()."<br>";
echo "<hr>";

Class kambing {var $Bing;
function Bisa_berlari_dan_melompat(){//$Bing->Bisa_berlari_dan_melompat;
}
function bersuara (){//$Bing-> embeeekk embeeekk;
}
} 
$Bing=new kambing;
$Bing->jumlah_kaki=4;
echo "Bing adalah kambing <br>";
echo"punya kaki sebanyak:".$Bing-> jumlah_kaki."<br>";
echo "Bisa berlari dan melompat"."<br>";
echo"Suaranya: embeeekk embeeekk". $Bing-> bersuara ()."<br>";
echo "<hr>";

Class ayam{var $Yayam;
function Bisa_bertelur(){//$Yayam->Bisa_bertelur;
}
function bersuara (){//$Yayam->kukuruyuuuuk;
}
} 
$Yayam=new ayam;
$Yayam->jumlah_kaki=2;
echo "Yayam adalah ayam <br>";
echo"punya kaki sebanyak:".$Yayam-> jumlah_kaki."<br>";
echo "Bisa bertelur"."<br>";
echo"Suaranya: kukuruyuuuuk". $Yayam-> bersuara ()."<br>";
echo "<hr>";

Class bebek{var $Beki;
function Bisa_berenang(){//$Beki-> Bisa_berenang;
}
function bersuara (){//$Beki-> kwek kwek;
}
} 

$Beki=new bebek;
$Beki->jumlah_kaki=2;
echo "Beki adalah bebek <br>";
echo "punya kaki sebanyak:".$Beki-> jumlah_kaki."<br>";
echo "bisa berenang". "<br>";
echo "Suaranya: kwek kwek". $Beki-> bersuara ()."<br>";
echo "<hr>";
 ?>