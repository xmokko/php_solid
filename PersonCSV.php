<?php

namespace Person;

require_once 'IPerson.php';

class PersonCSV implements IPerson
{
    public function save($file_name, $person_name)
    {
        $f = fopen($file_name, 'w');
        fwrite($f, $person_name);
        fclose($f);
    }
}
