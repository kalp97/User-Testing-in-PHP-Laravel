<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarUpdateTest extends TestCase
{
    /**
     */
    public function testUpdateCar()
    {
        $cars = Car::all();
        $car = Car::find(1);
        $car->year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);

    }
}