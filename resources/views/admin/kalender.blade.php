@extends('admin.master')
@section('master')
    <div class="h-28 bg-green-500 rounded-b-[60px]">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-medium text-lg">Stunting</h1>
            </div>
            <div class="text-white">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg w-80 mx-auto mb-5 overflow-hidden  mt-6">
        <div id="calendar"></div>
    </div>
    <div class="bg-white rounded-3xl shadow-xl mx-3">
        <div class="flex items-center justify-between px-5 pt-3">
            <h2 class="font-medium text-slate-600 text-sm">Jadwal Stunting</h2>
            <h2 class="font-medium text-slate-600 text-sm">08-08-2023</h2>
        </div>
        <h2 class="font-medium px-5  text-slate-600 pb-4 text-xs">Jadwal Stunting akan dilaksanakan di tempat antah berantah pada jam 
            10.00 wib</h2>
    </div>
    <div class="rounded-full w-14 h-14 flex fixed bottom-16 right-5 bg-green-600 text-[35px]">
        <div class="mx-auto text-white"> <i class="fa-solid fa-plus" ></i></div>
    </div>
@endsection
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            const currentDate = new Date();
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth'
                },
                initialDate: currentDate,
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                events: [{
                        title: 'Business Lunch',
                        start: '2023-08-03T13:00:00',
                        constraint: 'businessHours'
                    },
                    {
                        title: 'Meeting',
                        start: '2023-08-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    },
                    {
                        title: 'Conference',
                        start: '2023-01-18',
                        end: '2023-01-20'
                    },
                    {
                        title: 'Party',
                        start: '2023-01-29T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        groupId: 'availableForMeeting',
                        start: '2023-01-11T10:00:00',
                        end: '2023-01-11T16:00:00',
                        display: 'background'
                    },
                    {
                        groupId: 'availableForMeeting',
                        start: '2023-01-13T10:00:00',
                        end: '2023-01-13T16:00:00',
                        display: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2023-01-24',
                        end: '2023-01-28',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    },
                    {
                        start: '2023-01-06',
                        end: '2023-01-08',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    }
                ]
            });

            calendar.render();
        });
    </script>
@endpush
