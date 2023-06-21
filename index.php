<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <?php include "functions.php"; ?>

    <title>Password Generator</title>
</head>
<body>


<div class="container mt-5 p-5">
    <div class="container text-center">
        <h1>Password Generator</h1>
        <h2>Generate a new password</h2>
    </div>
        <div class="container text-center mt-5 mb-5">
            <?php
                echo $passLength == null
                ? "<h5>Nessun parametro valido inserito</h5>"
                : "<h5>" . generaPassword($passLength) . "</h5>";
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
                            <input type="radio" id="repeatY" name="repeat" value="true" >
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
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-block">Invia</button>
                        <button type="submit" class="btn btn-secondary btn-block">Annulla</button>
                    </div>
    
            </div>
            </div>
        </form>
    </div>
    
</body>
</html>