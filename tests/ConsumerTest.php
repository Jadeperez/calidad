<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
$consumer = new Dummy();
$consumer->setNombre('Jade & Luis');
$consumer->setApellido('pérez & Traconis');
$result = $consumer->nombreCompleto();
$this->assertEquals('Jade Pérez', $result);
    }

  
}
