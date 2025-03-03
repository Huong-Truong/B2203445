<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DiemTrungBinhTl Controller
 *
 * @property \App\Model\Table\DiemTrungBinhTlTable $DiemTrungBinhTl
 */
class DiemTrungBinhTlController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DiemTrungBinhTl->find()->order(['diem_tich_luy' => 'desc']  );
        $diemTrungBinhTl = $this->paginate($query);

        $this->set(compact('diemTrungBinhTl'));
    }

    /**
     * View method
     *
     * @param string|null $id Diem Trung Binh Tl id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diemTrungBinhTl = $this->DiemTrungBinhTl->get($id, contain: [],);
        $this->set(compact('diemTrungBinhTl'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diemTrungBinhTl = $this->DiemTrungBinhTl->newEmptyEntity();
        if ($this->request->is('post')) {
            $diemTrungBinhTl = $this->DiemTrungBinhTl->patchEntity($diemTrungBinhTl, $this->request->getData());
            if ($this->DiemTrungBinhTl->save($diemTrungBinhTl)) {
                $this->Flash->success(__('The diem trung binh tl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diem trung binh tl could not be saved. Please, try again.'));
        }
        $this->set(compact('diemTrungBinhTl'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Diem Trung Binh Tl id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diemTrungBinhTl = $this->DiemTrungBinhTl->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diemTrungBinhTl = $this->DiemTrungBinhTl->patchEntity($diemTrungBinhTl, $this->request->getData());
            if ($this->DiemTrungBinhTl->save($diemTrungBinhTl)) {
                $this->Flash->success(__('The diem trung binh tl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diem trung binh tl could not be saved. Please, try again.'));
        }
        $this->set(compact('diemTrungBinhTl'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Diem Trung Binh Tl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diemTrungBinhTl = $this->DiemTrungBinhTl->get($id);
        if ($this->DiemTrungBinhTl->delete($diemTrungBinhTl)) {
            $this->Flash->success(__('The diem trung binh tl has been deleted.'));
        } else {
            $this->Flash->error(__('The diem trung binh tl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
