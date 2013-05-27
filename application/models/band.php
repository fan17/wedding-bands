<?php

class Band extends Eloquent 
{
	public function tag($set) {
		$ret = $this->has_many_and_belongs_to('Tag', 'bands_tags', 'id_band', 'id_tag')
			->where('id_set', '=', $set)
			->where('status', '=', 1)
			->get();
		// var_dump($ret); exit;
		return $ret;
	}

	public function musician()	{
		$ret = $this->has_many('Musician', 'id_band')
			->where('status', '=', 1)
			->get();
		// var_dump($ret); exit;
		return $ret;
	}

	public function image() {
		$ret = $this->has_many('Image', 'id_band')
			->where('status', '=', 1)
			->get();
		return $ret;
	}

	public function similar() {
		$tags = $this->has_many_and_belongs_to('Tag', 'bands_tags', 'id_band', 'id_tag')
			->where('status', '=', 1)
			->get();
			var_dump($tags); exit;
	}
}