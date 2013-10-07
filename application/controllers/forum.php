<?php
    class Forum extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        // public function _output()
        // {

        // }

        // public function _remap($method)
        // {
        //     $this->bonjour();
        // }

        public function index()
        {
            echo 'je suis sur l\'index';

            $this->bonjour();   
        }

        public function accueil()
        {
            $data = array();
            $data['pseudo'] = 'ToTo';
            $data['email'] = 'toto@toto.com<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute(\'data-cfemail\');if(a){s=\'\';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
/* ]]> */
</script>';
            $data['online'] = TRUE;

            $this->load->view('vue', $data);
        }

        public function bonjour($nom = '')
        {
            echo 'Bonjour ' . $nom . '!';
        }
    }