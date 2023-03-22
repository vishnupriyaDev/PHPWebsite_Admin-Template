<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pro6 extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Prdtb_model');
	}

	
	public function index()
	{
		$this->load->view('index');
	}
	public function deleteitem()
{
  $id=$this->input->get('id');
  $response=$this->Prdtb_model->deleterecord($id);
  if($response==true){
    echo "Data deleted successfully !";
}
  else{
    echo "Error !";
  }
}
	public function responsive_table()
  {
      $result['data']=$this->Prdtb_model->responsive_table();
      $this->load->view('responsive_table',$result);
  }
	public function form_validation()
	{
		if($this->input->post('save'))
		{
		  $data['brandname']=$this->input->post('brandname');
			$data['description']=$this->input->post('description');
			$response=$this->Prdtb_model->saverecord($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	$this->load->view('form_validation');
}
	public function deletedata()
{
  $id=$this->input->get('id');
  $response=$this->Prdtb_model->deleterecords($id);
  if($response==true){
    echo "Data deleted successfully !";
}
  else{
    echo "Error !";
  }
}


  public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Prdtb_model->displayrecordsById($id);
	$this->load->view('update_records',$result);
	
		if($this->input->post('update'))
		{
		$name=$this->input->post('name');
		$brand=$this->input->post('brand');
		$notes=$this->input->post('notes');
		$items_in_stock=$this->input->post('stock');
		$items_in_ordered=$this->input->post('ordered');
		$this->Prdtb_model->update_records($name,$brand,$notes,$items_in_stock,$items_in_ordered,$id);
		echo "Date updated successfully !";
		}
	}
	public function basic_table()
  {
      $result['data']=$this->Prdtb_model->basic_table();
      $this->load->view('basic_table',$result);
  }

	public function form_component()
	{
		if($this->input->post('save'))
		{
		    $data['name']=$this->input->post('name');
			$data['brand']=$this->input->post('brand');
			$data['notes']=$this->input->post('notes');
			$data['items_in_stock']=$this->input->post('stock');
			$data['items_in_ordered']=$this->input->post('ordered');
			$response=$this->Prdtb_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	
	  $this->load->view('form_component');
	  	
	}
	public function login()
	{
	if($this->input->post('login'))
	{
	$email=$this->input->post('Email');
	$password=$this->input->post('Password');
	$que=$this->db->query("select * from register1 where Email='$email' and Password='$password'");
	$row = $que->num_rows();
	if($row)
	{
	redirect('Pro6/index');
	}
	else
	{
	$data['error']="<h3 style='color:red'>Invalid userid or password !</h3>";
	}
	}
	$this->load->view('login',@$data);
	}
	public function registration()
	{
		if($this->input->post('register'))
		{
		$name=$this->input->post('Name');
		$email=$this->input->post('Email');
		$phone=$this->input->post('Phone');
		$password=$this->input->post('Password');
		$que=$this->db->query("select * from register1 where Email='$email'");
		$row = $que->num_rows();
		if($row)

		{
		$data['error']="<h3 style='color:red'>Email id already exists</h3>";
		}
		else
		{
		$que=$this->db->query("insert into register1 values('','$name','$email','$phone','$password')");
		
		$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		}			
				
		}
	    $this->load->view('registration',@$data);	
	}

}
?>