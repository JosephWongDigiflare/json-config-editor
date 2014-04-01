<?php

// app/macros.php

Form::macro('fullName', function($name)
{
    return '<p>Full name: <input type="text" name="'.$name.'"></p>';
});