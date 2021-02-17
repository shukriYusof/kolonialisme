<?php
use PHPUnit\Framework\TestCase;
require_once ('index.php');

final class StateTest extends TestCase
{
    public function testGetAllStates()
    {
        return $this->assertIsArray(State::getAllStates());
    }
}