<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController {
	public function getAllBooks(): ?array
	{
		$books = new BookModel;

		return $books->getData();
	}



	public function addBook(array $book): void
	{
		// TODO add; array_push
		array_push($data, [
			'name_book' => 'War & Peace',
			'author' => 'Lev Tolstoi',
			'category' => 'antiutopy'
		]);
	}

	public function deleteBook(int $id): void
	{
		// TODO delete; array_diff
		array_diff($data, [
			'name_book' => '500 Farengeit',
			'author' => 'Ray Bradberry',
			'category' => 'antiutopy'
		]);
	}
}