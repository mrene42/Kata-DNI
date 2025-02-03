<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Letter;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LetterTest extends TestCase
{
    use RefreshDatabase;
    
    protected function setUp(): void {
        parent::setUp();
        $this->seed(\Database\Seeders\DatabaseSeeder::class);
    }

    public function test_assign_letter_to_number_with_valid_input(): void {   
        $numChain = "12345678";
        $response = $this->get(route('apiassign', ['id' => $numChain]));
        
        $mod = (int)$numChain % 23;
        $expectedLetter = Letter::find($mod + 1)->letter;
        
        $response->assertStatus(200);
        $response->assertSeeText("$numChain$expectedLetter");
    }

    public function test_assign_letter_to_number_with_invalid_length(): void{
       
        $numChain = "123";
        $response = $this->get(route('apiassign', ['id' => $numChain]));
       
        $response->assertStatus(200);
        $response->assertSeeText("Introduce a valid number");
    }
    
}
