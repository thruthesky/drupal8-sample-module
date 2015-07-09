<?php
namespace Drupal\message\Controller;
use Drupal\Core\Controller\ControllerBase;


class MessageController extends ControllerBase {
    public static function defaultController($page) {
        $data = ['page'=>$page];
        self::checkLogin($data);
        return [
            '#theme' => 'message.layout',
            '#data' => $data,
        ];
    }
    private static function checkLogin(&$data) {
        if ( self::uid() ) {

        }
        else {
            $data['error'] = 'Please, login first to access this page.';
            $data['error_title'] = 'Login Error';
        }
    }
    private static function uid() {
        return \Drupal::currentUser()->getAccount()->id();
    }
}