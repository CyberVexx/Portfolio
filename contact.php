<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'src/components/nav.php' ?>

    <section class="cyberpunk">
        <form action="post">
            <div class="cyberpunk">
                <label for="text">Text</label>
                <input type="text">
            </div>
            <div class="cyberpunk">
                <label for="date">Date</label>
                <input type="date">
            </div>
        </form>
    </section>
</body>
</html>