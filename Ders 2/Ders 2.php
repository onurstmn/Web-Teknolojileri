<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 2</title>
</head>
<body>

<?php

/* php versiyon ve detay bilgisini gösteriri*/
//echo phpinfo()

echo "<hr>  <h4>Temel Matematiksel işlemler</h4>";
echo  "<h5> Toplama işlemi </h5>";
$sayi1 =10;
$sayi2=20;

echo "\$sayi1 + \$sayi2 = " . ($sayi1+$sayi2); 
echo "<br>";
echo "$sayi1 + $sayi2 = " . ($sayi1+$sayi2);
echo "<br>";
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 + $sayi2 = $sonuc";

echo  "<h5> Çıkarma işlemi </h5>";
echo "\$sayi1 - \$sayi2 = " . ($sayi1-$sayi2); 
echo "<br>";
echo "$sayi1 - $sayi2 = " . ($sayi1-$sayi2);
echo "<br>";
$sonuc = $sayi1 - $sayi2;
echo "$sayi1 - $sayi2 = $sonuc";

echo  "<h5> Çarpma işlemi </h5>";
echo "\$sayi1 * \$sayi2 = " . ($sayi1*$sayi2); 
echo "<br>";
echo "$sayi1 * $sayi2 = " . ($sayi1*$sayi2);
echo "<br>";
$sonuc = $sayi1 * $sayi2;
echo "$sayi1 * $sayi2 = $sonuc";

echo  "<h5> Bölme işlemi </h5>";
echo "\$sayi1 / \$sayi2 = " . ($sayi1/$sayi2); 
echo "<br>";
echo "$sayi1 / $sayi2 = " . ($sayi1/$sayi2);
echo "<br>";
$sonuc = $sayi1 / $sayi2;
echo "$sayi1 / $sayi2 = $sonuc";


echo " <h5>Üst alma işlemi (pow) </h5>";
$x = 4;
$y = "2";
//$y = (int) "2" ; // dönüşüm işlemi
echo "Değişken tipi : " . gettype($x) . "<br>";
echo "Değişken tipi : " . gettype($y) . "<br>";
echo "$x<sup>$y</sup>=" .pow($x, $y);

echo "<h5>Karekök Alma İşlemi (sqrt(x))</h5>";
$x =123;
$karekök = sqrt($x);
echo " $x sayısının  karekökü : $karekök ";


echo "<h5>Mutlak değer işlemi (abs(x))</h5>";
$x= (-12);
$mutlak = abs($x);
echo "|$x| sayısının mutlak değeri : $mutlak";


echo "<h5>Taban değişim işlemi (base _convert(x,taban1,taban2))</h5>";
echo "27 sayısının 2 lik tabandaki karşılığı : " . base_convert(27,10,2);
echo "<br>";
$sayi = 255; 
$taban = 10;
$yenitaban = 2;
$sonuc = base_convert($sayi, $taban, $yenitaban);
echo "$sayi)<sub>$taban</sub>=($sonuc)<sub>$yenitaban</sub>";

echo "<h5>Mod İşlemi (fmod(x,y))</h5>";
$x=20;
$y=4;
$mod= fmod($x , $y);
echo " $x mod $y : $mod";

/*girilen sayı teek mi çift mi */
$z=71;
echo "<br> $z sayısı :" . (fmod($z,2 )== 0 ? "Çifttir" : "Tektir");


echo "<h5>Yuvarlama İşlemleri(round(x,y))</h5>";
$x = 15.315;
$y=15.385;
echo "Bir ondalık basamak yuvarlaması sonucu" . round($x , 1) . "<br>";
echo "Bir ondalık basamak yuvarlaması sonucu" . round($y , 1 ) . "<br>";

echo "İki ondalık basamak yuvarlaması sonucu" . round($x , 2 ) . "<br>";
echo "İki ondalık basamak yuvarlaması sonucu" . round($y , 2 ) . "<br>";

echo "<h5> Yuvarlama   İşlemleri (ceil(x))</h5>";
/*Kendisinden büyük , en küçük tam sayıya yuvarlar */
$x = 15.913;
$y = 15.213;
echo "$x Ceil yuvarlaması sonucu: " . ceil($x) . "<br>";
echo "$y Ceil yuvarlaması sonucu: " . ceil($y) . "<br>";
echo "<h5>Rastgele Sayı üretme işlemi (rand(x,y))</h5>";
echo "<h5> 10-100 arasında Rastgele sayı Üretildi " . rand(10,100);

echo "<br>";
for ($i=1 ; $i<=10 ; $i++);
$rnd = rand(0,10);
echo "<br>";
echo "$i . Sayı : $rnd";


?>
    
</body>
</html>