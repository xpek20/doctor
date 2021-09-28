@extends(backpack_view('blank'))


@section('after_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection


@section('content')

    <div class="container mt-5" style="max-width: 700px">
        <h2 class="h2 text-center mb-5 border-bottom pb-3">Test </h2>
        <div id='full_calendar_events'></div>
    </div>
@endsection
    {{-- Scripts --}}
@section('after_scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src='resources\js\calendar\el.js'></script>

    <script>
        $(document).ready(function () {

            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#full_calendar_events').fullCalendar({
                locale:'el',
                editable: false,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                events: SITEURL + "/full-calendar",
                displayEventTime: false,
                
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },                
            });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');            
        }

    </script>




@endsection