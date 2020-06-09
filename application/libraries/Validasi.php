<?php

class Validasi
{
	public static function validate()
	{
		$valid = [
			'required' 	 => '{field} harus diisi!',
			'min_length' => '{field} terlalu pendek!',
			'is_unique'  => '{field} sudah terdaftar!'
		];
		return $valid;
	}
}
