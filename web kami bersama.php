<?php
$koneksi= new PDO("mysql:host=localhost;dbname=menumakanan","root","");
if ($koneksi){
    echo 'berhasil';    
} 
?>
<!DOCTYPE html>
<html>
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Snack Web</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">


</head>

<body>
    <header>
        <a href="#" class="logo">Snack</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Menu">Menu</a></li>
            <li><a href="#Service">Service</a></li>
            <li><a href="#Contacs">Contacs</a></li>
        </ul>
    </header>



    <!-------home start------->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Full Website</h1>
            <h2>Food The <br>Most Precious Things</br>
            </h2>
            <a href="#" class="btn">Today's Menu</a>
        </div>

        <div class="home-jpg">
            <img src="12345.jpg">
        </div>
    </section>

    <!-------about start------->
    <section class="about" id="about">
        <div class="about-png">
            <img src="kentang-removebg-preview.png">
        </div>

        <div class="about-text">
            <span>Junk food</span>
            <h2>Sejarah singkat <br>Junk food</h2>
            <p>Awalnya mereka menjajakan sandwich dengan isi sosis. Namun, suatu saat mereka kehabisan sosis, akhirnya mereka mengganti dengan daging sapi cincang sebagai isian untuk rotinya.</p>
            <a href="#" class="btn">TODAY'S Menu</a>
        </div>
        
    </section>

    <!-------menu start------->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Menu</span>
            <h2>enak dan bervitamin</h2>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <img src="sing.png">
                </div>
                <h2>chicken burger</h2>
                <span>15.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <img src="sing.png">
                </div>
                <h2>special beef burger</h2>
                <span>17.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <img src="sing.png">
                </div>
                <h2>french fries</h2>
                <span>10.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <img src="sing.png">
                </div>
                <h2>coca-cola</h2>
                <span>8.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

    </section>
</body>

</html>