  <?=$this->Form->create($categoria)?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Categorias</h2>
    </div>
    
    <div class="panel-body">
      
    <?=$this->Form->control('nombre',['class'=>'form-control','label' => 'Categoria']);?>

    </div>
    
    <div class="panel-footer">
        <?=$this->Form->submit('Guardar',['class'=>'btn btn-primary']);?>
    </div>
</div>

<?=$this->Form->end()?>