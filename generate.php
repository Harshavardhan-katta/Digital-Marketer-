<?php
error_reporting(0);
ini_set('display_errors', 0);

$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$logo = $_FILES['logo']['name'];
$target = $uploadDir . basename($logo);
move_uploaded_file($_FILES['logo']['tmp_name'], $target);

$business = htmlspecialchars($_POST['business_name']);
$headline = htmlspecialchars($_POST['headline']);
$about = htmlspecialchars($_POST['about']);
$service1 = htmlspecialchars($_POST['service1']);
$service2 = htmlspecialchars($_POST['service2']);
$service3 = htmlspecialchars($_POST['service3']);
$email = htmlspecialchars($_POST['email']);
$theme = htmlspecialchars($_POST['theme_color']);

$template = "
<!DOCTYPE html>
<html>
<head>
    <title>$business</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, $theme, #001f3f);
            color: white;
            text-align: center;
            padding: 50px;
        }
        img {
            width: 150px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
        }
        h1 { font-size: 2.5rem; margin-top: 20px; }
        h2 { margin-top: 40px; font-size: 1.8rem; }
        p { font-size: 1.1rem; max-width: 600px; margin: 10px auto; opacity: 0.9; }
        .services {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .service {
            background: rgba(255,255,255,0.1);
            padding: 15px 25px;
            border-radius: 10px;
            width: 200px;
            box-shadow: 0 0 10px rgba(255,255,255,0.1);
        }
        a.button {
            display: inline-block;
            background: white;
            color: $theme;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 30px;
            transition: 0.3s;
        }
        a.button:hover { background: #f0f0f0; }
    </style>
</head>
<body>
    <img src='uploads/$logo' alt='Logo'>
    <h1>$business</h1>
    <p>$headline</p>

    <h2>About Us</h2>
    <p>$about</p>

    <h2>Our Services</h2>
    <div class='services'>
        <div class='service'>$service1</div>
        <div class='service'>$service2</div>
        <div class='service'>$service3</div>
    </div>

    <a class='button' href='mailto:$email'>Contact Us</a>
    <?php
<body>
    <a href='Intrested.html' style='
        position: absolute;
        top: 24px;
        right: 32px;
        background: #fff;
        color: $theme;
        padding: 10px 22px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: background 0.2s;
        z-index: 10;
    '>Interested</a>
</body>
</html>
";

echo $template;
?>
