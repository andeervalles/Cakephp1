
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">Categorias</div>
    </div>
    
    <div class="panel-body">
        <table class="table">
            
            <thead>
                   
                            <th>id</th>
                            <th>Categorias</th>
                            <th width="80">&nbsp;</th>
                            <th width="80">&nbsp;</th>
                 
            </thead>
                            
          
            <tbody>
                   <?php  foreach ($categorias as $categoria) {  ?>
            <tr>
                <td><?= $categoria->id ?></td>
                <td><?= $categoria->nombre ?></td>
                <td><?= $this->Html->link('Editar', ['controller' => 'Categorias', 'action' => 'editar', $categoria->id],['class' => 'btn btn-warning']) ?></td>
                <td><?= $this->Html->link('Eliminar', ['controller' => 'Categorias', 'action' => 'eliminar', $categoria->id], ['class' => 'btn btn-danger']) ?></td>
            </tr>
        <?php  }  ?>
           </tbody>
           
           
            
        </table>
        
    </div>
    
    <div class="panel-footer">
        <?=$this->Html->link('Nuevo', ['controller' => 'categorias', 'action' => 'registrar'],['class' => 'btn btn-primary']);?>
        
    </div>
    
</div>

