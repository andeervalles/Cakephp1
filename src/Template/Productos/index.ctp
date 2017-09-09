<div class="page-header">
    <h2>Mantenimiento de Productos</h2>
</div>  

    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Productos</h3>
        </div>
        
        <table class="table">
            
            <thead> 
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th width="80">&nbsp;</th>
                <th width="80">&nbsp;</th>
             </thead>
             
             <tbody>
                 <?php foreach ($productos as $producto) {?>
                <tr>
                 <td><?=$producto->id?></td>
                 <td><?=$producto->nombre?></td>
                 <td><?=$producto->categoria->nombre?></td>
                 <td><?=$producto->stock?></td>
                 <td><?=$producto->descripcion?></td> 
                 <td><?=$this->Html->link('Editar',['controller' => 'Productos' , 'action' => 'editar',$producto->id],['class' => 'btn btn-warning']);?></td>
                 <td><?=$this->Html->link('Eliminar',['controller' => 'Productos' , 'action' => 'eliminar',$producto->id],['class' => 'btn btn-danger']);?></td>
               </tr>
               <?php } ?>
            </tbody>
            
            
        </table>
        
        
        <div class="panel-footer">
            <?= $this->Html->link('Nuevo', ['controller' => 'productos','action' => 'registrar'], ['class' => 'btn btn-primary'])?>
        </div>
    </div>




