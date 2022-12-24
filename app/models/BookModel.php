<?php

namespace App\Model;

class BookModel {
	protected array $data = [
		[
			'name_book' => 'War & Peace',
			'author' => 'Lev Tolstoi',
			'category' => 'antiutopy'
		],
		[
			'name_book' => '500 Farengeit',
			'author' => 'Ray Bradberry',
			'category' => 'antiutopy']
	];

	public function getData(): ?array
	{
		return $this->data;
	}
}