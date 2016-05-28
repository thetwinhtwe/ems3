<?php
namespace App\Controller;

use Cake\Controller\Controller;

class EmployeesController extends Controller
{

	public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }

	public function workbench()
    {
        
    }

    public function index()
    {
        $employees=$this->Employees->find('all');
        $this->set(compact('employees'));
    }

    public function view($id= null)
    {
        $employee = $this->Employees->get($id);
        $this->set(compact('employee'));
    }

    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('Your employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your employee.'));
        }
        $this->set('employee', $employee);
    }

	public function edit($id= null)
    {
        $employee = $this->Employees->get($id);
        if ($this->request->is(['post','put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('Your employee has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your employee.'));
        }
        $this->set('employee', $employee);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

    $employee = $this->Employees->get($id);
    if ($this->Employees->delete($employee)) {
        $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
    }

}
?>