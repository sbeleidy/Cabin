@extends('app')

@section('content')
<section id="large-header" class="top-section hero ming large-header">
  <div class="row">
    <div class="small-12 columns text-center">
      <h2 class="text-center">Ready to become a full stack web developer?</h2>
      <h3 class="subheader">One school. One price. Everything you need.</h3>
      <ul class="course-list">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">Sass</a></li>
        <li><a href="#">JavaScript</a></li>
        <li><a href="#">jQuery</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">Laravel</a></li>
        <li><a href="#">SQL</a></li>
        <li><a href="#">MySQL</a></li>
        <li><a href="#">Git</a></li>
        <li><a href="#">Github</a></li>
        <li><a href="#">Ubuntu Linux</a></li>
        <li><a href="#">Command Line Tools</a></li>
        <li><a href="#">Gulp</a></li>
        <li><a href="#">NPM</a></li>
        <li><a href="#">Bower</a></li>
        <li><a href="#">Amazon AWS</a></li>
        <li><a href="#">Website Design</a></li>
        <li><a href="#">Zurb Foundation</a></li>
        <li><a href="#">Bootstrap</a></li>
        <li><a href="#">Web App Design</a></li>
        <li><a href="#">Sketch 3</a></li>
        <li><a href="#">Sublime Text 3</a></li>
        <li><a href="#">Server Architecture</a></li>
        <li><a href="#">Apache</a></li>
        <li><a href="#">Nginx</a></li>
        <li><a href="#">Redis</a></li>
      </ul>
      <h3>You will build projects that go over all of these technologies. Don&rsquo;t know what any of these things mean? No worries because you will learn them all soon enough.</h3>
      <h2><a href="/register" class="button round large">Start Learning Today for Just $50</a></h2>
    </div>
  </div>
</section>
<section class="quick">
	<div class="row">
		<div class="small-12 medium-4 content columns">
      <h2 class="text-center"><i class="fa fa-hourglass-3"></i></h2>
			<h3 class="text-center">Learn at your own pace</h3>
			<p>The Full Stack Web School courses are all video-based so you can watch them whenever you want. No need to disappear for three months to leave your loved ones behind. Pick a time, open up your browser, and start learning. Thre is no time limit.</p>
		</div>
		<div class="small-12 medium-4 content columns">
      <h2 class="text-center"><i class="fa fa-line-chart"></i></h2>
			<h3 class="text-center">Great for all skill levels</h3>
			<p>Because the Full Stack Web School covers the whole stack of technologies you will need to get a web application up and running, it is useful for all skill levels. Pick and choose exactly what you want to learn. Just how education should be.</p>
		</div>
		<div class="small-12 medium-4 content columns">
      <h2 class="text-center"><i class="fa fa-group"></i></h2>
			<h3 class="text-center">Community Learning</h3>
			<p>Nobody likes to learn alone. When you become a student of the Full Stack Web School you will join over 400+ other students and learn along with them. Interact in the discussions for each video, join in the Slack community, and post on the Forums.</p>
		</div>
	</div>
</section>
<section class="break oil">
  <div class="row">
    <div class="small-12 columns">
      <h2 class="text-center">Over 200+ videos available and more added every weekday. Always available to you.</h2>
    </div>
  </div>
</section>
<section class="">
  <div class="row" data-equalizer>
    <div class="medium-6 columns no-padding" data-equalizer-watch>
      <div class="sublime-bg" data-equalizer-watch></div>
    </div>
    <div class="small-12 medium-6 columns content" data-equalizer-watch>
      <h2 class="text-center">Become a Full Stack Web Developer</h2>
      <p>Deciding that it is time to build out the idea in your head or start a career as a web person sounds great until you get started. That is when you realize there are a million things you do not know.</p>
      <p>It can be frustrating because everywhere you go to look for help pulls you into a different direction. Developers are supposed to learn design and designers are supposed to learn development. Both are supposed to know how to work in the command line and deploy changes to the server.</p>
      <p>You can pick up all of these things across a ton of different resources, but it can be hard putting all of the pieces together.</p>
      <p>The Full Stack Web School will show you how all of these pieces come together along with how to make them work.</p>
      <p>When you are done with the courses you will have a complete understanding of what it takes to get a number of different projects out the door. With this knowledge you can go on to design and build anything your mind can come up with.</p>
    </div>
    <div class="small-12 columns medium-4 sidebar">
    </div>
  </div>
</section>
<section class="content orange-bg text-center">
  <div class="row">
    <div class="small-12 columns">
      <h2>Join over 1000+ makers that are learning with Makers Cabin</h2>
      <ul class="logo-list">
        <li><img src="/assets/img/logos/dr.png"></li>
        <li><img src="/assets/img/logos/tw.png"></li>
        <li><img src="/assets/img/logos/fa.png"></li>
        <li><img src="/assets/img/logos/in.png"></li>
        <li><img src="/assets/img/logos/yo.png"></li>
        <li><img src="/assets/img/logos/gi.png"></li>
      </ul>
      <h2><a href="https://courses.makerscabin.com/purchase/module/web" class="button round large">Start Learning Today for Just $50</a></h2>
    </div>
  </div>
</section>
<section class="ming courses">
  <div class="row" data-equalizer data-equalizer-mq="medium-up">
    @foreach ($courses as $course)
    <div class="small-12 medium-4 columns">
      <div class="course-meta" data-equalizer-watch>
        <h4 class="subheader">{{ $course->skill }} <span class="time right"><i class="fa fa-clock-o"></i> {{ number_format(((int)$course->length / 60) / 60, 2) }} Hours</span></h4>
        <h3><a href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a></h3>
        <p>{{ substr($course->summary, 0, 120) }}...</p>
        <p><a href="{{ route('course.show', $course->id) }}">View lessons <i class="fa fa-long-arrow-right"></i></a></p>
      </div>
    </div>
    @endforeach
  </div>
</section>
<section class="content faq">
  <div class="row">
    <div class="small-12 columns">
      <h2 class="text-center">Frequently Asked Questions</h2>
    </div>
    <div class="small-12 columns medium-6">
      <p><strong>How much time do I need to commit to this?</strong><br>That is completely up to you. All of the courses are recorded videos posted online that you can view whenever you want. You set your own pace and learn when you make the time.</p>
      <p><strong>Is there any type of community involved?</strong><br>Yes, there is a Slack group open to all students which is extremely active. I am always around to help out (ask anyone).</p>
      <p><strong>How are the courses structured?</strong><br>The courses break down individual technologies that you can view (HTML, CSS, JavaScript, PHP, Git, SQL, Development Tools, etc) that you can choose to go through or skip. Each project is broken down into its own course. This way, people of all skill levels can choose how they wish to go through the material.</p>
      <p><strong>Is it too late to sign up?</strong><br>It's never too late! Once all of the projects are done being built the Full Stack Web School will remain open. Start learning today!</p>
    </div>
    <div class="small-12 medium-6 columns">
      <p><strong>Will this school work for Windows?</strong><br>Yes. The only Mac-only app that is used in the course is Sketch 3, but any graphics application (Photoshop, Illustrator, etc) can be used to follow along. If you don't want to touch any graphics applications then that is fine as well.</p>
      <p><strong>What software will I need to purchase?</strong><br>To follow along? None. I do use Sketch for some minor graphics work, but again you can use whatever graphics app you want. Everything else we use is easily downloaded of the Internet for free.</p>
      <p><strong>What skill level is required to get started with this school?</strong><br>You will have to know how to turn a computer and connect to the Internet. Beyond that the Full Stack Web School covers all skill levels.</p>
    </div>
  </div>
</section>
<section id="large-header" class="hero ming large-header">
  <div class="row">
    <div class="small-12 columns text-center">
      <h2 class="text-center">Why is this just $50?</h2>
      <h3 class="subheader">Because online education is broken and needs to change.</h3>
      <h3><a href="https://www.makerscabin.com/blog/the-full-stack-web-course/" class="button round large">Read more about the Makers Cabin philosophy <i class="fa fa-arrow-right"></i></a></h3>
    </div>
  </div>
</section>
<section class="">
	<div class="row" data-equalizer>
		<div class="small-12 medium-6 content scrivs-bg columns" data-equalizer-watch>
			<h2 class="text-center">Who is behind this?</h2>
      <!--<div class="text-center"><img class="avatar" src="/assets/img/backgrounds/scrivs.jpg"></div>-->
			<p>I am! My name is Paul Scrivens and I&rsquo;ve been developing websites since 2002. Back then development was a lot easier because there wasn&rsquo;t so much going on.</p>
      <p>However, now there are a million different technologies trying to grab your attention. I should know because I build products myself that seem to need every new shiny thing under the sun.</p>
      <p>I have spent time as a developer, designer, product manager, director of technology, founder, and it feels like a million other things. I wouldn&rsquo;t have been able to go through these different experiences if I had not taken the time to learn design and development.</p>
      <p>This is why I have created the Full Stack Web School: to give you the opportunity to choose your own path.</p>
      <p>I am here every step of your journey because I want to see you succeed.</p>
		</div>
    <div class="show-for-medium-up medium-6 no-padding columns" data-equalizer-watch>
      <div class="scrivs" data-equalizer-watch>&nbsp;</div>
    </div>
	</div>
</section>
@endsection