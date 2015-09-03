<?php

namespace App\Http\Controllers;

use App\Account;
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
        $links = [];

        foreach (Auth::user()->nontrashedAccounts as $account) {
            if ($account->trashed() === false) {
                $links[] = $account->link(null, ['class' => 'routable navbar-brand']);
            }
        }

        if (Auth::user()->trashedAccounts()->count()) {
            $subLinks = [];
            foreach (Auth::user()->trashedAccounts as $account) {
                $subLinks[] = $account->link();
            }
            $links[] = Html::link(
                    '#',
                    '<i class="fa fa-fw fa-archive" title="'.trans('account.delete.title').'"></i>',
                    ['class' => 'navbar-brand dropdown-toggle', 'data-toggle' => 'dropdown']
                )
                .Html::ul($subLinks, ['class' => 'dropdown-menu']);
        }

        if (count($links)) {
            $links[] = Html::linkAction(
                'AccountController@getAdd',
                '<i class="fa fa-fw fa-plus" title="'.trans('account.add.title').'"></i> ',
                [],
                ['class' => 'routable navbar-brand', 'data-target' => '#page-wrapper']
            );
        }

        return $links;
    }

    private function verticalGuest() {
        return [
            Html::linkAction(
                'HomeController@getIndex',
                '<i class="fa fa-fw fa-home"></i> '.trans('home.guest.title').'</a>',
                [],
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            ),
            Html::linkAction(
                'Auth\AuthController@getLogin',
                '<i class="fa fa-fw fa-sign-in"></i> '
                    .trans('user.register.title').' & '.trans('user.login.title').'</a>',
                [],
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            ),
        ];
    }

    private function verticalAuthenticated($accountId) {
        $account = Auth::user()->accounts()->find($accountId);

        if (is_null($account)) {
            return [];
        }

        $links = [
            $account->link(
                '<i class="fa fa-fw fa-home" title="'.trans('home.layout.title').'"></i> '
                    .trans('account.index.title')
                    .'<span class="pull-right badge badge-'.$account->status.'">'
                    .Html::formatPrice($account->balance)
                    .'</span>'
            ),
        ];

        foreach ($account->nontrashedEnvelopes as $envelope) {
            $links[] = $envelope->link(
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->status.'">'
                    .Html::formatPrice($envelope->balance)
                    .'</span>'
            );
        }

        if ($account->trashedEnvelopes()->count()) {
            $links[] = $this->verticalTrashedEnvelopes($account);
        }

        $links[] = Html::linkAction(
            'EnvelopeController@getAdd',
            '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
            $account,
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        );

        return $links;
    }

    private function verticalTrashedEnvelopes($account) {
        $links = [];

        foreach ($account->trashedEnvelopes as $envelope) {
            $links[] = $envelope->link(
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->status.'">'
                    .Html::formatPrice($envelope->balance)
                    .'</span>'
            );
        }

        return Html::link(
                '#',
                '<i class="fa fa-fw fa-archive"></i> '
                    .trans('envelope.delete.title')
                    .' <i class="fa fa-fw fa-caret-down"></i></a>',
                ['data-toggle' => 'collapse', 'data-target' => '#trashed-envelopes']
            )
            .Html::ul($links, ['id' => 'trashed-envelopes', 'class' => 'collapse']);
    }
}
