<?php

include_once 'model/contact_model.php';

class ContactController {
    static function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dash_page/layout', ['url' => 'view/contact_crud_page/add']);
        }
    }

    static function saveAdd() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::insert([
                'phone_number' => $post['phone_number'], 
                'owner' => $post['owner'],
                'user_fk' => $_SESSION['user']['id']
            ]);
            
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
            }
            else {
                header('Location: '.BASEURL.'contacts/add?addFailed=true');
            }
        }
    }

    static function edit() {}

    static function saveEdit() {}

    static function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $contact = Contact::delete($_GET['id']);
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
            }
            else {
                header('Location: '.BASEURL.'dashboard/contacts?removeFailed=true');
            }
        }
    }
}