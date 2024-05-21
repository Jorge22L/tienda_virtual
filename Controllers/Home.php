<?php
    class Home extends Controllers{

        public function __construct()
        {
            parent::__construct();

        }

        public function Home($params)
        {
            $data['page_tag'] = "Home";
            $data['page_title'] = "Página Principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptatum?";
            $this->views->getView($this, "home", $data);
        }


    }
?>