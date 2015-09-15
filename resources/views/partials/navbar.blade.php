<nav class="top-bar" data-topbar>
  <ul class="title-area">
      <li class="name"><h1><a href="/"><img width="25" src="/assets/img/logos/white.png"></a></h1></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <div class="top-bar-section">
    @if (Auth::check())
      <ul class="left">
        <li class="has-dropdown">
          <a href="/course">Courses</a>
          <ul class="dropdown">
          @foreach ($courses as $course)
            <li><a href="{{ route('course.show', [$course->slug]) }}">{{ $course->name }}</a></li>
          @endforeach
          </ul>
        </li>
        @if (Request::is('lesson*'))
        <li class="has-dropdown">
          <a href="#">Lessons for {{ $lesson->course->name }}</a>
          <ul class="dropdown">
          @foreach ($lesson->course->lessons as $navLesson)
            <li @if ($navLesson->id === $lesson->id) class="active" @endif><a href="{{ route('lesson.show', [$navLesson->slug]) }}">{{ $navLesson->name }}</a></li>
          @endforeach
          </ul>
        </li>
        @endif
      </ul>
      <ul class="right">
        <li class="has-dropdown">
          <a href="/dashboard">Hi, {{ Auth::user()->name }}</a>
          <ul class="dropdown">
            <li><a href="/student/{{ Auth::user()->id }}">View Profile</a></li>
            <li><a href="/student">Edit Settings</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    @endif
    @if (Auth::guest())
      <ul class="left">
        <li @if (Request::is('course*')) class="active" @endif><a href="/course">Courses</a></li>
        <li><a href="/mag">Mag</a></li>
        <li><a href="/blog">Blog</a></li>
      </ul>
      <ul class="right">
        <li><a href="/register">Register</a></li>
        <li><a href="/login">Login</a></li>
      </ul>
    @endif
  </div>
</nav>