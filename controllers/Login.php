<?php
class Login extends View{

    public function __construct()
    {
        $this->require_header_files([
            'all.min.css' => 'assets/plugins/fontawesome-free/css',
            'icheck-bootstrap.min.css' => 'assets/plugins/icheck-bootstrap',
            'adminlte.min.css' => 'assets/dist/css'
        ]);
        $this->require_footer_files([
            'jquery.min.js' => 'assets/plugins/jquery',
            'bootstrap.bundle.min.js' => 'assets/plugins/bootstrap/js',
            'adminlte.min.js' => 'assets/dist/js'
        ]);

        $this->page_title = 'Login';
    }

    public function index(){
        $this->render_view();
    }

    public function authenticate(){
        redirect('dashboard');
    }

    private function render_view($data = null){
        $this->view('login', $data);
    }

}
?>