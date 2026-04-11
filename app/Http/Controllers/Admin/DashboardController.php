<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'contactCount'   => Contact::query()->count(),
            'latestContactAt' => Contact::query()->latest('id')->value('created_at'),
            'blogCount'      => Blog::query()->count(),
            'caseStudyCount' => CaseStudy::query()->count(),
            'categoryCount'  => Category::query()->count(),
            'authorCount'    => Author::query()->count(),
        ]);
    }
}
