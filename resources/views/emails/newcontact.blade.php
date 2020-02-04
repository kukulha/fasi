@component('mail::message')
# Nuevo contacto desde la web

*Nombre* : {{ $data->name }}

*Teléfono* : {{ $data->phone }}


Gracias,<br>
{{ config('app.name') }}
@endcomponent
