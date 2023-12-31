



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<header>
    <!-- place navbar here -->
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">Fruitsoort
                <form method="post" action="">
                    <input class="text" name="inputFruit" type="text">
                    <input type="submit" name="send" value="toevoegen">
                </form>
            </div>
            <br>
            <div class="col-md-12">-----------------------</div>
            <div class="col-md-12">
                <form method="post" action="">
                    <input type="submit" name="sorteer" value="sorteer">
                    <input type="submit" name="schudden" value="schudden">
                </form>
            </div>
            <br>
            <div class="col-md-12">-----------------------</div>
        </div>
    </div>
</main>
<footer>
    <!-- place footer here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>

<?php


SESSION_START();
if (!isset($_SESSION['fruits'])) {
    $_SESSION['fruits'] = array();
}

if (isset($_POST["send"])){
    $_SESSION['fruits'][] = $_POST["inputFruit"];
    foreach ($_SESSION['fruits'] as $fruit){
        echo "-$fruit <br>";
    }
}

if (isset($_POST["schudden"])){
    shuffle($_SESSION['fruits']);

    foreach ($_SESSION['fruits'] as $fruit){
        echo "-$fruit <br>";}
}

if (isset($_POST['sorteer'])){
    sort($_SESSION['fruits']);

    foreach ($_SESSION['fruits'] as $fruit){
        echo "-$fruit <br>";}
}
?>