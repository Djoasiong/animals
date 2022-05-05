<?php

namespace App;


class AnimalRepository
{

    private array $data;

    public function __construct()
    {

        $this->data = json_decode(file_get_contents(dirname(__DIR__).'/data/data.json'), true);

    }

    public function findAllOrderByName(): array
    {
        foreach ($this->data as $key => $val)
        {
            $animals[$key] = $val['name'];
        }
        array_multisort($animals, SORT_ASC, $this->data);
        return $this->data;
    }
}           