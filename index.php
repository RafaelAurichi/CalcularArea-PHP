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
                  <input class="form-check-input" type="radio" name="forma" value="retangulo" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Retângulo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a base:</label>

                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-square-fill" viewBox="0 0 16 16">
                          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Digite a base" name="lado1" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a altura:</label>

                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-square-fill" viewBox="0 0 16 16">
                          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Digite a altura" name="lado2" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>

                <hr style="color: white; width: 95; height: 2px;">

                <div class="text-start form-check">
                  <input class="form-check-input" type="radio" name="forma" value="triangulo" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Triângulo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a base:</label>

                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-triangle-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Digite a base" name="base" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite a altura:</label>

                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-triangle-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Digite a altura" name="altura" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>

                <hr style="color: white; width: 95; height: 2px;">

                <div class="text-start form-check">
                  <input class="form-check-input" type="radio" name="forma" value="circulo" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Círculo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-warning bg-dark">Digite o raio:</label>

                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                          <circle cx="8" cy="8" r="8"/>
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Digite a raio" name="raio" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
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
              include "function.php";

              if (empty($_POST["forma"])){
                echo "Selecione uma forma geométrica!";
              }else{
                switch ($_POST["forma"]){
                  case "retangulo":
                    if (empty($_POST["lado1"]) || empty($_POST["lado2"])){
                      echo "Preença os valores corretamente!";
                    }else{
                      CalcularArea();
                    }
                    break;
                  
                  case "triangulo":
                    if (empty($_POST["base"]) || empty($_POST["altura"])){
                      echo "Preença os valores corretamente!";
                    }else{
                      CalcularArea();
                    }
                    break;
  
                  case "circulo":
                    if (empty($_POST["raio"])){
                      echo "Preença os valores corretamente!";
                    }else{
                      CalcularArea();
                    }
                    break;
                }
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
