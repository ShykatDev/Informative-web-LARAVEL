@extends('masterpage')
@section('title','cookie')

@section('line')
@if (Session::has('LoggedUser'))
<div class="set">
<div class="cookie">
    <img src="/asset/cookies.gif" alt="">
    <div class="cook">
        <p>Thank you for joining us. <br> Your cookie has been set.</p>
        <button class="cookie-got"><a href="{{route('home')}}">Got it</a></button>
    </div>
</div>
</div>
@else
<div class="none"></div>
@endif
@endsection