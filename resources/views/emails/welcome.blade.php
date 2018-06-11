@component('mail::message')
# Welcome {{$user->name}}

{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Imran
@endcomponent
