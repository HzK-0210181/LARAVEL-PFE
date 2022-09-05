@component('mail::message')
# A new Worker's Registery

First name : {{$First_Name}}

Last name : {{$Last_Name}}

Telephone : {{$Telephone}}

Email : {{$Email}}


@component('mail::button', ['url' => $url.'/validated'."/$id" ,'color'=>'primary'])
Validate
@endcomponent
@component('mail::button', ['url' => $url.'/delete'."/$id",'color'=>'error' ])
Delete
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent