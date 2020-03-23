@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::table')
| Usuario       | Contraseña Temporal |
|:-------------:|:-------------------:|
| ta@ta.ta      | Juhgftrd            |

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
