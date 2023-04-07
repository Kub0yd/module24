<?php

class Controller_Addresses extends Controller
{ 
    function __construct()
    {
        $this->model = new Model_Contacts();
        $this->view = new View();
    }

    function action_index() 
    {   
        $data = $this->model->get_data();
        $this->view->generate('view_contacts.php', 'template_view.php', $data); 
    } 
}
?>
