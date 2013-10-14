<?php
    class Forum extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

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
            $data = array();
            $data['cookie_id'] = $this->session->userdata('session_id');
            $this->session->set_userdata('nom', 'nagasawa');
            $this->session->set_userdata('prenom', 'antoine');

            $data['nom'] = $this->session->userdata('nom');
            $data['prenom'] = $this->session->userdata('prenom');

            $this->load->view('cookie', $data);

        }

        public function validation()
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('pseudo', 'Votre login', 'required');
            $this->form_validation->set_rules('mdp', 'Votre mote de passe', 'required');

            $data = array();
            $data['pseudo'] = $this->input->post('pseudo');
            $data['mdp'] = $this->input->post('mdp');

            if($this->form_validation->run())
            {
                $this->load->view('formulaire', $data);
            }
            else
            {
                $this->load->view('formulaire', $data);
            }
        }
    }