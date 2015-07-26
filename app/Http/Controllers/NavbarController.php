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
                'AccountController@getView',
                (string)$account,
                $account,
                ['class' => 'link-to-page navbar-brand']
            );
        }

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
                'AccountController@getView',
                '<i class="fa fa-fw fa-th-large" title="'.trans('home.layout.title').'"></i> '
                    .trans('account.view.title')
                    .'<span class="pull-right badge badge-'.$account->getStatus().'">'
                    .Html::formatPrice($account->getBalance())
                    .'</span>',
                $account,
                ['class' => 'link-to-page']
            ),
        ];

        foreach ($account->envelopes as $envelope) {
            $links[] = Html::linkAction(
                'EnvelopeController@getView',
                $envelope
                    .'<span class="pull-right badge badge-'.$envelope->getStatus().'">'
                    .Html::formatPrice($envelope->getBalance())
                    .'</span>',
                $envelope,
                ['class' => 'link-to-page']
            );
        }

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