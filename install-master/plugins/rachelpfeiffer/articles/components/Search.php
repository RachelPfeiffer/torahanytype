<?php namespace Rachelpfeiffer\Articles\Components;

use Cms\Classes\ComponentBase;
use Input;
use Rachelpfeiffer\Articles\Models\Articles;

class Search extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Search Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSearch()
    {
        $searchinput = Input::get('searchinput');
        $searchresult = '';
        if ($searchinput !== '') {
            $results = Articles::where('title', 'LIKE', '%'.$searchinput.'%')->get();
            foreach ($results as $result) {
                $searchresult.= '<li><a href="/article/'.$result->id.'">'.$result->title.'</a><br><span>'.$result->author.'</span></li>';
            }
            return ['#myDiv' => $searchresult];
        } else {
            return ['#myDiv' => ''];
        }
    }
}
