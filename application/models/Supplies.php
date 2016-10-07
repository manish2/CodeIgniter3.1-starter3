<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of supplies
 *
 * @author Justin
 */

//6 recipes
//12 pantry items
class Supplies extends CI_Model{
    //put your code here
    var $data = array(
		array('code' => 'shampoo', 
                      'description' => 'a liquid preparation containing detergent or soap for washing the hair', 
                      'receivingUnit' => '2 bottles', 
                      'receivingCost' => '$14.99',
                      'stockingUnit' => '300ml',
                      'quantity' => '10 bottles'),
                array('code' => 'gel', 
                      'description' => 'a hairstyling product that is used to harden hair into a particular hairstyle', 
                      'receivingUnit' => '2 bottles', 
                      'receivingCost' => '$9.99',
                      'stockingUnit' => '200ml',
                      'quantity' => '3 bottles'),
                array('code' => 'mousse', 
                      'description' => 'a hairstyling product added to hair for extra volume and shine', 
                      'receivingUnit' => '1 bottle', 
                      'receivingCost' => '$19.99',
                      'stockingUnit' => '150ml',
                      'quantity' => '2 bottles'),
                array('code' => 'gowns', 
                      'description' => 'a cover to keep hair off of the client', 
                      'receivingUnit' => '5 gowns', 
                      'receivingCost' => '$37.99',
                      'stockingUnit' => '1 gown',
                      'quantity' => '10 gowns'),
                array('code' => 'scissors', 
                      'description' => 'an instrument used for cutting cloth, paper, and other thin material, consisting of two blades laid one on top of the other and fastened in the middle so as to allow them to be opened and closed by a thumb and finger inserted through rings on the end of their handles', 
                      'receivingUnit' => '1 pair', 
                      'receivingCost' => '$11.99',
                      'stockingUnit' => '1 pair',
                      'quantity' => '9 pairs'),
                array('code' => 'buzzer', 
                      'description' => 'specialized implements used to cut human head hair', 
                      'receivingUnit' => '2 buzzers', 
                      'receivingCost' => '$49.99',
                      'stockingUnit' => '1 buzzer',
                      'quantity' => '4 buzzers'),
                array('code' => 'towel', 
                      'description' => 'a piece of thick absorbent cloth or paper used for drying oneself or wiping things dry', 
                      'receivingUnit' => '2 towels', 
                      'receivingCost' => '$23.99',
                      'stockingUnit' => '1 towel',
                      'quantity' => '20 towels'),
                array('code' => 'conditioner', 
                      'description' => 'a hair care product that changes the texture and appearance of hair', 
                      'receivingUnit' => '2 bottles', 
                      'receivingCost' => '$14.99',
                      'stockingUnit' => '300ml',
                      'quantity' => '10 bottles'),
                array('code' => 'hairspray', 
                      'description' => 'a solution sprayed onto a person\'s hair to keep it in place', 
                     'receivingUnit' => '1 bottle', 
                      'receivingCost' => '$27.99',
                      'stockingUnit' => '190ml',
                      'quantity' => '2 bottles'),
                array('code' => 'wax', 
                      'description' => 'a thick hairstyling product containing wax, used to assist with holding the hair', 
                       'receivingUnit' => '1 bottles', 
                      'receivingCost' => '$15.99',
                      'stockingUnit' => '100ml',
                      'quantity' => '2 bottles'),
                array('code' => 'hair dryer', 
                      'description' => 'an electrical device for drying a person\'s hair by blowing warm air over it', 
                      'receivingUnit' => '1 hair dryer', 
                      'receivingCost' => '$44.99',
                      'stockingUnit' => '1 hair dryer',
                      'quantity' => '3 hair dryers'),
                array('code' => 'comb', 
                      'description' => 'a strip of plastic, metal, or wood with a row of narrow teeth, used for untangling or arranging the hair', 
                      'receivingUnit' => '4 combs', 
                      'receivingCost' => '$12.99',
                      'stockingUnit' => '1 comb',
                      'quantity' => '6 combs')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record) {
			if ($record['code'] == $which) {
				return $record;
                        }
                }
		return null;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}
}
