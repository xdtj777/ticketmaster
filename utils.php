<?php

function validateRequired($fields)
{
    foreach ($fields as $field) {
        if (empty($_POST[$field]) && !isset($_POST[$field])) {
            http_response_code(400);
            die();
        }
    }
}
