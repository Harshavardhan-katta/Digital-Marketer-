<!DOCTYPE html>
<html>
<head>
    <title>Smart Template Generator</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #001f3f, #0074D9);
            color: white;
            text-align: center;
            padding: 40px;
        }
        form {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 12px;
            display: inline-block;
            width: 90%;
            max-width: 600px;
        }
        input, textarea {
            margin: 10px;
            padding: 10px;
            border-radius: 6px;
            border: none;
            width: 90%;
        }
        input[type="file"], input[type="color"] {
            width: 60%;
        }
        input[type="submit"] {
            background: #00ccff;
            color: white;
            cursor: pointer;
            width: 50%;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background: #0099cc;
        }
    </style>
</head>
<body>
    <h1>Smart Template Generator</h1>
    <p>Create a custom landing page instantly with your brand details ✨</p>

    <form action="generate.php" method="post" enctype="multipart/form-data">
        <input type="text" name="business_name" placeholder="Business Name" required><br>
        <input type="text" name="headline" placeholder="Headline / Tagline" required><br>
        <textarea name="about" placeholder="About Your Business (short description)" rows="3" required></textarea><br>

        <h3>Our Services</h3>
        <input type="text" name="service1" placeholder="Service 1" required><br>
        <input type="text" name="service2" placeholder="Service 2" required><br>
        <input type="text" name="service3" placeholder="Service 3" required><br>

        <input type="email" name="email" placeholder="Contact Email" required><br>
        <label>Theme Color:</label><br>
        <input type="color" name="theme_color" value="#0074D9"><br><br>

        <label>Upload Logo:</label><br>
        <input type="file" name="logo" accept="image/*" required><br><br>

        <input type="submit" value="Generate Template">
    </form>
</body>
</html>
