<!DOCTYPE html>
<html lang="en">
<head>
    <!-- css bootstrap -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class=" bg-primary-subtle">
        <div class="container text-center p-3">
            <h1><em class="border-bottom border-dark">Form PHP</em></h1>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="ricevo.php" method="get">
                <div class="m-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="paragrafo" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="m-3">
                    <label for="exampleFormControlInput1" class="form-label">Parola Censurata</label>
                    <input type="text" name="censura" class="form-control" id="exampleFormControlInput1">
                </div>
                <button type="submit" class="btn btn-outline-danger m-3">Invio al server</button>
            </form>
        </div>
    </main>
    
    <!-- <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>