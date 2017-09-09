<?=$this->Form->create($producto);?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Actualizar Productos</h2>
    </div>
    
    <div class="panel-body">
      <?= $this->Form->hidden('id') ?>
        
        <div class="form-group">
         <?=$this->Form->control('nombre',['class' => 'form-control']);?> 
        </div>
        
        <div class="form-group">
         <?=$this->Form->control('categorias_id',['class' => 'form-control',  'type' => 'select', 'multiple' => false, 'options' => $categorias ,'empty' => true]);?> 
        </div>
        
        <div class="form-group">
         <?=$this->Form->control('stock',['class' => 'form-control']);?> 
        </div>
        
         <div class="form-group">
         <?=$this->Form->control('descripcion',['class' => 'form-control']);?> 
        </div>
        
        
        
        
    </div>
        
       
    
    <div class="panel-footer">
        <div class="btn-toolbar">
                <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'btn btn-default'])?>
            </div>
     </div>


<?=$this->Form->end();?>
