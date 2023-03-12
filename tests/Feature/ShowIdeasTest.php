<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_paige()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering']);

        $ideaOne = Idea::factory()->create([
            'title' => 'MY first Idea',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description of my first idea'
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'MY second Idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusConsidering->id,
            'description' => 'Description of my second idea'
        ]);

        $response = $this->get(route('ideas.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($categoryOne->name);
        $response->assertSee($statusOpen->name);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
        $response->assertSee($categoryTwo->name);
        $response->assertSee($statusConsidering->name);
    }

    /** @test */
    public function single_idea_shows_correctly_on_the_show_page()
    {
        $category = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);

        $idea = Idea::factory()->create([
            'title' => 'MY first Idea',
            'category_id' => $category->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description of my first idea'
        ]);

        $response = $this->get(route('ideas.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($category->name);
        $response->assertSee($statusOpen->name);
    }

    /** @test */
    public function ideas_pagination_works()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);

        Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        $ideaOne = Idea::first();
        $ideaOne->title = 'My First Idea';
        $ideaOne->category_id = Category::first()->id;
        $ideaOne->status_id = Status::first()->id;
        $ideaOne->save();

        $ideaEleven = Idea::all()->last();
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->category_id = Category::all()->last()->id;
        $ideaEleven->status_id = Status::all()->last()->id;
        $ideaEleven->save();

        $response = $this->get('/');
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');
        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);
    }
}
