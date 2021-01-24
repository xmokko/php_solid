<?php

namespace Person;

class Person
{
    private IPerson $person;

    public function __construct(IPerson $person)
    {
        $this->person = $person;
    }

    public function save($file_name, $person_name)
    {
        $this->person->save($file_name, $person_name);
    }

}
