@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="/css/thankyou.css">
@stop

@section('çontent')

        <main class="main">
            <div class="thank-you-section">
                <h1>Thank you for <br> Your Order!</h1>
                <p>A confirmation email was sent</p>
                <div class="spacer"></div>
                <div>
                    <a href="{{ url('/') }}" class="button">Home Page</a>
                </div>
            </div>
        </main>

   {{--<div class="thank-you-section">
       <h1>Thank you for <br> Your Order!</h1>
       <p>A confirmation email was sent</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Home Page</a>
       </div>
   </div>--}}

@stop
