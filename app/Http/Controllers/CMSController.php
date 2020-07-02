<?php

namespace App\Http\Controllers;

use App\cms;
use Illuminate\Http\Request;
use App\Http\Requests\cmsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CMSController extends Controller {

    public function saveSection(cmsRequest $request)
    {
        $section = new cms($request->all());
        $section->save();

        return redirect('backend/CMS/pages');
    }

    public function deleteSection()
    {
        DB::table('cms')->where('id', $_GET['id'])->delete();
        return redirect('backend/CMS/pages');
    }

    public function editSection()
    {
        $section = DB::table('cms')->select('*')->where('id', $_GET['id'])->first();

        $_GET['pageName'] = $section->pageName;
        $_GET['section'] = $section->sectionId;

        return view('backend/CMS/inputForm', compact('section'));
    }

    public function updateSection()
    {
        DB::table('cms')
            ->where('id', $_POST['id'])
            ->update(
                [
                    'title' => $_POST['title'],
                    'article' => $_POST['article']
                ]
            );

        return redirect('backend/CMS/pages');
    }

    public function getSections($pageName)
    {
        $results = DB::table('cms')->select('title','article', 'sectionId')->where('pageName', $pageName)->get();

        $sections = [];
        foreach($results as $result) {
            array_push($sections, view(('partials/sections/' . $result->sectionId),
                [
                    'title' => $result->title,
                    'article' => $result->article
                ])->render());
        }

        return $sections;
    }

    public function getPartials()
    {
        $partials = Storage::disk('views')->files('partials/sections');

        $sections = [];
        foreach($partials as $partial) {
            $filePath = substr($partial, 0, -10);
            array_push($sections, view($filePath,
                [
                    'title' => 'example',
                    'article' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum eaque facilis inventore iusto laborum, non porro quisquam rem, repellat temporibus ut vel voluptatem. Amet cum facere placeat ratione sed!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum eaque facilis inventore iusto laborum, non porro quisquam rem, repellat temporibus ut vel voluptatem. Amet cum facere placeat ratione sed!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum eaque facilis inventore iusto laborum, non porro quisquam rem, repellat temporibus ut vel voluptatem. Amet cum facere placeat ratione sed! '
                ])->render());
        }

        return $sections;
    }
}
