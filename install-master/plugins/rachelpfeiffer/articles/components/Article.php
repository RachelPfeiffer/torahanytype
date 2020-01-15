<?php namespace Rachelpfeiffer\Articles\Components;

use Cms\Classes\ComponentBase;
use Rachelpfeiffer\Articles\Models\Articles;
use Rainlab\User\Models\User;


class Article extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Article Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'category' => [
                'title'             => 'Slider Category',
                'description'       => 'Category to display in slider',
                'default'           => 'Chanukah',
                'type'              => 'string'
           ]
        ];
    }

    public function onRun()
{
    $sliderArticles = Articles::paginate(15);
    foreach ($sliderArticles as $article) {
        $authorInfo = User::where('name',$article->author)->first();
        error_log($authorInfo->avatar->path);
    }
    $this->page['sliderArticles'] = $sliderArticles; 

    $authors =  User::get();
    } 
}