@extends('layouts.app')

@section('content')

@push('js')

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('js/app.js') }}" rel="stylesheet">
 

@endpush


 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
