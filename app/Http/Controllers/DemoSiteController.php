<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

final class DemoSiteController extends Controller
{
    public function home(): View
    {
        return view('pages.home', ['demo' => config('demo')]);
    }

    public function about(): View
    {
        return view('pages.about', ['demo' => config('demo')]);
    }

    public function services(): View
    {
        return view('pages.services.index', ['services' => config('demo.services')]);
    }

    public function service(string $slug): View
    {
        $service = collect(config('demo.services'))->firstWhere('slug', $slug);
        abort_unless($service, 404);

        return view('pages.services.show', compact('service'));
    }

    public function faq(): View
    {
        return view('pages.faq', ['faqs' => config('demo.faqs')]);
    }

    public function contact(): View
    {
        return view('pages.contact', ['company' => config('demo.company')]);
    }

    public function quote(): View
    {
        return view('pages.quote', [
            'services' => config('demo.services'),
            'cranes' => config('demo.cranes'),
        ]);
    }
}
