<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("textAlign", $_POST['align'], time() + 3600);
    setcookie("fontFamily", $_POST['font'], time() + 3600);
    setcookie("fontColor", $_POST['pickColor'], time() + 3600);
    header("Location: index.php");
    exit();
}

$align = isset($_COOKIE["textAlign"]) ? $_COOKIE["textAlign"] : "";
$font = isset($_COOKIE["fontFamily"]) ? $_COOKIE["fontFamily"] : "";
$color = isset($_COOKIE["fontColor"]) ? $_COOKIE["fontColor"] : "#000000";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Setting</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            padding: 0.5vw 2vw;
            border-radius: 0.5vw;
        }
    </style>
</head>

<body>
    <form method="POST" action="">
        <p><strong>Setting</strong></p>
        <br>
        <p>Text-align:
            <select id="align" name="align">
                <option value="--Pilih Text Align--" <?php echo $align == "" ? " selected" : "" ?>> --Pilih Text Align-- </option>
                <option value="Left" <?php echo $align == "Left" ? " selected" : "" ?>>Left</option>
                <option value="Right" <?php echo $align == "Right" ? " selected" : "" ?>>Right</option>
                <option value="Center" <?php echo $align == "Center" ? " selected" : "" ?>>Center</option>
                <option value="Justify" <?php echo $align == "Justify" ? " selected" : "" ?>>Justify</option>
            </select>
        </p>
        <p>Font-family:
            <select id="font" name="font">
            <option value="--Pilih Font Family--" <?php echo $align == "" ? " selected" : "" ?>> --Pilih Font Family-- </option>
                <option value="Arial" <?php echo $font == "Arial" ? "selected" : "" ?>>Arial</option>
                <option value="Tahoma" <?php echo $font == "Tahoma" ? "selected" : "" ?>>Tahoma</option>
                <option value="Calibri" <?php echo $font == "Calibri" ? "selected" : "" ?>>Calibri</option>
            </select>
        </p>
        <p>Color:
            <input type="color" name="pickColor" value="<?php echo htmlspecialchars($color) ?>">
        </p>
        <p>
            <button class="btn">Simpan</button>
        </p>
    </form>
</body>

</html>