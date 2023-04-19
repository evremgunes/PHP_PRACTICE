<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <div class="alert alert-primary mt-5">
            <?php
            /*
            string veri türü parantez içinde belirtilendir
            Integer veri türü +-2.147.483.648 arasındaki tam sayıları alabilen veri türüdür
            Float veri türü ondalık sayı tipidir virgüllü
            Boolean true false veri türüdür
            Array tek bir değişkende birden fazla veri saklar yani dizi sıralama 0'dan başlar
            Object nesne değişken türü verilerin işlenmesiyle ilgili verileri ve bilgileri depolayan bir veri türüdür
            null veri tipi kendisine atanmış değeri olmayan bir değişkendir
            */
        //    $txt="Hello PHP";//string
        //    $txt2='7'; //string
        // //    echo $txt."<br>".$txt2;
        //    $num=6574;//integer
        //    echo var_dump($num); // bu kodla değişkenin tipini öğrenebiliriz.
        //    echo var_dump($txt2);
        //    $num2=62.36; // float data type
        //    echo var_dump($num2);
        //    $x=true; //boolean data type
        //    $y=false;
        //    echo var_dump($x);
        //    $languages=array("html","css","javascript","php","nodejs",780);// array data type
        //    echo var_dump($languages);
        //    echo var_dump($languages[3]); // burada index sayısındaki veriyi istedik
        //    echo $languages[3]; //bu şekildede isteyebiliriz

            // class Car{ //object data type
            //     function __construct()
            //     {
            //         $this->model="Q5";
            //     }
            // }
            // $takeCar=new Car();
            // echo $takeCar->model;

            $z=null;//$z; şeklindede null değer atayabiliriz
            echo var_dump($z);

           
            ?>  
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>