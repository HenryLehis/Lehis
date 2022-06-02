<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Post::truncate();
        Category::truncate();



        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet. Ut Quis sapiente id soluta harum ut fugit esse sed aspernatur Quis aut autem voluptas non officiis assumenda aut quia exercitationem. Qui neque consequatur vel consectetur voluptas vel aliquid eaque est ipsa quam.

            Ad officia nobis nam tempora maiores aut iste delectus sit quos similique sit quis facere At voluptatem. Eum odit minima eos alias deserunt hic unde odio aut labore saepe et culpa consequatur omnis repellat id nihil porro. Eos maxime ipsa aut totam reprehenderit ut officia ipsa.

            Sit rerum velit non rerum delectus sit laboriosam reiciendis ut impedit quos quo obcaecati laboriosam. Ea maiores harum ut mollitia quidem ab quis commodi. Non dolor dolorum id quaerat fugit ut pariatur numquam ut cupiditate illum ad praesentium impedit est laudantium inventore. Ea quidem molestiae et alias dignissimos sit nulla rerum.</p>'

        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet. Ut Quis sapiente id soluta harum ut fugit esse sed aspernatur Quis aut autem voluptas non officiis assumenda aut quia exercitationem. Qui neque consequatur vel consectetur voluptas vel aliquid eaque est ipsa quam.

            Ad officia nobis nam tempora maiores aut iste delectus sit quos similique sit quis facere At voluptatem. Eum odit minima eos alias deserunt hic unde odio aut labore saepe et culpa consequatur omnis repellat id nihil porro. Eos maxime ipsa aut totam reprehenderit ut officia ipsa.

            Sit rerum velit non rerum delectus sit laboriosam reiciendis ut impedit quos quo obcaecati laboriosam. Ea maiores harum ut mollitia quidem ab quis commodi. Non dolor dolorum id quaerat fugit ut pariatur numquam ut cupiditate illum ad praesentium impedit est laudantium inventore. Ea quidem molestiae et alias dignissimos sit nulla rerum.</p>'

        ]);



    }
}
