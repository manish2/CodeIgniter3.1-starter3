<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends Application
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
                $source = $this->Recipe->all();
<<<<<<< HEAD
                $recipes[] = array();
                 foreach ($source as $recipe)
=======
                $recipes['index'][] = array();
                foreach ($source as $recipe)
>>>>>>> 24656d906a49a7699771a3db1bd5ffefb6c1a12e
		{
                    $recipes[] = array ('code' => $recipe['code'], 'description' => $recipe['description'], 'ingredients' => $recipe['ingredients']);
		}
<<<<<<< HEAD
                $this->data['recipes'] = $recipes; 
                $this->data['pagebody'] = 'ProductionPage';
                $this->render();
=======
		$this->load->view('ProductionPage', $recipes);
>>>>>>> 24656d906a49a7699771a3db1bd5ffefb6c1a12e
	}
}
