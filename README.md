# json-response
A simple class that returns a propely formatted json response with HTTP status

## Installation

composer require francscafe/json-response

### Usage

```php

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

new JsonResponse('ok', '', $student);

```
### Param 1 (Required)
1. success or ok - 200 http status
2. unauthorized - 401 http status
3. exception - 500 http status (internal server error)

### Param 2 (Optional)
string - the return message, use empty quote if not available

### Param 3 (Optional)
Array - Array of Data