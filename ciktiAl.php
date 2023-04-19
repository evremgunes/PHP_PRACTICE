<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çıktı Alma Komutları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <div class="alert alert-primary mt-5">
            <?php
            echo "<h2>Php is fun!</h2>";
            echo "I'm about to learn PHP programming <br>";
            echo 'bu ',"string ","birden fazla ","parametre ","alabilir ";

            print"<h2>Php is fun!</h2>";
            print "I'm about to learn PHP programming <br>";
            //print 'bu ',"string ","birden fazla ","parametre ","alabilir "; // print'de böyle ayrı ayrı yazamazsın virgülle

            $txt="Learn to PHP";
            $txt2="so fun";
            $x=5;
            $y=2;
            echo "<br>I told you ".$txt." ".$txt2."<br>"; //çıktılarla değişkenleri kullanacaksak çıktılar ve değişkenleri nokta ile birleştirmek gerekiyor.
            echo $x+$y;
            ?>  
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>