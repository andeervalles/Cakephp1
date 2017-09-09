<?php

namespace App\Controller;


class ProductosController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Categorias');
    }
    
    public function index() {
      
         $productos=$this->Productos->find('all')->contain(['Categorias']);
         $this->set('productos',$productos);
     }
     
     public function registrar() {
         $producto=$this->Productos->newEntity();
         if($this->request->is('post')){
             $producto=$this->Productos->patchEntity($producto, $this->request->getData());
           if($this->Productos->save($producto)){
               $this->Flash->success('Guardado Correctamente');
                $this->redirect(['action' => 'index']);
           }else{
               $this->Flash->success('Error al Guardado ');
                $this->redirect(['action' => 'index']);
           }
         }
         $this->set('producto',$producto);
         $categorias=$this->Categorias->find('list');
         $this->set('categorias',$categorias);
     }

     public function eliminar($id) {
         $producto=$this->Productos->get($id);
         if($this->Productos->delete($producto)){
             $this->Flash->success('Producto eliminado Correctamente');
             return $this->redirect(['action' => 'index']);
         }else{
             $this->Flash->error('Producto eliminado Correctamente');
             return $this->redirect(['action' => 'index']);
         }
     }
             
     public function editar($id) {
         
         $producto=$this->Productos->get($id);
         if($this->request->is('put')){
             $producto=$this->Productos->patchEntity($producto,$this->request->getData());
             if($this->Productos->save($producto)){
             $this->Flash->success('Producto Actualizado Correctamente');
             return $this->redirect(['action' => 'index']);
             }else{
                 $this->Flash->error('Error al momento de Actualizar');
             }
         }
         $this->set('producto',$producto);
         $categorias=$this->Categorias->find('list');
       
         $this->set('categorias',$categorias);
         
         
     }
}
