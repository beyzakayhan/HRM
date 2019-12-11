@component('mail::message')
#Yeni Duyuru 

<h1>{{$announcement->date}}</h1>

    {{$announcement->name}}

İyi Günler,<br>
{{ config('app.name') }}
@endcomponent
