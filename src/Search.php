<?php

namespace php_dio\DigitalCep;

class Search
{
    private $url = 'http://viacep.com.br/ws/';

    public function getAdressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        //print_r($get);
        return (array) json_decode($get);
    }
}