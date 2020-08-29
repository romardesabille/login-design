<?php
class Dashboard extends View{

    public function __construct()
    {
        $this->page_title = 'Dashboard';
    }

    public function index(){
        $this->render_view();
    }

    private function render_view($data = null){
        $this->view('admin/dashboard', $data);
    }

}
?>