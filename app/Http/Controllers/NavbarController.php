<?php

namespace App\Http\Controllers;

use Auth;
use Html;

class NavbarController extends AbstractController
{

    public function getIndex($accountId = null) {
        $horizontalMenu = Auth::check() ? $this->horizontalAuthenticated() : $this->horizontalGuest();
        $verticalMenu   = Auth::check() ? $this->verticalAuthenticated($accountId) : $this->verticalGuest();

        $data = [
            'horizontalMenu' => $horizontalMenu,
            'verticalMenu' => $verticalMenu,
        ];

        return view('navbar', $data);
    }

    private function horizontalGuest() {
        return [];
    }

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

    private function horizontalAuthenticatedNonTrashedAccount() {
        $links = [];

        foreach (Auth::user()->nontrashedAccounts as $account) {
            if ($account->trashed() === false) {
                $links[] = $account->link(null, ['class' => 'routable navbar-brand']);
            }
        }

        return $links;
    }

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

    private function verticalGuest() {
        return [];
    }

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

    private function verticalAuthenticatedAccountLink($account) {
        return $account->link(
            '<i class="fa fa-fw fa-home" title="'.trans('home.authenticated.title').'"></i> '
                .trans('account.index.title')
                .'<span class="pull-right badge badge-'.$account->envelopes_status.'">'
                .Html::formatPrice($account->envelopes_balance, $account->currency)
                .'</span>'
        );
    }

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
