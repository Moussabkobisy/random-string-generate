<?php
namespace Generator;


interface TextGeneratorInterface
{
    public function generate( int $length=10):string;
}
