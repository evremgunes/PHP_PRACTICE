<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | DEĞİŞKENLER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <h2><?php echo "DEĞİŞKENLER"; ?></h2>
        <div class="alert alert-primary mt-5">
            <?php
            //tek satırlık yorum merhaba mesajı verdik
            #tek satırlık yorum merhaba mesajı verdik
            /*birden
             fazla
             satırlı
             yorumlarda
             */
            // $txt="PHP";
            // $x=5;
            // $y=7.5;
            // $age=30;
            // $Age=40;
            // echo "$txt sevdim bak seni <br>";
            // //$x=10; //programın başındaki değişkeni değitirebildim adı bu yüzden değişken
            // echo $x."<br>";
            // echo $age."<br>".$Age."<br>";
            // echo "toplam= ".$age+$x;


            // yerel, global, statik değişkenler vardır

            // $x=7; //global variable
            // function Test(){
            //     echo "<p>x değişkenine fonksiyon içinden ulaştım:$x</p>";//global değişkene fonksiyon içinden ulaşamadık x görünmedi
            // }
            // Test(); //run function
            // echo "<p>x değişkenine fonksiyon dışından ulaştım:$x</p>";

            // function Test(){
            //     $x=15;//local variable/ yerel değişken
            //     echo "<p>x değişkenine fonksiyon içinden ulaştım:$x</p>";
            // }
            // Test(); //run function
            // echo "<p>x değişkenine fonksiyon dışından ulaştım:$x</p>"; //local variablea dışardan ulaşamam sadece fonksiyonun içinde görülür ve ulaşılır ona

            // $x=5; //global variable
            // $y=15;//global variable
            // function Test(){
            //     global $x, $y;//global variable ı fonksiyon içinden kullanabilmek için bunu yaptık
            //     $y=$x+$y;
            // }
            // Test(); //run function
            // echo $y;
            $x=5;//global variable
            $y=15;//global variable
            function Test(){
               static $z=45; // normalde yerel değişkeni fonksiyon bittiği anda unutuyor ama static yaptığımızda diyoruz ki unutma bu değişkeni aklında tut kullanıcaz. 
               echo $z;
               $z++;
            }
            Test(); //run function
            echo "<br>";
            Test(); //run function
            echo "<br>";
            Test(); //run function

            /*
            global değişken fonksiyon dışında olan değişkendir fonksiyonun içinde normalde ona ulaşamayız ama fonk. içine global ön ekiyle çağırısak değişkenlerimizi onlara erişebiliriz
            local(yerel) değişkende ise fonk içinde urettiğimiz değişkendir fonk dışında bunu kullanamayız
            Normalde fonk bittiği anda yerel değişkeni unutur program ama başına static ön ekini getirirsek programa bu local değişkeni unutma onu kullanıcaz deriz. 
            
            
            */
            ?>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>