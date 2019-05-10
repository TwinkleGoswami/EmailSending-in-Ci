<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');

    }
    public function index()
    {
        $this->load->view('Email_form');
        $this->load->helper('url');
    }
    public function send_mail()
    {
        $from_email = "wondercrazy15@gmail.com";
        $to_email =  $_POST['email'];
        $subject =  $_POST['subject'];
        $msg =  $_POST['message'];

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'wondercrazy15@gmail.com';
        $config['smtp_pass'] = 'natrix@2015';
        $config['newline'] = "\r\n";
        //Load email library
        $this->load->library('email',$config);
        $this->email->from($from_email, 'wondercrazy');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($msg);

        //Send mail
        if($this->email->send())
        {
            echo "Congragulation Email Send Successfully.";
            $this->index();

        }
        else
           show_error($this->email->print_debbuger());

    }
}
