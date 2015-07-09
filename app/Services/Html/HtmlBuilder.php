<?php namespace App\Services\Html;

use \Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder {

    /**
     * Generate a HTML link without escaping HTML tags.
     *
     * @param  string  $url
     * @param  string  $title
     * @param  array   $attributes
     * @param  bool    $secure
     * @return string
     */
    public function link($url, $title = null, $attributes = array(), $secure = null)
    {
        $url = $this->url->to($url, array(), $secure);

        if (is_null($title) || $title === false) $title = $url;

        return '<a href="'.$url.'"'.$this->attributes($attributes).'>'.$title.'</a>';
    }


}