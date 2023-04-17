<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (sessionId('admin_id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        redirect(base_url('admin_Dashboard/gallery'));
    }


   

    public function gallery()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Gallery";
        $data['gallery'] = $this->CommonModal->getAllRowsInOrder('gallery', 'id', 'DESC');

        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if ($BdID != '') {
            $delete = $this->CommonModal->deleteRowById('tbl_gallery', array('id' => $BdID));
            unlink('uploads/gallery/' . $img);
            redirect('Admin_Dashboard/gallery');
            exit;
        }

        if (count($_FILES) > 0) {
          
            $countImg = count($_FILES['moreimage']);
            for ($i = 0; $i <= $countImg; $i++) {
                $no = rand();
                if (!empty($_FILES["moreimage"]["name"][$i])) {
                    $_FILES['multiimages'] = array(
                        'name' => $_FILES["moreimage"]["name"][$i],
                        'type' => $_FILES["moreimage"]["type"][$i],
                        'tmp_name' => $_FILES["moreimage"]["tmp_name"][$i],
                        'error' => $_FILES["moreimage"]["error"][$i],
                        'size' => $_FILES["moreimage"]["size"][$i],
                    );
                    $image_big1 = imageUploadWithRatio('multiimages',  'uploads/gallery/', '870', '580');


                    $postId =   $this->CommonModal->insertRowReturnId('tbl_gallery', array('image_file' =>  $image_big1));
                }
            }
            if ($postId) {

                $this->session->set_flashdata('msg', 'Gallery type Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url('admin_Dashboard/gallery'));
        }


        $this->load->view('admin/gallery', $data);
    }

    public function policy()
    {
        $data['title'] = "Policy";

        $data['policy'] = $this->CommonModal->getAllRowsInOrder('policy', 'id', 'desc');
        $this->load->view('admin/policy', $data);
    }

    public function policy_edit()
    {
        $key = $this->uri->segment(3);
        $data['title'] = "Policy Edit";
        $id = decryptId($key);

        $data['policy'] = $this->CommonModal->getRowById('policy', 'id', $id);

        // print_r($data['policy']);
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $savedata = $this->CommonModal->updateRowById('policy', 'id', $id, $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Policy Update Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Policy Update Successfully</div>');
            }
            redirect(base_url('admin_Dashboard/policy'));
        } else {
            $this->load->view('admin/policy-edit', $data);
        }
    }

}
