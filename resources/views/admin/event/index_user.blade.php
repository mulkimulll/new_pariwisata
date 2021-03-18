@extends('layouts.front.index')
@section('style')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection

@section('banner')
<section class="home-banner-area" id="home">
    <div class="container h-100">
        <div class="home-banner">
            <div class="text-center">
                <h4>Event</h4>
                <a class="button home-banner-btn" href="#">Get Tickets <i class="ti-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('section')

    <div class="container">
<h3>Calendar</h3>
<div id='calendar'></div>
</div>

@endsection

@section('script')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($r as $task)
                {
                    title : '{{ $task->nama }}',
                    start : '{{ $task->tgl_mulai }}',
                    end   : '{{ $task->tgl_selesai }}',
                    url : '{{url('/bogor-event/'.$task->id)}}'
                    
                },
                @endforeach
            ]
        })
    });
</script>
@endsection