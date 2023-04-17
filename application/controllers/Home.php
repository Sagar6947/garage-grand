<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = "Grand Garage";

        $data['gallery'] = $this->CommonModal->getAllRows('tbl_gallery');
        
        $this->load->view('home' , $data);
    }


    public function privacy_policy()
    {
        $data['title'] = "Privacy Policy - Grand Garage";
        $data['ctitle'] = "Privacy Policy";
        $data['policy'] = $this->CommonModal->getRowById('policy', 'id', '1');
        $this->load->view('policy', $data);
    }

    public function terms_condition()
    {
        $data['title'] = "Terms & Condition - Grand Garage";
        $data['ctitle'] = "Terms & Condition";
        $data['policy'] = $this->CommonModal->getRowById('policy', 'id', '2');
        $this->load->view('policy', $data);
    }


}
