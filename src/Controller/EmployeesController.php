<?php
namespace App\Controller;

use Cake\Controller\Controller;

class EmployeesController extends Controller
{

	public function workbench()
    {
        
    }

    public function index()
    {
        $employees=$this->Employees->find('all');
        $this->set(compact('employees'));
    }

    public function view()
    {
        
    }

    public function add()
    {
        
    }

	public function edit()
    {
        
    }

    public function delete()
    {
        
    }

}
?>