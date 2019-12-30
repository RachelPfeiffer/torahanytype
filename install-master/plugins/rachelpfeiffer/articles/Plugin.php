<?php namespace RachelPfeiffer\Articles;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Rachelpfeiffer\Articles\Components\Article' => 'article'
        ];
    }

    public function registerSettings()
    {
    }
}
