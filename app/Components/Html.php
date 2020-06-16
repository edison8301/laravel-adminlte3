<?php

namespace App\Components;

use Infureal\Html\Tag;

class Html extends \Collective\Html\HtmlFacade
{

    public static function a($text, $url, $htmlAttributes=[]) {

        $tag = new \Infureal\Html\Tag('a');

        if(is_array($url)==true) {
            $url = Helper::url($url);
        }

        $tag->appendBody($text);
        $tag->setAttribute('href', url($url));



        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

    public static function aVue($text, $url, $bVue) {

        $tag = new \Infureal\Html\Tag('a');

        $tag->appendBody($text);
        $tag->setAttribute('href', $url);

        $tag->setAttribute($bVue,null);

        return $tag;
    }

    public static function li($text, $htmlAttributes=[]) {
        $tag = new \Infureal\Html\Tag('li');

        $tag->appendBody($text);

        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

    public static function iframe($src, $htmlAttributes=[]) {
        $tag = new \Infureal\Html\Tag('iframe');
        $tag->setAttribute('src', $src);
        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

    public static function ul($text, $htmlAttributes=[]) {

        $tag = new Tag('ul');

        $tag->appendBody($text);

        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

    public static function ol($text, $htmlAttributes=[]) {

        $tag = new Tag('ol');

        $tag->appendBody($text);

        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

    public static function form($content,$htmlAttributes=[])
    {
        $tag = new Tag('form');

        $tag->appendBody($content);

        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

    public static function submit($text, $htmlAttributes=[])
    {
        $tag = new Tag('button');
        $tag->appendBody($text);

        foreach($htmlAttributes as $key => $value) {
            $tag->setAttribute($key, $value);
        }

        return $tag;
    }

}
