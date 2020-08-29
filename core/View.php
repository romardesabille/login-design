<?php
class View {

    private $header_files = array();
    private $footer_files = array();
    private $data = array();
    public $page_title;

    public function __construct()
    {
        //Instantiate Model Here
    }


    protected function require_header_files($file = array()){
        $this->header_files = $file;
    }

    protected function require_footer_files($file = array()){
        $this->footer_files = $file;
    }

    public function get_required_header_files(){
        $this->load_file($this->header_files);
    }

    public function get_required_footer_files(){
        $this->load_file($this->footer_files);
    }


    private function load_file($file){
        if(!empty($file)){
            foreach ($file as $item => $path){
                $item_piece = explode('.', $item);
                //get last extention of file type
                $file_type = $item_piece[count($item_piece)-1];
                if($file_type == 'js'){
                    echo '<script type="text/javascript" src="'.base_url().$path.'/'.$item.'"></script>';
                }elseif($file_type == 'css'){
                    echo '<link rel="stylesheet" href="'.base_url().$path.'/'.$item.'">';
                }else{
                    die('File Type Not Supported.');
                }
            }
        }
    }

    public function json_encode_error_reponse($redirect = false){
        if($redirect != false){
            $data['redirect'] = base_url() . $redirect;
        }
        $data['response'] = 'error';
        echo json_encode($data);
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    protected function view($page_name, $data = null){
        if(!empty($data)){
            $this->data = $data;
            extract($this->data);
        }
        require_once VIEW_DIR. "{$page_name}.php";
    }

}

?>