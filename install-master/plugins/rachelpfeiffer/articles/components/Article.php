<?php namespace Rachelpfeiffer\Articles\Components;

use Cms\Classes\ComponentBase;

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
        return [];
    }

    public function getRecentArticle() {
        return "Hello";
    }
}
