<nav class="top-bar" data-topbar>
  <ul class="title-area">
      <li class="name"><h1><a href="/"><img width="25" src="/assets/img/logos/white.png"></a></h1></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <div class="top-bar-section">
    <ul class="left">
      <li @if (Request::is('course*')) class="active" @endif><a href="/course">Courses</a></li>
      <li><a href="/mag">Mag</a></li>
      <li><a href="/blog">Blog</a></li>
    </ul>
      <ul class="right">
        @if (Auth::check())
        <li class="has-dropdown">
          <a href="/dashboard">Hi, {{ Auth::user()->name }}</a>
          <ul class="dropdown">
            <li><a href="/student/{{ Auth::user()->id }}">View Profile</a></li>
            <li><a href="/student">Edit Settings</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        @endif
        @if (Auth::guest())
        <li class="has-dropdown">
          <a href="#">Login</a>
          <ul class="dropdown">
            <li><a href="/login">Full Stack Web Course</a></li>
            <li><a href="https://courses.makerscabin.com/login" class="">Master Series</a></li>
          </ul>
        </li>
        @endif
      </ul>
  </div>
</nav>