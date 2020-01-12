<?php namespace Rachelpfeiffer\Articles\Components;

use Cms\Classes\ComponentBase;
use Input;
use DateTime;
use Session;
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

    public function onTipo()
    {
        Session::put('tipo', $_POST['tipo']);
    }
    public function onSearch()
    {
        $searchinput = Input::get('searchinput');
        $criteria = Session::get('tipo');
        $searchresult = '';
        if ($searchinput !== '') {
            if ($criteria === 'author') {
                $results = Articles::where('author', 'LIKE', '%'.$searchinput.'%')->get();
            } else {
                $results = Articles::where('title', 'LIKE', '%'.$searchinput.'%')->get();
            }
            foreach ($results as $result) {
                $date = new DateTime($result->date);
                $author = $result->author;
                $authorpage = "/author/".$author;
                $searchresult.= '<li>
                                    <a class="secondary" href="/article/'.$result->id.'">
                                        <p class="m-b-0">'.$result->title.'
                                        </p>
                                    </a>
                                    <p class="m-t-0"> 
                                        <a href="'.$authorpage.'"<span><em class="primary">'.$author.'</em></span></a>
                                        <span class="pull-right">'.$date->format('M jS, Y').'</span>
                                    </p>
                                </li>';
            }
            return ['#myDiv' => $searchresult];
        } else {
            return ['#myDiv' => ''];
        }
    }
}
