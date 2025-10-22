<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testpage</title>
    <link rel="stylesheet" href="src/assets/style.css">
</head>

<body>
    <?php include 'src/components/nav.php'; ?>

    <main class="main-content">
        <div class="container">
            <div id="profile" class="box">
                <img class="pfp" src="src/images/cman.jpg" alt="pfp">
                <h1 class="profile-name">Arne_Soyez</h1>
                <button class="btn">Contact</button>
            </div>
            <div id="description-text" class="box">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, eius alias rem, voluptatem ipsa, exercitationem minima et sint delectus maxime provident autem temporibus suscipit voluptates reiciendis soluta possimus quos dignissimos?</div>
        </div>
    </main>

    <?php include 'src/components/footer.php' ?>
</body>

</html>