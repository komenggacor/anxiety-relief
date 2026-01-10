<?php

namespace App\Http\Controllers;

use App\Models\RelaxationPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;

class AdminRelaxationController extends Controller
{
    protected array $pages = [
        'musik' => [
            'label' => 'Musik Relaksasi',
            'path' => 'resources/views/relaxation/musik.blade.php',
            'url' => '/musik',
        ],
        'pernapasan' => [
            'label' => 'Latihan Pernapasan',
            'path' => 'resources/views/relaxation/pernapasan.blade.php',
            'url' => '/pernapasan',
        ],
        'mindfulness' => [
            'label' => 'Latihan Mindfulness',
            'path' => 'resources/views/relaxation/mindfulness.blade.php',
            'url' => '/mindfulness',
        ],
        'visual' => [
            'label' => 'Relaksasi Visual',
            'path' => 'resources/views/relaxation/visual.blade.php',
            'url' => '/visual',
        ],
    ];

    public function index()
    {
        $pages = $this->pages;

        return view('admin.relaxation.index', compact('pages'));
    }

    public function edit(string $slug)
    {
        $page = Arr::get($this->pages, $slug);

        abort_if(! $page, 404);

        $pageData = RelaxationPage::where('slug', $slug)->first();

        return view('admin.relaxation.edit', [
            'slug' => $slug,
            'page' => $page,
            'pageData' => $pageData,
        ]);
    }

    public function update(string $slug, Request $request)
    {
        $page = Arr::get($this->pages, $slug);

        abort_if(! $page, 404);

        if ($slug === 'pernapasan') {
            abort(403, 'Halaman ini tidak dapat diedit.');
        }

        $validated = $request->validate([
            'youtube_url' => ['nullable', 'string', 'max:255'],
            'title' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'quote' => ['nullable', 'string'],
            'benefit_1' => ['nullable', 'string', 'max:255'],
            'benefit_2' => ['nullable', 'string', 'max:255'],
            'benefit_3' => ['nullable', 'string', 'max:255'],
        ]);

        RelaxationPage::updateOrCreate(
            ['slug' => $slug],
            $validated
        );

        return redirect()
            ->route('admin.relaxation.edit', $slug)
            ->with('status', 'Konten halaman berhasil diperbarui.');
    }
}
