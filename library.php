<?php

include 'book.php';

    class Library
    {
        const MAX_BOOKS = 10;

        private $name;
        private $adress;
        private $max;
        private $books;

        public function __construct($myName, $myAdress, $myMax)
        {
            $this->name = $myName;
            $this->adress= $myAdress;
            $this->max = $myMax;
            $this->books = [];
        }

        public function setName($newName)
        {
            $this->name = $newName;
        }
        public function getName()
        {
            return $this->name;
        }

        public function setAdress($newAdress)
        {
            $this->adress = $newAdress;
        }
        public function getAdress()
        {
            return $this->adress;
        }

        public function setMax($newMax)
        {
            $this->max = $newMax;
        }
        public function getMax()
        {
            return $this->max;
        }

        public function afficherLivres()
        {
            echo 'Les livres disponibles dans la bibliothèque sont : <br/>';
            foreach ($this->books as $livre)
            {
                echo $livre->afficherLivre() . '<br/>';
            }
        }
        public function ajouterLivre(Book $livre)
        {
            if ($this->books.count() < $this->MAX_BOOKS)
            {
                $this->books[] = $livre;
            }

        }
        public function supprimerLivre(Book $livre)
        {
            array_splice($this->books, array_search($livre),1);

        }
        public function supprimerDoublons()
        {
            array_unique($this->books);
            array_values($this->books);
        }
        public function afficherBibliotheques(Library $library)
        {
            $this->afficherLivres();
            echo '<br/>';
            $library->afficherLivres();
        }
        public function estTrie()
        {
            $estTrie = true;
            for ($i = 0; $i < count($this->books) - 1; $i += 1)
            {
                if ($this->books[i]->getAuteur() > $this->books[i+1]->getAuteur())
                    $estTrie = false;
                return $estTrie;
            }
        }
        public function trierBibliotheque()
        {
            while (!$this->estTrie())
            {
                for ($i = 0; $i < count($this->books) - 1; $i += 1)
                {
                    if ($this->books[i]->getAuteur() > $this->books[i+1]->getAuteur())
                    {
                        $tempBook = $this->books[i];
                        $this->books[i] = $this->books[i+1];
                        $this->books[i+1] = $tempBook;
                    }
                }
            }
        }


    }
?>