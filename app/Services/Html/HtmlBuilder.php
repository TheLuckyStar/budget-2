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

        if (is_null($title) || $title === false) {
            $title = $url;
        }

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

        return '<li>'.$value.'</li>';
    }

    /**
     * Format a price with two decimal digits and append currency
     * @param  string  $value
     * @param  string  $currency
     * @param  bool  $forceSymbol Set to true to print '+' in front of positive price (default : false)
     * @return string
     */
    public function formatPrice($value, $currency, $forceSymbol = false)
    {
        $price = number_format($value, 2);

        if ($currency) {
            $price .= ' '.$currency;
        }

        if ($forceSymbol && $price >= 0) {
            return '+'.$price;
        }

        return $price;
    }
}
