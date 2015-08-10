<?php

namespace App\Http\Controllers;

use App\Account;
use Auth;
use Html;

class NavbarController extends Controller
{

    public function getIndex($account_id = null) {
        $horizontalMenu = Auth::check() ? $this->horizontalAuthenticated() : $this->horizontalGuest();
        $verticalMenu = Auth::check() ? $this->verticalAuthenticated($account_id) : $this->verticalGuest();

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
                $links[] = Html::linkAction(
                    'AccountController@getIndex',
                    $account,
                    $account,
                    ['class' => 'routable navbar-brand', 'data-target' => '#page-wrapper']
                );
            }
        }

        if (Auth::user()->trashedAccounts()->count()) {
            $subLinks = [];
            foreach (Auth::user()->trashedAccounts as $account) {
                $subLinks[] = Html::linkAction(
                    'AccountController@getIndex',
                    $account,
                    $account,
                    ['class' => 'routable', 'data-target' => '#page-wrapper']
                );
            }
            $links[] = Html::link(
                    '#',
                    '<i class="fa fa-fw fa-archive" title="'.trans('account.delete.title').'"></i>',
                    ['class' => 'navbar-brand dropdown-toggle', 'data-toggle' => 'dropdown']
                )
                .Html::ul($subLinks, ['class' => 'dropdown-menu']);
        }

        $links[] = Html::linkAction(
            'AccountController@getAdd',
            '<i class="fa fa-fw fa-plus" title="'.trans('account.add.title').'"></i> ',
            [],
            ['class' => 'routable navbar-brand', 'data-target' => '#page-wrapper']
        );

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

    private function verticalAuthenticated($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return [];
        }

        $links = [
            Html::linkAction(
                'AccountController@getIndex',
                '<i class="fa fa-fw fa-home" title="'.trans('home.layout.title').'"></i> '
                    .trans('account.index.title')
                    .'<span class="pull-right badge badge-'.$account->status.'">'
                    .Html::formatPrice($account->balance)
                    .'</span>',
                $account,
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            ),
        ];

        foreach ($account->nontrashedEnvelopes as $envelope) {
            $links[] = Html::linkAction(
                'EnvelopeController@getView',
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->status.'">'
                    .Html::formatPrice($envelope->balance)
                    .'</span>',
                $envelope,
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            );
        }

        if ($account->trashedEnvelopes()->count()) {
            $subLinks = [];
            foreach ($account->trashedEnvelopes as $envelope) {
                $subLinks[] = Html::linkAction(
                    'EnvelopeController@getView',
                    $envelope
                        .'<span class="pull-right badge badge-'.$envelope->status.'">'
                        .Html::formatPrice($envelope->balance)
                        .'</span>',
                    $envelope,
                    ['class' => 'routable', 'data-target' => '#page-wrapper']
                );
            }
            $links[] = Html::link(
                    '#',
                    '<i class="fa fa-fw fa-archive"></i> '.trans('envelope.delete.title').' <i class="fa fa-fw fa-caret-down"></i></a>',
                    ['data-toggle' => 'collapse', 'data-target' => '#trashed-envelopes']
                )
                .Html::ul($subLinks, ['id' => 'trashed-envelopes', 'class' => 'collapse']);
        }

        $links[] = Html::linkAction(
            'EnvelopeController@getAdd',
            '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
            $account,
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        );

        return $links;
    }
}
