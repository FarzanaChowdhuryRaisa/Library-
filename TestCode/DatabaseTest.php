<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertDatabaseHas('information',[
            'Book'=>"A",'Title'=>"c",'Id'=>"1",'Name'=>"f",'Price'=>"11",'Author'=>"11",'Available'=>"0000-00-00",'Borrow'=>"2021-04-06",'DueDate'=>"2021-04-29",'Issue'=>"2021-04-05",'ReturnDate'=>"2021-04-25",'Fines'=>"0"
        ]);
    }
}
