<?php
class Template {
    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
    }

    public function load($template_header, $template_content, $data = null) {
        $this->ci->load->view($template_header, $data);
        $this->ci->load->view($template_content, $data);
    }
}