<?php

namespace App\Rule;

interface BookInterface{
	public function getAllBooks(): ?array;
	public function addBook(array $book): void;
	public function deleteBook(int $id): void;
}