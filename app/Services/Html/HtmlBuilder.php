<?php namespace App\Services\Html;

use \Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder {

    /**
     * Generate a HTML link without escaping HTML tags.
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

    /**
     * Create the HTML for a listing element.
     * @param  mixed    $key
     * @param  string  $type
     * @param  string  $value
     * @return string
     */
    protected function listingElement($key, $type, $value)
    {
        if (is_array($value))
        {
            return $this->nestedListing($key, $type, $value);
        }
        else
        {
            return '<li>'.$value.'</li>';
        }
    }

    /**
     * Format a price with two decimal digits
     * @param  string  $value
     * @return string
     */
    public function formatPrice($value)
    {
        return number_format($value, 2).'€';
    }
}