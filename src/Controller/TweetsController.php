<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tweets Controller
 *
 * @property \App\Model\Table\TweetsTable $Tweets
 */
class TweetsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Accounts']
        ];
        $this->set('tweets', $this->paginate($this->Tweets));
        $this->set('_serialize', ['tweets']);
    }

    /**
     * View method
     *
     * @param string|null $id Tweet id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tweet = $this->Tweets->get($id, [
            'contain' => ['Accounts']
        ]);
        $this->set('tweet', $tweet);
        $this->set('_serialize', ['tweet']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tweet = $this->Tweets->newEntity();
        if ($this->request->is('post')) {
            $tweet = $this->Tweets->patchEntity($tweet, $this->request->data);
            if ($this->Tweets->save($tweet)) {
                $this->Flash->success('The tweet has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tweet could not be saved. Please, try again.');
            }
        }
        $accounts = $this->Tweets->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('tweet', 'accounts'));
        $this->set('_serialize', ['tweet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tweet id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tweet = $this->Tweets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tweet = $this->Tweets->patchEntity($tweet, $this->request->data);
            if ($this->Tweets->save($tweet)) {
                $this->Flash->success('The tweet has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tweet could not be saved. Please, try again.');
            }
        }
        $accounts = $this->Tweets->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('tweet', 'accounts'));
        $this->set('_serialize', ['tweet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tweet id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tweet = $this->Tweets->get($id);
        if ($this->Tweets->delete($tweet)) {
            $this->Flash->success('The tweet has been deleted.');
        } else {
            $this->Flash->error('The tweet could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
