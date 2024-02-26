<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORMUlÁRIO DE CONTATO</title>

  <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>



<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <h1 class="mt-5 text-center">Formulário de contato</h1>

                <form action="enviar.php" method="POST">

                    <div class="mb-3">
                        <input type="text" name="nome" placeholder="Digite seu nome" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Digite seu E-mail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <textarea name="mensagem" placeholder="Digite sua mensagem" cols="" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary ">ENVIAR</button>  
                    </div>

                </form>

            </div>
        </div>
    </div>






  <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>