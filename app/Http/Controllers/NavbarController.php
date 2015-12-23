<?php

namespace App\Http\Controllers;

use Auth;
use Html;

/**
 * Navbar displayed on all pages.
 */
class NavbarController extends AbstractController
{

    /**
     * Render navbar displayed on all pages
     * @param  string|null $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getIndex($accountId = null) {
        $horizontalMenu = Auth::check() ? $this->horizontalAuthenticated() : $this->horizontalGuest();
        $verticalMenu   = Auth::check() ? $this->verticalAuthenticated($accountId) : $this->verticalGuest();

        $data = [
            'horizontalMenu' => $horizontalMenu,
            'verticalMenu' => $verticalMenu,
        ];

        return view('navbar', $data);
    }

    /**
     * Horizontal menu for guest users
     * @return array Links
     */
    private function horizontalGuest() {
        return [];
    }

    /**
     * Horizontal menu for authenticated users
     * @return array Links
     */
    private function horizontalAuthenticated() {
        $links = [
            Html::linkAction(
                'HomeController@getIndex',
                '<i class="fa fa-fw fa-home"></i></a>',
                [],
                ['class' => 'routable navbar-brand', 'data-target' => '#page-wrapper']
            ),
        ];

        $links += $this->horizontalAuthenticatedNonTrashedAccount();

        $links[] = $this->horizontalAuthenticatedTrashedAccount();

        $links[] = Html::linkAction(
            'AccountController@getAdd',
            '<i class="fa fa-fw fa-plus" title="'.trans('account.add.title').'"></i> ',
            [],
            ['class' => 'routable navbar-brand', 'data-target' => '#page-wrapper']
        );

        return $links;
    }

    /**
     * Non trashed account links
     * @return array Links
     */
    private function horizontalAuthenticatedNonTrashedAccount() {
        $links = [];

        foreach (Auth::user()->nontrashedAccounts as $account) {
            if ($account->trashed() === false) {
                $links[] = $account->link(null, ['class' => 'routable navbar-brand']);
            }
        }

        return $links;
    }

    /**
     * Trashed account links
     * @return string|null Links
     */
    private function horizontalAuthenticatedTrashedAccount() {
        $links = [];

        if (Auth::user()->trashedAccounts->isEmpty()) {
            return null;
        }

        foreach (Auth::user()->trashedAccounts as $account) {
            $links[] = $account->link();
        }

        return Html::link(
                '#',
                '<i class="fa fa-fw fa-archive" title="'.trans('account.delete.title').'"></i>',
                ['class' => 'navbar-brand dropdown-toggle', 'data-toggle' => 'dropdown']
            )
            .Html::ul($links, ['class' => 'dropdown-menu']);
    }

    /**
     * Vertical menu for guest users
     * @return array Links
     */
    private function verticalGuest() {
        return [];
    }

    /**
     * Vertical menu for authenticated users
     * @param  string $accountId Account primary key
     * @return array Links
     */
    private function verticalAuthenticated($accountId) {
        $account = Auth::user()->accounts()->find($accountId);

        if (is_null($account)) {
            return [];
        }

        $links = [];
        $links[] = $this->verticalAuthenticatedAccountLink($account);
        $links += $this->verticalAuthenticatedNonTrashedEnvelopes($account);
        $links[] = $this->verticalTrashedEnvelopes($account);

        $links[] = Html::linkAction(
            'EnvelopeController@getAdd',
            '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
            $account,
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        );

        return $links;
    }

    /**
     * Account link
     * @param  \App\Account $account Account
     * @return string Link
     */
    private function verticalAuthenticatedAccountLink($account) {
        return $account->link(
            '<i class="fa fa-fw fa-home" title="'.trans('home.authenticated.title').'"></i> '
                .trans('account.index.title')
                .'<span class="pull-right badge badge-'.$account->envelopes_status.'">'
                .Html::formatPrice($account->envelopes_balance, $account->currency)
                .'</span>'
        );
    }

    /**
     * Non trashed envelope links
     * @param  \App\Account $account Account
     * @return array Links
     */
    private function verticalAuthenticatedNonTrashedEnvelopes($account) {
        $links = [];

        foreach ($account->nontrashedEnvelopes as $envelope) {
            $links[] = $envelope->link(
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->status.'">'
                    .Html::formatPrice($envelope->balance, $envelope->currency)
                    .'</span>'
            );
        }

        return $links;
    }

    /**
     * Trashed envelope link
     * @param  \App\Account $account Account
     * @return string Links
     */
    private function verticalTrashedEnvelopes($account) {
        if ($account->trashedEnvelopes->isEmpty()) {
            return null;
        }

        $links = $this->verticalTrashedEnvelopesLinks($account);

        return Html::link(
                '#',
                '<i class="fa fa-fw fa-archive"></i> '
                    .trans('envelope.delete.title')
                    .' <i class="fa fa-fw fa-caret-down"></i></a>',
                ['data-toggle' => 'collapse', 'data-target' => '#trashed-envelopes']
            )
            .Html::ul($links, ['id' => 'trashed-envelopes', 'class' => 'collapse']);
    }

    /**
     * Trashed envelope links
     * @param  \App\Account $account Account
     * @return array Links
     */
    private function verticalTrashedEnvelopesLinks($account) {
        $links = [];

        foreach ($account->trashedEnvelopes as $envelope) {
            $links[] = $envelope->link(
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->status.'">'
                    .Html::formatPrice($envelope->balance, $envelope->currency)
                    .'</span>'
            );
        }

        return $links;
    }

}
