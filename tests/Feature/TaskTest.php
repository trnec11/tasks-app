<?php


namespace Tests\Feature;


use Database\Factories\TaskFactory;
use Tests\TestCase;

class TaskTest extends TestCase
{
    public function testGetTasks()
    {
        $newTask = TaskFactory::new();
        $response = $this->get('/tasks');

        $response->assertStatus(200);
    }
}
