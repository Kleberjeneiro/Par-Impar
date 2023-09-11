<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Checar se o número e par ou impar</title>
    </head>

    <body>

        <h1></h1>

        <fieldset>

            <legend>Par ou impar</legend>
            <div class="container">

                <form action="checar.php" method="POST">

                    <label for="numero">Número</label><br>
                    <input type="number" id="numero" name="numero" placeholder="Digite qualquer número" required>

                    <input type="submit" value="Consultar">


                </form>
            </div>
             

        </fieldset>
        
    </body>
    



</html>