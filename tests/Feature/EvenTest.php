<?php

namespace Tests\Feature;

use App\Http\Controllers\TddController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EvenTest extends TestCase
{
    public function testIsEvenReturnsOneForEvenNumbers()
    {
        $TddController = new TddController();
        $result = $TddController->isEven(4);
        $this->assertEquals(1, $result);
    }

    public function testIsEvenReturnsZeroForOddNumbers()
    {
        $TddController = new TddController();
        $result = $TddController->isEven(5);
        $this->assertEquals(0, $result);
    }

    public function testIsEvenReturnsErrorMessageForStringValues()
    {
        $TddController = new TddController();
        $result = $TddController->isEven("abc");
        $this->assertEquals("This Function Expecting Number Value Given Is String string", $result);
    }

    public function testIsEvenReturnsErrorMessageForBooleanValues()
    {
        $TddController = new TddController();
        $result = $TddController->isEven(true);
        $this->assertEquals("This Function Expecting Number Value Given Is Boolean boolean", $result);
    }

    public function testIsEvenReturnsErrorMessageForArrayValues()
    {
        $TddController = new TddController();
        $result = $TddController->isEven([1, 2, 3]);
        $this->assertEquals("This Function Expecting Number Value Given Is Array array", $result);
    }

    public function testIsEvenReturnsErrorMessageForNullValue()
    {
        $TddController = new TddController();
        $result = $TddController->isEven(null);
        $this->assertEquals("This Function Expecting Number Value Given Is NULL NULL", $result);
    }

    public function testIsEvenReturnsErrorMessageForDoubleValue()
    {
        $TddController = new TddController();
        $result = $TddController->isEven(3.14);
        $this->assertEquals("This Function Expecting Number Value Given Is Double double", $result);
    }
}
