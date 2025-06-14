@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('frontend/images/resources/logo.jpg') }}" width="50%" class="logo" alt="Dream Logo">
            @endif
        </a>
    </td>
</tr>
