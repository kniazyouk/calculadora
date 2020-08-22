<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Calculadora Simple</title>

    <style>
        body{
            background-color gradiendt();
            background-color: rgba(0,0,0,0.2);
        }
        .container{
            margin-top: 30px;
            background-color: rgba(255,255,255,0.8);
            box-shadow: 3px 3px 20px rgba(0,0,0,0.5);
        }
        h1{
          margin-bottom: 30px;
          text-shadow: 3px 3px 5px rgba(0,0,0,0.5);
        }
        h3{
          margin-top: 30px;
          text-shadow: 3px 3px 5px rgba(0,0,0,0.5);
        }
        p{
          font-size: 30px;
          text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>La <span class="text-info"> multiplicacion </span> es:</h1>

        <p>Primer numero: {{ $numb1 }}</p>
        <p>Segundo numero: {{ $numb2 }}</p>

        <h3>La <span class="text-info"> multiplicacion </span> de los numeros introducidos es = <span class="text-info">{{ $multip }}</span></h3>
    </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
