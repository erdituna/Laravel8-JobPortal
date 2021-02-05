@auth()
<ul class="ordered-list">
    <li><a href="{{route('myprofile')}}"><span>My Account</span></a></li>
    <li><a href="{{route('aboutus')}}"><span>CV</span></a></li>
    <li><a href="{{route('user_applications')}}"><span>Başvurular</span></a></li>
    <li><a href="{{route('user_jobs')}}"><span>Post a Job</span></a></li>
    <li><a href="{{route('logout')}}"><span>logout</span></a></li>
    @php
        $userRoles = Auth::user()->roles->pluck('name');
    @endphp

    @if($userRoles->contains('admin'))

        <li><a href="{{route('admin_home')}}" target="_blank"><span>Admin Panel</span></a></li>
    @endif


</ul>

@endauth
