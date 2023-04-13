<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Página Inicial</title>
    <?php include "./View/includes/js_config.php" ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<center><h1 align="center" style="color:white">Página Inicial<h1 style="color:white"></h1></h1></center>

<center><img src="/View/img/LOGO.png" height="300"></center>

<br>
<center><h2 style="color:white">Selecione uma opção:</h2></center>

<center><div style="display: block;">
<a href="/carros/form"><button style="border-radius: 10px;height: 100px; width:400px; font-size:30px; background-color:#484d50;border: 1 solid black;color:white; margin-right: 10px;" >Cadastrar Carro</button></a>
<a href="/carros"><button style="border-radius: 10px;height: 100px; width:400px; font-size:30px; background-color:#484d50;border: 1 solid black;color:white" >Carros Cadastrados</button></a>
</div></center>
<br>


<style>
    body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            background-color: black;
            
        }
        button{
            background-color: #484d50
        }
</style>
</body>
</html>