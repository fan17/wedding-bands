<?php

class Image extends Eloquent 
{
	public function src($w, $h) {
		// TODO thumb
		// return 'x';
		$Band = Band::find($this->id_band);
		// var_dump($band_key); exit;
		$ret = '/uploads/' . $Band->band_key . '/' . $this->get_attribute('src');
		return $ret;
	}
}