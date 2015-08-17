@extends('emails.layout')

@section('subject')
    @lang('user.lostpassword.emailSubject')
@endsection

@section('content')
    @lang('user.lostpassword.emailContent')
@endsection

@section('linkUrl')
    {{ url().'#auth/resetPassword/'.$token }}
@endsection

@section('linkText')
    @lang('user.lostpassword.emailLink')
@endsection
