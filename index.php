<?php

use Person\Person;
use Person\PersonDB;
use Person\PersonCSV;

require_once 'Person.php';
require_once 'PersonCSV.php';
require_once 'PersonDB.php';

$person = new Person(new PersonCSV());
$person->save('test.txt', 'Bill');

$person = new Person(new PersonDB());
$person->save('test.db', 'Bill');
