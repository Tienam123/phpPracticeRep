<?php

class Book
{
    private $books = ["The last kingdom", "The guardian of dreams"];

    public function getBooks()
    {
        foreach ($this->books as $book) {
            var_dump($book);
        }
    }

    public function addBook($book)
    {
        array_push($this->books, $book);
    }

    public function changeBook($oldBook, $newBook)
    {
        foreach ($this->books as $index => $book) {
            if ($book === $oldBook) {
                $this->books[$index] = $newBook;
            }
        }
    }
    public function deleteBook($newBook) {
        foreach ($this->books as $index => $book) {
            if ($book===$newBook) {
                array_splice($this->books,$index,1);
            }
        }
    }
}

$book = new Book();
$book->addBook('Game of Thrones');
$book->changeBook('Game of Thrones', 'Programming in 5 steps');
$book->deleteBook('The last kingdom');
$book->getBooks();