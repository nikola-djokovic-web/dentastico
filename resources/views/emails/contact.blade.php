@component('mail::message')
# Šalje: {{$data->email}}

#Poruka
{{$data['message']}}


Br. telefona: {{$data->phone}}
<br>
<br>
@if(($data->document) != '')
<a type='button' href='http://127.0.0.1:8000{{$data->document}}'>Dokument</a>
@endif

{{ config('app.name') }}
@endcomponent
