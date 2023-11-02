<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\TodosModel;

class TodosController extends BaseController {
    public function __construct(){
        $this->todos = new TodosModel();
    }

    public function getTodos(){
        $todosProgress = $this->todos->where('status', false)->findAll();
        $todosDone = $this->todos->where('status', true)->findAll();
        $data = [
            'progress' => $todosProgress,
            'done' => $todosDone
        ];
        return view('todo_index', $data);
    }

    public function createTodo(){
        $todo = $this->request->getVar('todo');
        $deadline = $this->request->getVar('deadline');

        $data = [
            'todo' => $todo,
            'deadline' => $deadline
        ];

        $this->todos->insert($data);
        return redirect()->to(base_url(''));
    }


    public function doneTodo($id){
        //Ubah kolom `status` di database
        $this->todos->update($id, ['status' => true]);
        return redirect()->to(base_url(''));
    }

    public function restoreTodo($id){
        //Ubah kolom `status` di database
        $this->todos->update($id, ['status' => false]);
        return redirect()->to(base_url(''));
    }

    public function deleteTodo($id){
        //Ubah kolom `status` di database
        $this->todos->delete($id);
        return redirect()->to(base_url(''));
    }
    
    public function toEdit($id){
        $todo = $this->todos->where('id', $id)->first();
        return view('edit', ['todo' => $todo]);
    }

    public function updateTodo($id){
        $todo = $this->request->getVar('todo');
        $deadline = $this->request->getVar('deadline');
        $data = [
            'todo' => $todo,
            'deadline' => $deadline
        ];

        $this->todos->update($id, $data);
        return redirect()->to(base_url(''));
    }
}