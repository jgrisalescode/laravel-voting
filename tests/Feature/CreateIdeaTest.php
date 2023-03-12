<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function crate_idea_form_does_not_show_when_logged_out()
    {
        $response = $this->get(route('ideas.index'));

        $response->assertSuccessful();
        $response->assertSee('Please login to create an idea');
    }

    /** @test */
    public function crate_idea_form_show_when_logged_in()
    {

        $response = $this->actingAs(User::factory()->create())->get(route('ideas.index'));

        $response->assertSuccessful();
        $response->assertDontSee('Please login to create an idea');
        $response->assertSee("Let us know what you would like and we will a look over!");
    }

    /** @test */
    public function main_page_contains_create_idea_livewire_component()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('ideas.index'))
            ->assertSeeLivewire('create-idea');
    }

    /** @test */
    public function create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'category', 'description']);
    }

    /** @test */
    public function creating_an_idea_works_correctly()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open']);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'My first Idea')
            ->set('category', $categoryOne->id)
            ->set('description', 'My first Idea created here')
            ->call('createIdea')
            ->assertRedirect(route('ideas.index'));

        $response = $this->actingAs($user)->get(route('ideas.index'));

        $response->assertSuccessful();
        $response->assertSee('My first Idea');
        $response->assertSee('My first Idea created here');

        $this->assertDatabaseHas('ideas', ['title' => 'My first Idea']);
    }
}
