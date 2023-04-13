<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calcular Áreas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<!-- Eder Bruno Almeida Teodoro - RM 93254 e Rafael Aurichi - RM 96169 -->

<body class="text-warning bg-dark">
  <div  class="text-bg-dark p-3">
    <h2 class="text-center m-5" >Calcular Áreas</h2>
    <div >
      <div class="container text-center">
        <div class="row align-items-center justify-content-center">
          <div class="col-6 ">

            <form method="POST">

                <div class="text-start form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Retângulo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a base:</label>
                    <input type="text" class="form-control" placeholder="Digite um número" name="numeroUm">
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a altura:</label>
                    <input type="text" class="form-control" placeholder="Digite outro número" name="numeroDois">
                  </div>
                </div>

                <hr style="color: white; width: 95; height: 2px;">

                <div class="text-start form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Triângulo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a base:</label>
                    <input type="text" class="form-control" placeholder="Digite um número" name="numeroUm">
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a altura:</label>
                    <input type="text" class="form-control" placeholder="Digite outro número" name="numeroDois">
                  </div>
                </div>

                <hr style="color: white; width: 95; height: 2px;">

                <div class="text-start form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Círculo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a base:</label>
                    <input type="text" class="form-control" placeholder="Digite um número" name="numeroUm">
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a altura:</label>
                    <input type="text" class="form-control" placeholder="Digite outro número" name="numeroDois">
                  </div>
                </div>


              <div class="mb-4">
                <button type="submit" class="btn btn-outline-warning">Calcule</button>
              </div>
              
            </form>
          </div>
          <h1>Resultado</h1>

          <div class="text-warning">

            <?php
              include "./function.php";

                if (empty($_POST["numeroUm"]) || empty($_POST["numeroDois"])) {
                    echo "Selecione dois números válidos!";
                }elseif (empty($_POST["operacao"])){
                    echo "Selecione uma operação!";
                }else{
                    calcular();
                }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
