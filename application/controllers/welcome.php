<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->database();
        $query = $this->db->query('SELECT name, uid, board FROM wenyu_member');
        foreach ($query->result() as $row) {
            echo $row->name;
            echo $row->uid;
            echo $row->board;
        }

        echo 'Total Results: ' . $query->num_rows();
        
        $this->load->view('welcome_message');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */