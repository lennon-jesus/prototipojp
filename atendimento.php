<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=logout" />
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="bs-stepper.min.css">
    <title>Atendimento - Hotel Winner</title>
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="bs-stepper py-3 ">
        <div class="bs-stepper-header" id="stepper1" role="tablist">
            <!-- your steps here -->
            <div class="step" data-target="#logins-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                <span class="bs-stepper-circle">1</span>
                <span class="bs-stepper-label">Cadastro</span>
            </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#information-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                <span class="bs-stepper-circle">2</span>
                <span class="bs-stepper-label">Agendamento</span>
            </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#information-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label">Resumo</span>
            </button>
            </div>
        </div>
        <div class="bs-stepper-content">

            <div class="card" style="width: 50rem;">
                <div class="card-body" style="width: 18rem;  float: left;">
                    <h5 class="card-title">Card title</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nomeInput" class="form-label">Nome completo:</label>
                            <input type="text" class="form-control" id="nomeInput">
                        </div>
                        <div class="mb-3">
                            <label for="nascInput" class="form-label">Data de nascimento:</label>
                            <input type="date" class="form-control" id="nascInput">
                        </div>
                        <div class="mb-3">
                            <label for="fiadorInput" class="form-label">Fiador:</label>
                            <input type="text" class="form-control" id="fiadorInput">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>




        </div>
    </div>



  </body>
</html>