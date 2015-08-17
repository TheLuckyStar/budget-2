@extends('emails.layout')

@section('subject')
    @lang('user.register.emailSubject')
@endsection

@section('content')
    @lang('user.register.emailContent')
@endsection

@section('linkUrl')
    {{ url() }}
@endsection

@section('linkText')
    @lang('user.register.emailLink')
@endsection
