<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recieving extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		 $this->load->view('RecievingPage.html');
                 /*
                 $this->data['pagebody'] = 'ReceivingPage';
                 $source = $this->Supplies->all();
                 $supplies = array();
                 
                 foreach ($source as $item)
		{
			$stock[] = array ('code' => $item['code'], 'description' => $item['description'], 'receivingUnit' => $item['receivingUnit'],
                            'receivingCost' => $item['receivingCost'], 'stockingUnit' => $item['stockingUnit'], 'quantity' => $item['quantity']);
		}
		$this->data['supplies'] = $supplies;

		$this->render();
                  * 
                  */
	}

}