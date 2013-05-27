<?php

class Frontend_Bands_Controller extends Frontend_Controller 
{
 	public function get_listing() {
 		// TODO: search
 		$search = Input::all();
 		// var_dump($search); exit;

 		$allow_search = array('name', 'price_from', 'price_to');

 		$Bands = Band::where('status', '=', 1);

 		if (isset($search['name']) && $search['name'])
 			$Bands = $Bands->where('name', 'LIKE', '%' . $search['name'] . '%');
 		if (isset($search['price_from']) && $search['price_from'])
 			$Bands = $Bands->where('price', '>=', $search['price_from']);
 		if (isset($search['price_to']) && $search['price_to'])
 			$Bands = $Bands->where('price', '<=', $search['price_to']);

 		foreach ($allow_search as $allow) {
 			if (!isset($search['allow']))
 				$search[$allow] = '';
 		}


 		$Bands = $Bands->get();
 		// dd($Bands);
 		$data = array(
 			'Bands' => $Bands,
 			'search' => $search,
 			);
 		$this->layout->content = View::make('frontend.bands.listing', $data);
  }

  public function get_details($band_key = null) {

  	$Band = Band::where('band_key', '=', $band_key)->first();

  	$data = array(
 			'Band' => $Band,
 			);
 		$this->layout->content = View::make('frontend.bands.details', $data);

  }
}