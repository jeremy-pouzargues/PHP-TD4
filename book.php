<?php
    class Book
    {
        private $title;
        private $author;
        private $editor;
        private $pageNb;

        public function __construct($myTitle, $myAuthor, $myEditor, $pageNb)
        {

        }

        public function setTitle($newTitle)
        {
            $this->title = $newTitle;
        }
        public function getTitle()
        {
            return $this->title;
        }

        public function setAuthor($newAuthor)
        {
            $this->author = $newAuthor;
        }
        public function getAuthor()
        {
            return $this->author;
        }

        public function setEditor($newEditor)
        {
            $this->editor = $newEditor;
        }
        public function getEditor()
        {
            return $this->editor;
        }

        public function setPageNb($newPageNb)
        {
            $this->pageNb = $newPageNb;
        }
        public function getPageNb()
        {
            return $this->PageNb;
        }

        public function afficherLivre()
        {
            echo 'Nom : ' . $this->getTitle() . '<br/>';
            echo 'Auteur : ' . $this->getAuthor() . '<br/>';
            echo 'Editeur : ' . $this->setEditor() . '<br/>';
            echo 'Nombre de pages : ' . $this->getPageNb() . '<br/>';
        }

    }
?>