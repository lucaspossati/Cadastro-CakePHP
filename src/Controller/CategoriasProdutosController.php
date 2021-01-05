<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoriasProdutos Controller
 *
 * @property \App\Model\Table\CategoriasProdutosTable $CategoriasProdutos
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categoriasProdutos = $this->paginate($this->CategoriasProdutos);

        $this->set(compact('categoriasProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasProduto = $this->CategoriasProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('categoriasProduto'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasProduto = $this->CategoriasProdutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriasProduto = $this->CategoriasProdutos->patchEntity($categoriasProduto, $this->request->getData());
            if ($this->CategoriasProdutos->save($categoriasProduto)) {
                $this->Flash->success(__('The {0} has been saved.', 'Categorias Produto'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Categorias Produto'));
        }
        $this->set(compact('categoriasProduto'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasProduto = $this->CategoriasProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasProduto = $this->CategoriasProdutos->patchEntity($categoriasProduto, $this->request->getData());
            if ($this->CategoriasProdutos->save($categoriasProduto)) {
                $this->Flash->success(__('The {0} has been saved.', 'Categorias Produto'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Categorias Produto'));
        }
        $this->set(compact('categoriasProduto'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasProduto = $this->CategoriasProdutos->get($id);
        if ($this->CategoriasProdutos->delete($categoriasProduto)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Categorias Produto'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Categorias Produto'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
