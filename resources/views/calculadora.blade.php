<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text.css">
        #btns{
            margin-left: 100px;
        }
    </style>
    <title>Calculadora Simple</title>
  </head>
  <body>
    <div class="container">    
        <h1>Suma</h1>
        <form class="px-4 py-3" action="{{ route('result.suma') }}" method="post">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb1">Introduzca el primer numero</label>
                    <input class="form-control mr-sm-2" type="number" name="numb1" id="numb1" placeholder="Intro un numero">
                </div>
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb2">Introduzca el segundo numero</label>
                    <input class="form-control" type="number" name="numb2" id="numb2" placeholder="Intro un numero">
                </div>
            </div>
            <br>
            <div id="btns">                
                    <b>SUMAR</b>
                    <button class="btn btn-outline-success btn-lg" type="submit" name="suma"><b>+</b></button>
            </div>
        </form><br><br>
        <h1>Resta</h1>
        <form class="px-4 py-3" action="{{ route('result.resta') }}" method="post">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb1">Introduzca el primer numero</label>
                    <input class="form-control mr-sm-2" type="number" name="numb1" id="numb1" placeholder="Intro un numero">
                </div>
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb2">Introduzca el segundo numero</label>
                    <input class="form-control" type="number" name="numb2" id="numb2" placeholder="Intro un numero">
                </div>
            </div>
            <br>
            <div id="btns">
                <b>RESTAR</b>                
                <button class="btn btn-outline-danger btn-lg" type="submit" name="resta"><b>-</b></button>                    
            </div>
        </form><br><br>
        <h1>Multiplicacion</h1>
        <form class="px-4 py-3" action="{{ route('result.multip') }}" method="post">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb1">Introduzca el primer numero</label>
                    <input class="form-control mr-sm-2" type="number" name="numb1" id="numb1" placeholder="Intro un numero">
                </div>
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb2">Introduzca el segundo numero</label>
                    <input class="form-control" type="number" name="numb2" id="numb2" placeholder="Intro un numero">
                </div>
            </div>
            <br>
            <div id="btns">
                <b>MULTIPLICAR</b>                
                <button class="btn btn-outline-success btn-lg" type="submit"name="multip"><b>*</b></button>
            </div>
        </form><br><br>
        <h1>Division</h1>
        <form class="px-4 py-3" action="{{ route('result.div') }}" method="post">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb1">Introduzca el numero para dividendo</label>
                    <input class="form-control mr-sm-2" type="number" name="numb1" id="numb1" placeholder="Intro un numero">
                </div>
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb2">Introduzca el numero para el divisor</label>
                    <input class="form-control" type="number" name="numb2" id="numb2" placeholder="Intro un numero">
                </div>
            </div>
            <br>
            <div id="btns">
                <b>DIVIDIR</b>                
                <button class="btn btn-outline-warning btn-lg" type="submit"><b>/</b></button>
            </div>
        </form><br><br>
        <h1>Potenciacion</h1>
        <form class="px-4 py-3" action="{{ route('result.pow') }}" method="post">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb1">Introduzca numero de la base</label>
                    <input class="form-control mr-sm-2" type="number" name="numb1" id="numb1" placeholder="Intro un numero">
                </div>
                <div class="col-auto my-1">    
                    <label class="form-check-label" for="numb2">Introduzca el numero del exponente</label>
                    <input class="form-control" type="number" name="numb2" id="numb2" placeholder="Intro un numero">
                </div>
            </div>
            <br>
            <div id="btns">
                <b>POTENCIA</b>                
                <button class="btn btn-outline-dark btn-lg" type="submit"><b>a²</b></button>
            </div>
        </form>
    </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>