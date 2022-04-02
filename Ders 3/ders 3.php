<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 3</title>
</head>
<body>
 
<?php


$not = rand (10 , 100);
if ($not >=50) {
echo " geçtiniz - notunuz : $not ";
} else {

    echo " kaldınız - notunuz : $not";
};

echo "<h3> sık kullanılan string fonksiyonlar</h3>";

$yazi= " Aydın Adnan Menderes Üniversitesi";
echo gettype ($yazi);
echo "<br> değişken içeriği : $yazi " . gettype($yazi) . ")" ;

//İçeriğin Büyük Harfe Dönüştürülmesi

echo "<br> \$yazi içeriğinin büyük harfle yazılması :" .$buyuk_yazi= strtoupper($yazi);
echo "<br> \$yazi içeriğinin büyük harfle yazılması :" .$buyuk_yazi= mb_strtoupper($yazi);


// içeriğin küçük harfe dönüştürülmesi

echo "<br> \$yazi içeriğinin küçük harfle yazılması " . $kucuk_yazi =strtolower($buyuk_yazi);
echo "<br> \$yazi içeriğinin küçük harfle yazılması " . $kucuk_yazi =mb_strtolower($buyuk_yazi);

// içeriğin ilk harfinin büyük harfe dönüştürülmesi

echo "<br> \$yazi içeriğinin ilk harfinin küçük harfle yazılması: " . $ilk_yazi=ucfirst($kucuk_yazi);

//içeriğin tüm kelimelerinin ilk harfinin , büyük harfe dönüştürülmesi   
echo "<br> \$yazi Tüm kelimelerinin ilk harfinin , büyük harfle yazılması: " . $kelime =ucwords($kucuk_yazi); 

//içeriğin harf sayısı :
echo "<br> \$yazi içerisindeki harf sayısı: " . strlen($yazi);

//Ascii Char Karşılığı

echo "<br> Karakter Karşılığı : " . chr (109);
echo "<br> Karakter Karşılığı : " . chr (64);
echo "Ascii Karakterleri : ";
for ($i =32 ; $i <=127 ; $i++); {
    echo chr($i) . "-";
}

//Metnin parçalanarak diziye dönüştürülmesi

$dizi = explode (" " , $yazi);
echo "<br>";
print_r($dizi);

//uygulama paragraftaki kelime ve cümle sayılarını alt alta yazdırın .

$metin="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium vel sed quo expedita 
aliquid quae, provident odio eius minus qui non quam consequuntur, sit at inventore. Unde cum suscipit dignissimos.";


$kelimelerdizisi=explode(" " , $metin);
$cumlelerdizisi=explode ("." , $metin);

echo "<br>Kelime Sayısı: " . count($kelimelerdizisi);
echo "<br> Cümle Sayısı: " . count($cumlelerdizisi);

/*uygulama
 veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.

*/

$tarih = "2021-12-25";
$yenitarih = explode("-" , $tarih);
echo"$yenitarih[2]-$yenitarih[1]-$yenitarih[0]";

//Dizinin metne dönüştürülmesi (implode)
$aylar = ["Ocak" , "şubat" , "mart" , "nisan" , "mayıs"]; 
$aylarString = explode(" " , $yazi);
echo "<br>String: $aylarString";

/*verilen bir metnin belirli sayı kadar ayrılarak dizi içeriğine aktarılması. str_split()
eğer sayı belirtilmezse metni harf harf böler.
*/

$iban="TR0010002000300040005000";

$ibanyeni =str_split($iban , 4);
print_r($ibanyeni);

foreach($ibanyeni as $parca);
echo "$parca";














?>

</body>
</html>