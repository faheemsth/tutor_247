@php
    $segment1 = request()->segment(1);
    $segment2 = request()->segment(2);
@endphp

<!--Subject-->
<div class="nav-item {{ $segment1 == 'subject' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/subject.png') }}" alt="" width="15px"
            height="15px" style="padding-right: 3px">
        <span>{{ __('Subject') }}</span></a>
</div>

<!--Blog-->
<div class="nav-item {{ $segment1 == 'blog' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/blog.png') }}" alt="" width="15px"
            height="15px" style="padding-right: 3px">
        <span>{{ __('Blog') }}</span></a>
</div>

<!--Tutor Money Request-->
<div class="nav-item {{ $segment1 == 'tutor_money_request' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/tutor_money_request.png') }}"
            alt="" width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Tutor Money Request') }}</span></a>


</div>

<!--Pages-->
<div class="nav-item {{ $segment1 == 'pages' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/pages.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Pages') }}</span></a>
</div>

<!--Booking-->
<div class="nav-item {{ $segment1 == 'booking' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/booking.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Booking') }}</span></a>
</div>

<!--Settings-->
<div class="nav-item {{ $segment1 == 'setting' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/settings.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Settings') }}</span></a>
</div>

<!--Reviews-->
<div class="nav-item {{ $segment1 == 'reviews' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/reviews.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Reviews') }}</span></a>
</div>

<!--Payments-->
<div class="nav-item {{ $segment1 == 'payments' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/payments.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Payments') }}</span></a>
</div>

<!--Reports-->
<div class="nav-item {{ $segment1 == 'reports' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/reports.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Reports') }}</span></a>
</div>

<!--Notification-->
<div class="nav-item {{ $segment1 == 'notification' ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/notification.png') }}" alt=""
            width="15px" height="15px" style="padding-right: 3px">
        <span>{{ __('Notification') }}</span></a>
</div>
