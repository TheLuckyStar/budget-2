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

    public function recurringOperationsSelectOptions($account, $type) {
        $recurringOperations = $account->recurringOperations->where('type', $type);
        if ($recurringOperations->isEmpty()) {
            return '';
        }

        $options = [];
        foreach ($recurringOperations as $recurringOperation) {
            $options[] = $this->recurringOperationsSelectOption($recurringOperation);
        }

        $attributes = ['label' => trans('operation.type.recurring'.ucfirst($type).'s')];
        return '<optgroup '.$this->attributes($attributes).'>'.implode('', $options).'</optgroup>';
    }

    private function recurringOperationsSelectOption($recurringOperation) {
        $attributes = [
            'class' => 'recurring_operation',
            'data-type' => $recurringOperation->type,
            'data-envelope_id' => $recurringOperation->type === 'outcome' || $recurringOperation->type === 'revenue'
                ? $recurringOperation->entity_id : null,
            'data-from_account_id' => $recurringOperation->type === 'incomingTransfer'
                ? $recurringOperation->entity_id : null,
            'data-to_account_id' => $recurringOperation->type === 'outgoingTransfer'
                ? $recurringOperation->entity_id : null,
            'data-name' => $recurringOperation->name,
            'data-amount' => $recurringOperation->amount,
        ];

        return '<option '.$this->attributes($attributes).'>'.$recurringOperation.'</option>';
    }

}
