@extends('emails.layout')

@section('subject')
    @lang('invitation.inviteExistingUser.emailSubject', ['user' => Auth::user()])
@endsection

@section('content')
    @lang('invitation.inviteExistingUser.emailContent', [
        'user' => Auth::user(),
        'account' => $account,
    ])
@endsection

@section('linkUrl')
    {{ url() }}
@endsection

@section('linkText')
    @lang('invitation.inviteExistingUser.emailLink')
@endsection
