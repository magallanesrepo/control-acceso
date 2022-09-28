<?php
class Blog extends CI_Controller {

        public function index()
        {
               // echo 'Hello World!';
        	$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

        	 $data['title'] = "My Real Title";
                $data['heading'] = "My Real Heading";


        	$this->load->view('blogview', $data);
        }
}

/*

class Blog extends CI_Controller {

        public function index()
        {
                echo 'Hello World!';
        }

        public function comments()
        {
                echo 'Look at this!';
        }
}*


class Blog extends CI_Controller {

        public function shoes($sandals, $id)
        {
                echo $sandals;
                echo $id;
        }



}
*/
