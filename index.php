<html>
<head>
    <title>Music Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            Header information
        </header>

        <div class="album py-5 bg-light">
            <div class="row">
                Content of this project
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<?php


for ($i = 0; $i < 10; $i++) {
    echo "Waarde: $i<br>";
}

for ($i = 0; $i < 10; $i++) {
    echo "Loop nummer: $i<br>";
    $kwadraat = $i * $i;
    echo "Kwadraat: $kwadraat<br>";
}

$array = ["a" => 1, "b" => 2, "c" => 3];
foreach ($array as $key => $item) {
    echo "Sleutel: $key, Waarde: $item<br>";
}

foreach ($array as $item) {
    echo "Item: $item<br>";
}
?>

</body>
</html>