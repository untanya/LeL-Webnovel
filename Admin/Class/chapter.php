<?php

    class Chapter extends Oeuvre {

        protected $Nom_Chapitre;
        protected $lien;
        protected $content;
        protected $date;
        protected $uploader;

        public function __construct($Nom_Chapitre, $lien, $content, $date, $uploader)
        {
            $this->name_ch = $Nom_Chapitre;
            $this->lien = $lien;
            $this->content = $content;
            $this->date = $date;
            $this->uploader = $uploader;
        }

        public function getName_ch()
        {
            echo $this->name;
        }

        public function getLink()
        {
            echo $this->lien;
        }

        public function getContent()
        {
            echo $this->content;
        }

        public function getdate()
        {
            $this->date;

        }

        public function getUploader()
        {
            echo $this->uploader;
        }

        public function setName_ch($Nom_Chapitre)
        {
            if (is_string($Nom_Chapitre)) 
            {
                $this->name_ch = $Nom_Chapitre;
            } else 
            {
                throw new Exception("La valeur rentrée doit être un string");
            }
        }

        public function setLink($lien)
        {
            if (is_string($lien)) 
            {
                $this->lien = $lien;
            } else 
            {
                throw new Exception("La valeur rentrée doit être un string");
            }
        }

        public function setContent($content)
        {
            if (is_string($content)) 
            {
                $this->content = $content;
            } else 
            {
                throw new Exception("La valeur rentrée doit être un string");
            }
        }

        public function setDate()
        {
            $date = time();
            $this->date;
        }

        public function setUploader($uploader)
        {
            if (is_string($uploader)) 
            {
                $this->uploader = $uploader;
            } else 
            {
                throw new Exception("La valeur rentrée doit être un string");
            }
        }
    }

?>