<?php
$name = "Michele"; // variabile di tipo stringa
$age = 24; // variabile di tipo intero
?>

<html>

<head>
    <?php include 'includes/head.php'; ?>
    <title>Home</title>
</head>

<body>
    <!-- include navbar -->
    <?php include 'components/navbar.php'; ?>

    <!-- title -->
    <h1 class="title">My Site PHP</h1>

    <?php
    echo $name . " and I'm " . $age . " years old.</p>";
    ?>

    <!-- include footer -->
    <?php include 'components/footer.php'; ?>
</body>

<script>
    // console.log("Welcome to my website!", test);


    if (true) {
        var test = "test";

        console.log("This is a test message.", test);
    }
</script>

</html>