<?php


namespace Database\Factories;


use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ucfirst($this->faker->word),
            'description' => $this->faker->realText(300),
            'valid_from' => $this->faker->dateTimeThisMonth,
            'valid_to' => null,
            'solver_id' => User::find(2)->id,
            'created_by' => User::find(1)->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
