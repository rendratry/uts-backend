<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\TodosModel;

class TodosController extends BaseController {
    public function __construct(){
        $this->todos = new TodosModel();
    }

    public function getTodos(){
        //Buat Get Disini
    }

    public function createTodo(){
        $todo = $this->request->getVar('todo');
        $deadline = $this->request->getVar('deadline');

        $data = [
            'todo' => $todo,
            'deadline' => $deadline
        ];

        $this->todos->insert($data);
    }


    public function doneTodo($id){
        //Ubah kolom `status` di database
    }
}