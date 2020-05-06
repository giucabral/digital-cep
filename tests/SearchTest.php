<?php

use PHPUnit\Framework\TestCase;
use php_dio\DigitalCep;
use php_dio\DigitalCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste 
     */
    public function testGetAdressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAdressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            "Casa Cintya" => [
                "88010-301",
                [
                    "cep" => "88010-301",
                    "logradouro" => "Rua Tenente Silveira",
                    "complemento" => "de 251/252 ao fim",
                    "bairro" => "Centro",
                    "localidade" => "Florianópolis",
                    "uf" => "SC",
                    "unidade" => "",
                    "ibge" => "4205407",
                    "gia" => ""
                ]
            ],
            "Casa do Luiz" => [
                "03624-010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3550308",
                    "gia" => "1004"
                ]
            ],


        ];
    }
}