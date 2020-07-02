<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BackendPagesController extends Controller
{
    public function __construct()
    {
        $this->cms = new CMSController();
    }

    public function getDashboard()
    {
        return view('backend/dashboard');
    }

    public function getCMS()
    {
        return view('backend/CMS/CMS');
    }

    public function getCMSPages()
    {
        $views = Storage::disk('views')->files('frontend');

        foreach($views as $view) {
            $pageName = substr($view, 9, -10);
        }

        return view('backend/CMS/pages', compact('views'));
    }

    public function getCMSEditPage() {

        $sections = DB::table('cms')->where('pageName', $_GET['pageName'])->get();

        return view('backend/CMS/editPage', compact('sections'));
    }

    public function getCMSAddSection() {

        $partials = Storage::disk('views')->files('partials/sections');

        $sections = [];
        foreach($partials as $partial) {
            $filePath = substr($partial, 0, -10);
            array_push($sections, view($filePath, ['title' => 'example', 'article' => 'example'])->render());
        }

        if (!isset($_GET['section'])) {
            $_GET['section'] = 'section1';
        }

        return view('backend/CMS/addSection', compact('sections', 'partials'));
    }

    public function getCMSform() {
        return view('backend/CMS/inputForm');
    }

    public function getCMSPartials()
    {
        $partials = $this->cms->getPartials();

        return view('backend/CMS/partials', compact('partials'));
    }

    public function getCMSContent()
    {
        return view('backend/CMS/content');
    }

    public function getCMSAssets()
    {
        return view('backend/CMS/assets');
    }

    public function getSettings()
    {
        return view('backend/settings/settings');
    }
}
