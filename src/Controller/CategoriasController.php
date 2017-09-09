<?php
namespace App\Controller;

class CategoriasController  extends AppController{

        public function index() {
            
            $categorias=$this->Categorias->find();
            $this->set('categorias',$categorias);
            
        }
        
         public function editar($id) {
            
             $categoria=$this->Categorias->get($id);
             if($this->request->is('put')){
              $categoria=$this->Categorias->patchEntity($categoria,$this->request->getData());
              if($this->Categorias->save($categoria)){
                  $this->Flash->success('Actualizacion Satisfactoria');
                  return $this->redirect(['action' => 'index']);
              }else{
                  $this->Flash->success('Actualizacion Fallida');
                  return $this->redirect(['action' => 'index']);
              }
              
             }
             $this->set('categoria',$categoria);
            
        }
        
      public function eliminar($id) {
        $categoria = $this->Categorias->get($id);
        if( $this->Categorias->delete($categoria) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
    public function registrar() {
        
        $categoria=$this->Categorias->newEntity();
        
        if($this->request->is('post')){
            $categoria=$this->Categorias->patchEntity($categoria,$this->request->getData());
            if($this->Categorias->save($categoria)){
                $this->Flash->success('Categoria Registrada');
                return $this->redirect(['action' => 'index']);
            }else{
                 $this->Flash->success('Error al Registrar');
                return $this->redirect(['action' => 'index']);
            }
        }
        
        $this->set('categoria',$categoria);
        
    }
}
