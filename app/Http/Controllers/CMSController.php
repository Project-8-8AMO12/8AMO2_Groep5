<?php

namespace App\Http\Controllers;

use App\cms;
use Illuminate\Http\Request;
use App\Http\Requests\cmsRequest;
use Illuminate\Support\Facades\DB;

class CMSController extends Controller {

    public function saveSection(cmsRequest $request)
    {
        $section = new cms($request->all());
        $section->save();

        return redirect()->back()->with('success', 'Section has been stored');
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

}
