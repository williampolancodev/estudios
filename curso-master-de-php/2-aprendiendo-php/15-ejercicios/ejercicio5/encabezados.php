<?php /*Cuando trabajamos con las vistas en PHP mayormente se utiliza  un sintaxis alternativa
la cual cambia las llaves por dos puntos (:) y se finaliza con un endforeach, siendo este el caso!
tambien hay "end" para otras expresiones   */?>

<tr>
        <?php foreach($categorias as $categoria): ?>
            <th><?=$categoria?></th>
        <?php endforeach; ?> 
</tr>