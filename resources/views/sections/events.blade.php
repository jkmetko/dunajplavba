<section id="events" class="darkgrey_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header" id="podujatia"><strong>Podujatia</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="classes">
                    <div class="row">
                        @foreach($events as $event)
                            <div class="col-md-3">
                                <a href="{{ url('podujatia/'.$event->id) }}"><img src="{{ asset('gallery/'.$event->cover()->original_name) }}" alt="Owl Image"></a>

                                <h3><a href="{{ url('podujatia/'.$event->id) }}">{{ $event->name }}</a></h3>
                                <div class="classes-description">
                                    <p class="with-icon date">{{ date('d. M Y', strtotime($event->date)) }}</p>
                                    <p class="with-icon time">{{ date('h:m', strtotime($event->time_from)) }} - {{ date('h:m', strtotime($event->time_to)) }}</p>
                                    <p class="with-icon pin"><a href="trainer-single.html">{{ $event->location }}/{{ $event->state }}</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div> <!-- eof owl-carousel -->

                <br>
                <br>

                <div class="row text-center">
                    <div class="col-md-12">
                        {{ $events->fragment('podujatia')->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>