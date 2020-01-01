<?php namespace RachelPfeiffer\Articles;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Rachelpfeiffer\Articles\Components\Article' => 'article',
            'Rachelpfeiffer\Articles\Components\Search' => 'searchbox'
        ];
    }

    public function registerSettings()
    {
    }
}
