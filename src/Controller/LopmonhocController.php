<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lopmonhoc Controller
 *
 * @property \App\Model\Table\LopmonhocTable $Lopmonhoc
 */
class LopmonhocController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Lopmonhoc->find();
        $lopmonhoc = $this->paginate($query);

        $this->set(compact('lopmonhoc'));
    }

    /**
     * View method
     *
     * @param string|null $id Lopmonhoc id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lopmonhoc = $this->Lopmonhoc->get($id, contain: ['Diem']);
        $this->set(compact('lopmonhoc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lopmonhoc = $this->Lopmonhoc->newEmptyEntity();
        if ($this->request->is('post')) {
            $lopmonhoc = $this->Lopmonhoc->patchEntity($lopmonhoc, $this->request->getData());
            if ($this->Lopmonhoc->save($lopmonhoc)) {
                $this->Flash->success(__('The lopmonhoc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lopmonhoc could not be saved. Please, try again.'));
        }
        $this->set(compact('lopmonhoc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lopmonhoc id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lopmonhoc = $this->Lopmonhoc->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lopmonhoc = $this->Lopmonhoc->patchEntity($lopmonhoc, $this->request->getData());
            if ($this->Lopmonhoc->save($lopmonhoc)) {
                $this->Flash->success(__('The lopmonhoc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lopmonhoc could not be saved. Please, try again.'));
        }
        $this->set(compact('lopmonhoc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lopmonhoc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lopmonhoc = $this->Lopmonhoc->get($id);
        if ($this->Lopmonhoc->delete($lopmonhoc)) {
            $this->Flash->success(__('The lopmonhoc has been deleted.'));
        } else {
            $this->Flash->error(__('The lopmonhoc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
