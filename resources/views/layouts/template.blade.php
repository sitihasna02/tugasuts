<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <title>SAFAAT</title>
    <style>
       .container {
        width: 1000px;
        margin: 30px auto;
        padding: 5px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-evenly;
       }
       .container div {
        flex: 1;
        float: left;
       }
       .container div.satu{
        flex: 2;
        padding-top: 15%;
        text-align: center;
       }
       h1{
        color: #FFF;
       }
       .satu b{
        color: #228B22;
       }
       .medsos{
        text-align: center;
        color: #fff;
       }
       .name b{
        color: #228B22;
       }
       .nam2{

       }
       .kotak{
        width: 1000px;
        margin: 30px auto;
        padding: 5px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-between;
        color: #808080;
       }
       .kotak div{
        width: 300px;
        height: 400px;
        background-color: #808080;
       }
       .kotak1{
        width: 1000px;
        margin: 30px auto;
        padding: 5px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-around;
        color: #fff;
       }
       .kotak1 div{
        text-align: center;
       }
        
    </style>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="lala">
        @include('nav.nav')
        @yield('cass')
    </div>

    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>