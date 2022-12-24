<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController {
	private string $name_book;
	private string $author;
	private string $category;
	private array $new_book;

	private $allBooks = [];

	private $newBook = [];

	public function getAllBooks(): array
	{
		$books = new BookModel();

		$this->allBooks = $books->getData();

		return $this->allBooks;
	}

	public function __construct(string $name_book, string $author, string $category)
	{
		$this->name_book = $name_book;
		$this->author = $author;
		$this->category = $category;

		$this->newBook = [
			'name_book' => $this->name_book,
			'author' => $this->author,
			'category' => $this->category
		];
	}

	public function addBook(): void
	{
		// TODO добавлять в правильный массив
		array_push($this->allBooks, $this->newBook);
	}

	public function deleteBook(int $id): void
	{
		// TODO delete book
	}
}
