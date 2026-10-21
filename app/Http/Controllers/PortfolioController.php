<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProfile;
use App\Models\Project;
use App\Models\Service;
use App\Models\SocialLink;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    public function __invoke(): View
    {
        $profile = PortfolioProfile::query()->firstOrFail();
        $services = Service::query()
            ->where('is_published', true)
            ->orderBy('display_order')
            ->get();
        $projects = Project::query()
            ->where('is_published', true)
            ->orderBy('display_order')
            ->get();
        $socialLinks = SocialLink::query()
            ->where('is_published', true)
            ->orderBy('display_order')
            ->get();

        return view('welcome', compact('profile', 'services', 'projects', 'socialLinks'));
    }
}
