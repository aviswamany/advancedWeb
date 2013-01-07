<?php
class Basic extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('basic_model');	
    }


	public function index(){
        
      
    }


	function searchEmployee(){

		$limit =100;
		$firstname = $this->input->get('firstname');
		$lastname = $this->input->get('lastname');		
		$title =$this->input->get('title');
		$dept_no =$this->input->get('dept_no');
		
		$this->load->model('basic_model');
		
		if (empty($firstname)&& empty($lastname) && empty($title) && empty($dept_no)) {
			$data = ('');
		} else {
		$data['query'] = $this->basic_model->searchEmployee($firstname,$lastname,$title,$dept_no,$limit);
		}
		$this->load->view('basic_view', $data);
	}

}

