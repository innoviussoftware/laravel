<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">

@if (trim($slot) === 'Laravel')
<img src="{{ URL::asset('favicon.ico') }}" class="logo" alt="Laravel Logo">
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
@elseif(trim($slot) === 'RajTechnologies')
<img src="{{ URL::asset('favicon.ico') }}" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
