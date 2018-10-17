<?php
/**
 * Created by PhpStorm.
 * User: fcromer
 * Date: 9/6/18
 * Time: 4:57 PM
 */

require_once __DIR__ ."/vendor/autoload.php";

use Francscafe\ResponseClass\JsonResponse;

$student = array(
    'name' => 'John Doe',
    'course' => 'Software Engineering',
    'collections' => ['books' => 'Intro to UML', 'music' => 'rap']
);

new JsonResponse('unauthorized', '', $student);