<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- css -->
    <style>
        #mie-verifiche{
            border: 1px solid red;
        }
    </style>

    <!-- includo funzioni -->
    <?php include "functions.php"; ?>

    <!-- open session php -->
    <?php session_start() ?>

    <title>Password Generator</title>
</head>
<body>


<div class="container mt-5 p-5">
    <div class="container text-center">
        <h1>Password Generator</h1>
        <h2>Generate a new password</h2>

        <!-- mie verifiche -->
        <div class="container d-flex justify-content-between mt-4" id="mie-verifiche">
            <div>
                <?php echo "guardo repeat:"; ?>
                <br />
                <?php var_dump($repeat); ?>
            </div>
            <div>
                <?php echo "guardo letters:"; ?>
                <br />
                <?php var_dump($letters); ?>
            </div>
            <div>
                <?php echo "guardo numbers:"; ?>
                <br />
                <?php var_dump($numbers); ?>
            </div>
            <div>
                <?php echo "guardo symbols:"; ?>
                <br />
                <?php var_dump($symbols); ?>
            </div>
        </div>
        <!-- mie verifiche -->

    </div>
        <div class="container text-center mt-5 mb-5">
            <?php
                // echo $passLength == null
                // ? "<h5>Nessun parametro valido inserito</h5>"
                // : "<h5>" . generaPassword($passLength) . "</h5>";
                if ($passLength == null 
                    || (!$letters && !$numbers && !$symbols)) {
                    echo "<h5>Inserisci parametri validi</h5>";
                }else{
                    $_SESSION["password"] = generaPassword($passLength, $letters, $numbers, $symbols, $repeat);
                    header('Location: password.php');
                }

            ?>
        </div>
    <div class="container">
        <form method="get">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="passLength">Lunghezza password:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="passLength" id="passLength" placeholder="inserisci lunghezza password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="repeat">Consenti ripetizioni:</label>
                    </div>
                    <div class="col-md-6">

                        <!-- si -->
                        <div>
                            <input type="radio" id="repeatY" name="repeat" value="true" checked>
                            <label for="repeatY">si</label>
                        </div>

                        <!-- no -->
                        <div class="mb-4">
                            <input type="radio" id="repeatN" name="repeat" value="false">
                            <label for="repeatN">no</label>
                        </div>

                        <!-- lettere, numeri, simboli -->
                        <div>
                            <input type="checkbox" id="lettersR" name="lettersR" value="true">
                            <label for="lettersR">Lettere</label>
                        </div>
                        <div>
                            <input type="checkbox" id="numbersR" name="numbersR" value="true">
                            <label for="numbersR">Numeri</label>
                        </div>
                        <div>
                            <input type="checkbox" id="symbolsR" name="symbolsR" value="true">
                            <label for="symbolsR">Simboli</label>
                        </div>
                    </div>
                </div>

                <!-- bottoni -->
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-block">Invia</button>
                        <button type="reset" class="btn btn-secondary btn-block">Annulla</button>
                    </div>
    
            </div>
            </div>
        </form>
    </div>
    
</body>
</html>