<?php
require_once __DIR__ . '/../model/User.php';

class UserController {
    private $model;
    public function __construct() {
        $this->model = new User();
    }
    public function index() {
        $users = $this->model->getAll();
        include __DIR__ . '/../view/user_list.php';
    }
    public function create() {
        include __DIR__ . '/../view/user_form.php';
    }
    public function store() {
        $this->model->create($_POST['name'], $_POST['email']);
        header("Location: index.php");
    }
    public function edit($id) {
        $user = $this->model->getById($id);
        include __DIR__ . '/../view/user_edit.php';
    }
    public function update($id) {
        $this->model->update($id, $_POST['name'], $_POST['email']);
        header("Location: index.php");
    }
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}