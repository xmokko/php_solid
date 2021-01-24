<?php

namespace Person;
use Person\IPerson;

require_once 'IPerson.php';

class PersonDB implements IPerson
{
    public function save($file_name, $person_name)
    {
        $db = new \PDO('sqlite:' . $file_name);
        $db->query("CREATE TABLE IF NOT EXISTS test ( person_name varchar(40) DEFAULT 0);");
        $db->query("INSERT into test VALUES ('$person_name')");
    }
}
