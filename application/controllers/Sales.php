<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Application
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
		 //$this->load->view('SalesPage.html');
                 
                $this->data['pagebody'] = 'SalesPage';
                 
                 $source = $this->Stock->all();
                 $stock = array();
                 
                 foreach ($source as $item)
		{
			$stock[] = array ('code' => $item['code'], 'description' => $item['description'], 'sellingPrice' => $item['sellingPrice']);
		}
		$this->data['stock'] = $stock;

		$this->render();
                 
	}

}
