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

        foreach (Auth::user()->accounts as $account) {
            $links[] = Html::linkAction(
                'AccountController@getSummary',
                (string)$account,
                $account,
                ['class' => 'link-to-page navbar-brand']
            );
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

        foreach ($account->envelopes as $envelope) {
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
