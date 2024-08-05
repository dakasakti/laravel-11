<?php

namespace App\Console\Commands;

use App\Facades\DummyApi;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Blogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blogs:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate random posts';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = DummyApi::blogs();
        if (!$response['status']) {
            abort($response['code']);
        }

        foreach ($response['data'] as $blog) {
            Blog::create([
                'title' => $blog['title'],
                'slug' => Str::slug($blog['title']),
                'content' => $blog['content'],
                'is_published' => true,
                'published_at' => Carbon::createFromFormat('Y-m-d', $blog['date_published']),
                'user_id' => random_int(1, 2),
                'category_id' => random_int(1, 3),
            ]);
        }

        $this->info('Successfully!');
    }
}
