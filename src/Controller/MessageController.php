<?php
namespace Drupal\message\Controller;
use Drupal\Core\Controller\ControllerBase;


class MessageController extends ControllerBase {
    public static function defaultController($page) {
        $data = ['page'=>$page];
        $request = \Drupal::request();

        return [
            '#theme' => 'message.layout',
            '#data' => $data,
        ];
    }
}