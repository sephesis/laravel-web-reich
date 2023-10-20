<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_make_a_form_request(): void
    {

        $data = [
            'feedback_name' => 'Валерий',
            'feedback_phone' => '+79269899257',
            'feedback_type' => '2',
            'feedback_file' => '',
        ];

        $response = $this->post('/submit',$data);
        $response->assertRedirect('/');
        // $user = User::factory()->create();

        // $data = [
        //     'feedback_name' => $user->name,
        //     'feedback_phone' => '+79269899257',
        //     'feedback_type' => '2',
        //     'feedback_file' => '',
        // ];

        // $response = $this->actingAs($user)->post('/submit',$data);
        // $response->assertRedirect('/');
    }
}
