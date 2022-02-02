<main>
    <div class="title-container">
        <div>
            <img src="img/logo.png" alt="">
        </div>
        <div>
            <h1>Etat de tous les frais par visiteur</h1>
        </div>
    </div>
    <div class="form-content">
        <form action="index.php?uc=acceuil&action=valider" method="POST">
            <h2>Visiteur</h2>
            <div class="input-container">
                <label for="" class="label-left">Numéro: </label>
                    <select name="numero" id="numero" class="select-left">
                        <?php foreach($lesnumero as $untype):?>
                        <option value="<?php echo $untype['id']?>"><?php echo $untype['id']?></option>
                        <?php endforeach?>
                    </select>
                <label for="" class="label-right">Type de frais</label>
                    <select name="typefrais" id="type de frais" class="select-right">
                        <?php foreach($lestypesfrais as $untype):?>
                        <option value="<?php echo $untype['id']?>"><?php echo $untype['id']?></option>
                        <?php endforeach?>
                    </select>
                <input class="button" type="submit" value="Valider">
            </div>
            <h2 class="text-frais">Frais au forfait</h2>
            <table>
                <tr>
                    <th>Mois</th>
                    <th>Quantité</th>
                </tr>
                <?php if(isset($lesmois)):?>
                <?php foreach($lesmois as $untype): /* var_dump($untype) */?>
                    <tr>
                        <td><?= $untype['mois'];?></td>
                        <td><?= $untype['quantite'];?></td>
                    </tr>
                <?php endforeach?>
                <?php else:echo " "; endif; ?>
            </table>
            <table>
                <tr>
                    <th >Total</th>
                </tr>
                <?php if(isset($lesCounts)):?>
                <tr>
                    <td ><?php echo $lesCounts[0] ?></td>
                </tr>
                <?php else:echo" ";endif; ?>
            </table>
        </form>
    </div>
</main>
