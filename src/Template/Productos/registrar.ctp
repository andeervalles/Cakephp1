
<?=$this->Form->create($producto)?>
 <div class=" panel panel-default">
     
        <div class="panel-heading">
            <div class="panel-title">Registrar nuevo Producto</div>
        </div>
        
     <div class="panel-body">
         <div class="form-group">
           <?=$this->Form->control('categorias_id',['class' => 'form-control' ]);?>
         </div>
         
         <div class="form-group">
             <?=$this->Form->control('nombre',['class' => 'form-control']);?>
         </div>
         
         <div class="form-group">
             <?=$this->Form->control('stock',['class' => 'form-control']);?>
         </div>
         
         <div class="form-group">
             <?=$this->Form->control('descripcion',['class' => 'form-control' ]);?>
         </div>
     </div>
     
     <div class="panel-footer">
       <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
            
     </div>
     
 </div>
<?=$this->Form->end();?>