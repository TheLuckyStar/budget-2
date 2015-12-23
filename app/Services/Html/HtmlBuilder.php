<?php namespace App\Services\Html;

use \Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

/**
 * Helper to build HTML elements
 */
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

    /**
     * Build optgroup to select recurring operations for a given type related to  a given account
     * @param  \App\Account $account Account
     * @param  string $type Type of recurring operation
     * @return string HTML optgroup element
     */
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

    /**
     * Build optgroup for a given recurring operation
     * @param  \App\RecurringOperation $recurringOperation Recurring operation
     * @return string HTML option element
     */
    private function recurringOperationsSelectOption($recurringOperation) {
        $attributes = [
            'class' => 'recurring_operation',
            'data-type' => $recurringOperation->type,
            'data-envelope_id' => $this->recurringOperationsSelectOptionEnvelopeId($recurringOperation),
            'data-from_account_id' => $this->recurringOperationsSelectOptionFromAccountId($recurringOperation),
            'data-to_account_id' => $this->recurringOperationsSelectOptionToAccountId($recurringOperation),
            'data-name' => $recurringOperation->name,
            'data-amount' => $recurringOperation->amount,
        ];

        return '<option '.$this->attributes($attributes).'>'.$recurringOperation.'</option>';
    }

    /**
     * Get envelope primary key for recurring operation select option
     * @param  \App\RecurringOperation $recurringOperation Recurring operation
     * @return int|null Envelope primary key
     */
    private function recurringOperationsSelectOptionEnvelopeId($recurringOperation) {
        if ($recurringOperation->type === 'outcome' || $recurringOperation->type === 'revenue') {
            return $recurringOperation->entity_id;
        }

        return null;
    }

    /**
     * Get from account primary key for recurring operation select option
     * @param  \App\RecurringOperation $recurringOperation Recurring operation
     * @return int|null Account primary key
     */
    private function recurringOperationsSelectOptionFromAccountId($recurringOperation) {
        if ($recurringOperation->type === 'incomingTransfer') {
            return $recurringOperation->entity_id;
        }

        return null;
    }

    /**
     * Get to account primary key for recurring operation select option
     * @param  \App\RecurringOperation $recurringOperation Recurring operation
     * @return int|null Account primary key
     */
    private function recurringOperationsSelectOptionToAccountId($recurringOperation) {
        if ($recurringOperation->type === 'outgoingTransfer') {
            return $recurringOperation->entity_id;
        }

        return null;
    }

}
