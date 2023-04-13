<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<form action="/carros/save" method="post">
        <fieldset >
            <legend style="color: white;"><b>Cadastro de Carros</b></legend>
            
            
            <!--<label for="id" style="color: white;">ID do veiculo:</label> -->
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="marca" style="color: white;">Marca:</label>
            <input type="text" for="marca" value="<?= $model->marca ?>" name="marca" />

            <label for="modelo" style="color: white;">Modelo:</label>
            <input type="text" for="modelo" value="<?= $model->modelo ?>" name="modelo" />

            <label for="id_fabricante" style="color: white;">Fabricante:</label>
            <select name="id_fabricante" id="id_fabricante" style="background:#484d50; color:white; height:25px;">
            <option selected value="">Selecione uma Opção</option>
            <?php foreach($model->rowsFabr as $item): ?>
                <option <?= ($item->id == $model->id_combustivel) ? 'selected' : '' ?> value="<?= $item->id ?>"><?= $item->descricao ?></option>
            <?php endforeach ?>
            </select>

            <label for="id_tipo" style="color: white;">Tipo:</label>
            <select name="id_tipo" id="id_tipo" style="background:#484d50; color:white; height:25px;">
            <option selected value="">Selecione uma Opção</option>
            <?php foreach($model->rowsTipo as $item): ?>
                <option <?= ($item->id == $model->id_combustivel) ? 'selected' : '' ?> value="<?= $item->id ?>"><?= $item->descricao ?></option>
            <?php endforeach ?>
            </select><br>
            
            <label for="ano" style="color: white;">Ano:</label>
            <input type="number" min="1950" maxlength="4" for="ano" value="<?= $model->ano ?>" name="ano" />
            
            <label for="id_combustivel" style="color: white;">Combustivel:</label>
            <select name="id_combustivel" id="id_combustivel" style="background:#484d50; color:white; height:25px;">
                <option selected value="">Selecione uma Opção</option>
                <?php foreach($model->rowsComb as $item): ?>
                <option <?= ($item->id == $model->id_combustivel) ? 'selected' : '' ?> value="<?= $item->id ?>"><?= $item->descricao ?></option>
                <?php endforeach ?>
            </select>

            <label for="cor" style="color: white;">Cor:</label>
            <input type="text" for="cor" value="<?= $model->cor ?>" name="cor" />

            <label for="numero_chassi" style="color: white;">Numero de Chassi:</label>
            <input type="text" for="numero_chassi" maxlength="17" value="<?= $model->Numero_chassi ?>" name="Numero_chassi" />

            <label for="kilometragem" style="color: white;">Kilometragem:</label>
            <input type="number" for="kilometragem" value="<?= $model->kilometragem ?>" name="kilometragem" />

            
            
            
            <div style="display: flex;margin-top: 10px;">
            
            <input type="checkbox" <?= ($model->revisao == '1') ? 'checked' : '' ?> for="revisao" value="<?= $model->revisao ?>" id="revisao" name="revisao" >
            <label for="revisao" style="color: white;margin-right:  5px;" >Revisão</label>

            <input type="checkbox" <?= ($model->sinistro == '1') ? 'checked' : '' ?> for="sinistro"  id="sinistro" name="sinistro">
            <label for="sinistro" style="color: white; margin-right:  5px;" >Sinistro</label>

            <input type="checkbox" <?= ($model->roubo_furto == '1') ? 'checked' : '' ?> for="roubo_furto" value="<?= $model->roubo_furto ?>" id="roubo_furto" name="roubo_furto">
            <label for="roubo_furto" style="color: white;margin-right:  5px;" >Roubo ou Furto</label>

            <input type="checkbox" <?= ($model->aluguel == '1') ? 'checked' : '' ?> for="aluguel" value="<?= $model->aluguel ?>" id="aluguel" name="aluguel">
            <label for="aluguel" style="color: white;margin-right:  5px;" >Aluguel</label>

            <input type="checkbox" <?= ($model->venda == '1') ? 'checked' : '' ?> for="venda" value="<?= $model->venda ?>" id="venda" name="venda">
            <label for="venda" style="color: white;margin-right:  5px;" >Venda</label>

            <input type="checkbox" <?= ($model->particular == '1') ? 'checked' : '' ?> for="particular" value="<?= $model->particular ?>" id="particular" name="particular">
            <label for="particular" style="color: white;margin-right:  5px;" >Particular</label>

            </div>

            
            <div style="margin-top: 5px;margin-bottom: 5px;display: flex;">
            <label for="observacoes" style="color: white;margin-right: 5px;">Observações:</label>
            </div>
            <div style="display: flex;">
            <textarea for="observacoes" maxlength="300" id="observacoes" name="observacoes" style="height: 65px; width: 600px;" ><?= $model->observacoes ?></textarea>
            
            <button type="submit" style="background-color:#484d50 ;  height:70px; width:100px; font-size:17px;color:red;margin-left:15px;margin-top: px;background-color: grey;"><b>Enviar</b></button>
            </div>
            
            
            
        </fieldset>

        
    </form>   

    
    <center><a href="/carros"><button style="border-radius: 10px;height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black;color:white; margin:15px" >Ver listagem de Carros</button></a></center>
    
    <a href="/"><button style="border-radius: 10px;height: 70px; width:300px; font-size:25px; background-color:#484d50;border: 1 solid black;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:white" >Voltar para página inicial</button></a>
    
    <style>
        body{
            background-color: black;
        }
        


    </style>

</body>
</html>