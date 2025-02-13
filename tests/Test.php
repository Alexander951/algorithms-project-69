<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use function App\search;

class Test extends TestCase
{
    public function testSearch(): void
    {
        $doc1 = "I can't shoot straight unless I've had a pint!";
        $doc2 = "Don't shoot shoot shoot that thing at me.";
        $doc3 = "I'm your shooter.";
        $docs = [
            ['id' => 'doc1', 'text' => $doc1],
            ['id' => 'doc2', 'text' => $doc2],
            ['id' => 'doc3', 'text' => $doc3],
        ];

        $this->assertEquals(['doc2', 'doc1'], search($docs, 'shoot'));
        $this->assertEquals(['doc2', 'doc1'], search($docs, 'shoot!!'));
        $this->assertEquals([], search($docs, 'Duck'));
    }
}
