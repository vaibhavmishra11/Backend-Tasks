@component('mail::message')

Welcome to My E-commerce Web Application
      
Name: {{ $mailData['first_name'] }}<br/>
Email: {{ $mailData['email'] }}
      
Thanks,<br/>
{{ config('app.name') }}

@endcomponent

