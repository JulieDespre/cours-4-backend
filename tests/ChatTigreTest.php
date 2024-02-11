<?php

namespace App\Tests;

use App\Entity\ChatTigré;
use PHPUnit\Framework\TestCase;

class ChatTigreTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $chatTigre = new ChatTigré();

        $chatTigre->setNom('Garfield');
        $chatTigre->setMignonneté('Très mignon');
        $chatTigre->setTaille(50);
        $chatTigre->setMoustacheLength(8);

        $this->assertEquals('Garfield', $chatTigre->getNom());
        $this->assertEquals('Très mignon', $chatTigre->getMignonneté());
        $this->assertEquals(50, $chatTigre->getTaille());
        $this->assertEquals(8, $chatTigre->getMoustacheLength());
    }
}
