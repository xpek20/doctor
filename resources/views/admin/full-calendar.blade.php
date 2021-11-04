@extends(backpack_view('blank'))


@section('after_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection


@section('content')

    <div class="container" >
        <h2 class="h2 text-center mb-5 border-bottom pb-3">Ημερολόγιο</h2>
        <div id='full_calendar_events'></div>
    </div>
@endsection
    {{-- Scripts --}}
@section('after_scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src='packages/el.js'></script> --}}
    

    <script>
        
       
        
        
        
        
        $(document).ready(function () {

            var initialLocaleCode = 'el';
            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#full_calendar_events').fullCalendar({
                // locale: initialLocaleCode,
                editable: false,
                height: 670,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                buttonText: {
                    today: 'Σήμερα',
                    month: 'Μήνας',
                    week: 'Εβδομάδα',
                    day: 'Ημέρα',
                    list: 'Ατζέντα',
                },
                weekText: 'Εβδ',
                firstDay: 1,
                // dayClick: function (date, allDay, jsEvent, view) {
                //     $('#full_calendar_events').fullCalendar('gotoDate', date.year(), date.month(),
                //         date.date());
                //     $('#full_calendar_events').fullCalendar('changeView', 'agendaDay');
                // },
                dayClick: function(date, jsEvent, view) {

                $('#full_calendar_events').fullCalendar('gotoDate',date);
                $('#full_calendar_events').fullCalendar('changeView','agendaDay');

                },
                allDayText: 'Ολοήμερο',
                moreLinkText: 'περισσότερα',
                noEventsText: 'Δεν υπάρχουν γεγονότα προς εμφάνιση',
                monthNames: ['Ιανουάριος','Φεβρουάριος', 'Μάρτιος', 'Απρίλιος', 'Μάιος', 'Ιούνιος', 'Ιούλιος', 'Αύγουστος', 'Σεπτέμβριος', 'Οκτώβριος', 'Νοέμβριος', 'Δεκέμβριος'],
                monthNamesShort: ['Ιαν', 'Φεβ', 'Μάρ', 'Μάι', 'Ιουν', 'Ιουλ', 'Αυγ', 'Σεπ', 'Οκτ', 'Νοεμ', 'Δεκ'],
                dayNames: ['Κυριακή', 'Δευτέρα', 'Τρίτη', 'Τετάρτη', 'Πέμπτη', 'Παρασκευή', 'Σάββατο'],
                dayNamesShort: ['Κυ', 'Δε', 'Τρι', 'Τετ', 'Πε', 'Πα', 'Σα'],
                nowIndicator: true,
                // events: SITEURL + "/full-calendar",
                eventSources: [
                    {
                        url: SITEURL + "/admin/full-calendar",
                        
                    },
                    {
                        url: SITEURL + "/full-calendar-anesth",
                        color: "#c91b0e"
                    }
                ],
                displayEventTime: false,
                viewDisplay: function(view) {
            
                },
                windowResize: function(view) {
            
                },
                
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



        // document.addEventListener('DOMContentLoaded' , function(){
        //     var SITEURL = "{{ url('/') }}";
        //     var initialLocaleCode = 'el';
        //     var querylocale = 'en';
        //     var calendarEl = document.getElementById('full_calendar_events');
        //     var calendar = new FullCalendar.Calendar (calendarEl, {
        //         headerToolbar: {
        //         left: 'prev,next today',
        //         center: 'title',
        //         right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        //     },
        //     locale: 'initialLocaleCode',
        //     events: SITEURL + "/full-calendar",
            
        // });
        // calendar.setOption('querylocale');
        // calendar.render();
        

    // });

    
    </script>




@endsection