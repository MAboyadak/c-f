<?php

namespace App\Controllers;

use App\Helpers\SQL;
use stdClass;

class ContactController extends Controller
{

    public function showForm()
    {
        $fileName = 'contact-form';
        return view($fileName);
    }

    public function storeMessage()
    {
        $errors = [];
        $this->validateForm($_POST, $errors);
        // $this->sanitizeData();

        $data = new stdClass();

        if($errors){
            $fileName = 'contact-form';
            $data->errors = $errors;
            return view($fileName, $data);
        }
        
        $requestData = [];
        $requestData[] = $_POST['name'];
        $requestData[] = $_POST['email'];
        $requestData[] = $_POST['subject'];
        $requestData[] = $_POST['message'];
        
        $query = 'insert into `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, ?, ?, ?, ?)';
        SQL::queryWithParams($query, $requestData);

        $fileName = 'messages';
        $_SESSION['success'] = 'Message Stored Successfullyyyyyyyy';
        return $this->getMessages();
    }

    public function getMessages()
    {
        $fileName = 'messages';
        $messages = SQL::getAll('messages');
        $data = new stdClass();
        $data->messages = $messages;
        return view($fileName, $data);
    }

    private function validateForm($data, &$errors)
    {
        if (! isset($data['name']) || empty($data['name'])) {
            $errors['name'] = 'Name Field Can\'t be empty';
        }
        
        if (! isset($data['email']) || empty($data['email'])){
            $errors['email'] = 'Email Field Can\'t be empty';
        }

        if (! isset($data['subject']) || empty($data['subject'])){
            $errors['subject'] = 'Subject Field Can\'t be empty';
        }
        if (! isset($data['message']) || empty($data['message'])){
            $errors['message'] = 'Message Field Can\'t be empty';
        }

        if (isset($data['email']) &&  ( !filter_var($data['email'], FILTER_VALIDATE_EMAIL) ) ) {
            $errors['email'] = 'Email Field is not valid';
        }

    }

    private function sanitizeData()
    {

    }

}

?>