<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Sans+Narrow:wght@400;700&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap');

        html{
            height: 100%;
        }
        
        
        body{
            margin: 0;
            padding: 0;
            width: 100vw;
            min-height: 100%;
            overflow-x: hidden;
            font-family: "PT Sans Narrow", sans-serif;
        }
        
        <?php
            $align = isset($_COOKIE["textAlign"]) ? $_COOKIE["textAlign"] : "";
            $font = isset($_COOKIE["fontFamily"]) ? $_COOKIE["fontFamily"] : "";
            $color = isset($_COOKIE["fontColor"]) ? $_COOKIE["fontColor"] : "#000000";
            echo ".par {
                    text-align: $align;
                    font-family: $font;
                    color: $color;
                }"
        ?>

        .judul{
            position: relative;
            z-index: 2;

            margin-top: 2%;
            margin-bottom: 0;
            font-family: "Pattaya", sans-serif;
            font-size: 3vw;
            text-align: center;
        }

        
        @media screen and (min-width:965px){
            .container {
                position: relative;
                z-index: 2;
    
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
            }
        }

        @media screen and (max-width:965px){
            .container {
                position: relative;
                z-index: 2;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }   
        }

        .bg{
            position: absolute;
            z-index: 0;
            top: 0;
            
            width: 100vw;
            height: 100vh;
        }

        .tabel{
            position: absolute;
            z-index: 2;
            bottom: 0;
            right: -10%;
            width: 40%;
        }

        @media screen and (min-width:965px){
            .kiri{
                position: relative;
                width: 20%;
            }
        }
    
        @media screen and (max-width:965px){
            .kiri{
                position: relative;
            }
        }

        .text-papan{
            position: absolute;
            top: 7%;
            left: 10%;
            white: 100%;
            color: white;
            font-size: 1.3vw;
            width: 80%;
        }
        
        .text-papan>p{
            font-weight: bold;
        }

        .text-papan>textarea{
            width: 100%;
            height: 30vh;
        }

        .text-papan>a{
            color: white;
            font-weight: bold;
            font-size: 1vw;
        }

        .kanan{
            position: relative;
        }

        .text-papan-utama{
            position: absolute;
            top: 0;

            padding: 7%;
        }
        
        .text-papan-utama>p:nth-child(1){
            color:white;
            font-weight: bold;
        }
        
        .text-papan-utama>p:nth-child(2){
            font-size: 1.2vw;
        }

        .tambahan{
            width: 20%;
        }

        @media screen and (max-width:1125px) {
            .tambahan{
                width: 0%;
            }   
        }
    </style>
</head>
<body>
    <h1 class="judul">Halaman hasil</h1>
    <div class="container">
        <div class="kiri">
            <img src="Asset/papan.png" class="papan">
            <div class="text-papan">
                <p>Setting yang tersedia: </p>
                <textarea>
p {
    text-align: <?php echo $align ?>;
    font-family: <?php echo $font ?>;
    color: <?php echo $color ?>;
}
                </textarea>
                <br>
                <a href="setting.php">Ganti Setting</a>
            </div>
        </div>
        <div class="kanan">
            <img src="Asset/papan-utama.png" class="papan-utama">
            <div class="text-papan-utama">
                <p>Contoh Paragraf</p>
                <p class="par">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum amet explicabo tempora asperiores at accusamus soluta ducimus obcaecati corporis quos, dolorem numquam, vero pariatur vitae facere aperiam quas? Eius quidem earum sit, expedita quasi consequuntur suscipit nam at eum magni obcaecati qui officia, ut amet asperiores esse repudiandae, itaque nulla dignissimos? Magni harum vitae animi rem praesentium? Debitis magnam natus veritatis laboriosam repellat itaque odit eius, non cumque! Dolorem, cupiditate iste placeat magni necessitatibus incidunt debitis tempore nobis itaque molestias accusamus repellendus recusandae sit, voluptatibus voluptates quisquam molestiae sunt! Placeat qui tempora non ad, pariatur laborum sint, quia reprehenderit expedita veritatis voluptates harum explicabo corrupti cumque voluptate dolorum sequi vero ab eveniet optio quis cupiditate iure quod. Tenetur, ut vero?
                </p>
            </div>
        </div>
        <div class="tambahan"></div>
    </div>
    <img src="Asset/bg.png" class="bg" id="bg">
    <img src="Asset/tabel.png" class="tabel">
</body>
</html>