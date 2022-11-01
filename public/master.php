<!doctype html>
<html lang="pt-br">

<head>
    <title>Card Dog</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Nanum+Gothic&family=Open+Sans&family=Roboto&family=Trispace&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= asset("assets/css/styles.css") ?>">

</head>

<body>
    <header class="text-center mt-4">
        <h1>Card Dog</h1>
    </header>
    <main class="container pt-5">

        <?= $v->section("content"); ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= asset("assets/js/scripts.js") ?>"></script>
</body>

</html>