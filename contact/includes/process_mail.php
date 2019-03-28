<?php
$mailsent = false;
// Assume the input contains nothing suspect
$suspect = false;
$to = 'nebaitsigereda@gmail.com';
$subject = 'Message from my website';
$headers[] = "From: " . $_POST['email'];

// Regular expression to search for suspect phrases
$pattern = '/Content-type:|Bcc:|Cc:/i';

// Recursive function that checks for suspect phrases
// Third argument is passed by reference
function isSuspect($value, $pattern, &$suspect)
{
    if (is_array($value)) {
        foreach ($value as $item) {
            isSuspect($item, $pattern, $suspect);
        }
    } else {
        if (preg_match($pattern, $value)) {
            $suspect = true;
        }
    }
}

// Check the $_POST array for suspect phrases
isSuspect($_POST, $pattern, $suspect);

// Process the form only if no suspect phrases are found
if (!$suspect) {
    //Validate user's email
    if (!empty($_POST['email'])) {
        $validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($validemail) {
            $headers[] = "Reply-to: $validemail";
        }
    }

    $headers = implode("\r\n", $headers);
    //Initialize message
    $message = '';


    foreach ($_POST as $key => $field) {
        if (isset($key) && !empty($key)) {
            $val = $field;
        } else {
            $val = 'Not selected';
        }

        //If an array, expand to a comma separated string
        if (is_array($val)) {
            $val = implode(',', $val);
        }

        //Replace underscore in the field names with spaces

        $field = str_replace('_', ' ', $field);
        $message .= ucfirst($key) . ": $val\r\n\r\n";
    }
    $message = wordwrap($message, 70);
    $mailsent = mail($to, $subject, $message, $headers);
}