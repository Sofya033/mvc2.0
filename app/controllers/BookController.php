<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController {
	private string $name_book;
	private string $author;
	private string $category;
	private array $new_book;

	public function getAllBooks(): array
	{
		$books = new BookModel;

		$result = $books->getData();

		return $result;
	}

	public function __construct(string $name_book, string $author, string $category, array $new_book)
	{
		$this->name_book = $name_book;
		$this->author = $author;
		$this->category = $category;
		$this->new_book = $new_book;
		array_push($this->new_book, $this->name_book, $this->author, $this->category);
	}

	public function addBook(array $book): void
	{
		array_push($data, $this->new_book);
	}

	/*public function deleteBook(int $id): void
	{
		unset($data[]);
	}*/
}
