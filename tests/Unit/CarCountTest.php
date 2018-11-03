<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarCountTest extends TestCase
{
    /**
     */
    public function testCarCount()
    {
        $cars= car::all();
        $cars->count();
        $this->assertEquals(50, count($cars), "Should return 50 cars");
    }
}