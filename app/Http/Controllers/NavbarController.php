<?php

namespace App\Http\Controllers;

use App\Account;
use Auth;
use Html;

class NavbarController extends Controller
{
    public function getIndex($account_id = null) {
        $data = [
            'horizontalMenu' => $this->getHorizontalMenu(),
            'verticalMenu' => $this->getVerticalMenu($account_id),
        ];

        return view('navbar', $data);
    }

    private function getHorizontalMenu() {
        if (Auth::check() === false) {
            return [];
        }

        $links = [];

        foreach (Auth::user()->nontrashedAccounts as $account) {
            if ($account->trashed() === false) {
                $links[] = Html::linkAction(
                    'AccountController@getSummary',
                    $account,
                    $account,
                    ['class' => 'link-to-page navbar-brand']
                );
            }
        }

        if (Auth::user()->trashedAccounts()->count()) {
            $subLinks = [];
            foreach (Auth::user()->trashedAccounts as $account) {
                $subLinks[] = Html::linkAction(
                    'AccountController@getSummary',
                    $account,
                    $account,
                    ['class' => 'link-to-page']
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
            ['class' => 'link-to-page navbar-brand']
        );

        return $links;
    }

    private function getVerticalMenu($account_id) {
        if (Auth::check() === false) {
            return $this->getVerticalMenuGuest();
        }

        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return [];
        }

        $links = [
            Html::linkAction(
                'AccountController@getSummary',
                '<i class="fa fa-fw fa-th-large" title="'.trans('home.layout.title').'"></i> '
                    .trans('account.index.title')
                    .'<span class="pull-right badge badge-'.$account->status.'">'
                    .Html::formatPrice($account->balance)
                    .'</span>',
                $account,
                ['class' => 'link-to-page']
            ),
        ];

        foreach ($account->nontrashedEnvelopes as $envelope) {
            $links[] = Html::linkAction(
                'EnvelopeController@getSummary',
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->status.'">'
                    .Html::formatPrice($envelope->balance)
                    .'</span>',
                $envelope,
                ['class' => 'link-to-page']
            );
        }

        if ($account->trashedEnvelopes()->count()) {
            $subLinks = [];
            foreach ($account->trashedEnvelopes as $envelope) {
                $subLinks[] = Html::linkAction(
                    'EnvelopeController@getSummary',
                    $envelope
                        .'<span class="pull-right badge badge-'.$envelope->status.'">'
                        .Html::formatPrice($envelope->balance)
                        .'</span>',
                    $envelope,
                    ['class' => 'link-to-page']
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
            ['class' => 'link-to-page']
        );

        return $links;
    }

    private function getVerticalMenuGuest() {
        return [
            Html::linkAction(
                'HomeController@getIndex',
                '<i class="fa fa-fw fa-home"></i> '.trans('home.guest.title').'</a>',
                [],
                ['class' => 'link-to-page']
            ),
            Html::linkAction(
                'Auth\AuthController@getLogin',
                '<i class="fa fa-fw fa-sign-in"></i> '
                    .trans('user.register.title').' & '.trans('user.login.title').'</a>',
                [],
                ['class' => 'link-to-page']
            ),
        ];
    }
}
