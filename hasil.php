<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    textarea {
        width: 30vw;
        height: 10vw;
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
</style>

<body>
    <h4>Halaman hasil</h4>
    <p>Setting yang tersedia: </p>
    <textarea name="" id="">
p {
text-align: <?php echo $align ?>;
font-family: <?php echo $font ?>;
color: <?php echo $color ?>;
}
    </textarea>
    <br>
    <a href="setting.php">Ganti Setting</a>
    <p>Contoh Paragraf</p>
    <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate libero quod mollitia voluptate architecto
        adipisci earum qui totam perferendis quo fugit quam, nulla modi, tempore fugiat! Ea veniam, ipsa beatae non quos
        quidem cupiditate error aliquam! Natus asperiores corporis veritatis sint laudantium. Doloribus aliquam eligendi
        ad nobis, exercitationem inventore explicabo perferendis, illum obcaecati magnam quo amet minima quos aspernatur
        incidunt labore? Perferendis non incidunt cumque consequuntur amet ipsam odit iusto dolorem? Qui, obcaecati!
        Nihil laboriosam nesciunt, vel, aliquam odit obcaecati inventore cum voluptas, cupiditate illum dolor ducimus
        corporis eligendi quas. Vel voluptates ex qui sapiente a quibusdam? Nesciunt, doloribus illum!</p>
</body>

</html>