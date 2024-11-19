<?php
include_once("templates/header.php");
include_once("process/pizza.php");
?>
<div id="main-banner">
    <link rel="stylesheet" href="css/style.css">
    <h1>faça seu pedido</h1>
</div>
<div id="main-container">
    <div class="conatainer">
        <div class="row">
            <div class="col_md-12">
                <h2> Monte a pizza como desejar: </h2>
                <form action= "process/pizza.php"
                method="POST" id="pizza-form">
                <div class="form-group">
                <label for="borda">Borda:</label>
                        <select name="borda" id="borda" class="form-control">
                            <option value="">Selecione a borda</option>
                            <?php foreach($bordas as $borda): ?>
                                <option value="<?= $borda['id'] ?>"><?= $borda['tipo'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Seleção de Massa -->
                    <div class="form-group">
                        <label for="massa">Massa:</label>
                        <select name="massa" id="massa" class="form-control">
                            <option value="">Selecione a massa</option>
                            <?php foreach($massas as $massa): ?>
                                <option value="<?= $massa['id'] ?>"><?= $massa['tipo'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Seleção de Sabores -->
                    <div class="form-group">
                        <label for="sabores">Sabores: (Máximo 3)</label>
                        <select multiple name="sabores[]" id="sabores" class="form-control">
                            <?php foreach($sabores as $sabor): ?>
                                <option value="<?= $sabor['id'] ?>"><?= $sabor['nome'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Botão de Enviar Pedido -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Fazer Pedido">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once("templates/footer.php");
?>