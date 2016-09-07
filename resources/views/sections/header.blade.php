<header id="header">
    <div class="container"><div class="row">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/zk_dunajplavba-logo.png') }}" class="logo" alt="">
                <span class="title">ZK Dunajplavba</span>
            </a>

            <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
                <ul id="mainmenu" class="menu sf-menu responsive-menu superfish">
                    <li class="active">
                        <a href="{{ url('/') }}">Domov</a>
                    </li>
                    <li>
                        <a href="{{ url('/#onas') }}">O nás</a>
                    </li>

                    <li class="dropdown">
                    <a href="./classes.html">Podujatia</a>
                    <ul class="dropdown-menu">
                    <li class="">
                    <a href="./classes.html">Náš plán</a>
                    </li>
                    <li class="">
                    <a href="./classes.html">Naše turnaje</a>
                    </li>
                    <li class="">
                    <a href="http://www.zapasenie.sk/podujatia/2015-2/domace/" target="_blank">Slovenské turnaje</a>
                    </li>
                    <li class="">
                    <a href="https://unitedworldwrestling.org/events" target="_blank">Svetové turnaje</a>
                    </li>
                    </ul>
                    </li>

                    <li>
                        <a href="{{ url('/#clenovia-klubu') }}">Detská prípravka</a>
                    </li>
                    <li>
                        <a href="{{ url('/#clenovia-klubu') }}">Členovia klubu</a>
                    </li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="./classes.html">Classes</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="">--}}
                                {{--<a href="./classes.html">Classes</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="./class-single.html">Single Class</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="./timetable.html">Timetable</a>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="./trainers.html">Trainers</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="">--}}
                                {{--<a href="./trainers.html">Trainers</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="./trainer-single.html">Single Trainer</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="./404.html">Pages</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="">--}}
                                {{--<a href="./blog.html">Blog</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="./blog-single.html">Blog Post</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="./shortcodes.html">Shortcodes</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="./404.html">404</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="./icons.html">Icons</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    <li>
                        <a href="{{ url('/#onas') }}">Partneri</a>
                    </li>
                    <li class="">
                        <a href="{{ url('kontakt') }}">Kontakt</a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <li class="">
                            <a href="{{ url('admin') }}"><i class="glyphicon glyphicon-log-in"></i></a>
                        </li>
                    @endif

                </ul>
            </div>

        </div></div>
</header>