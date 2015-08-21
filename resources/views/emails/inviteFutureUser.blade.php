@extends('emails.layout')

@section('subject')
    @lang('invitation.inviteFutureUser.emailSubject', ['user' => Auth::user()])
@endsection

@section('content')
    @lang('invitation.inviteFutureUser.emailContent', [
        'user' => Auth::user(),
        'account' => $invitation->account,
    ])
@endsection

@section('linkUrl')
    {{ url() }}
@endsection

@section('linkText')
    @lang('invitation.inviteFutureUser.emailLink')
@endsection
