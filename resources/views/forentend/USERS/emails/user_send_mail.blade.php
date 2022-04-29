@component('mail::message')
# Introduction

The body of your message.

thanks our customers {{$data['user']->name }}

your  mail is  {{$data['user']->email }}
@component('mail::button', ['url' =>'http://localhost/dashboard/alymarket3/public/user_reset_pass_add_new/'.$data['token'] ])
                   {{trans('admin.presshereforveryfiy')}}
@endcomponent

or copy this link 
 
   <a href="'http://localhost/dashboard/alymarket3/public/'.$data['token']">'http://localhost/dashboard/alymarket3/public/'.{{$data['token']}}</a>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
