@extends('adminlte::page')

@section('title', 'Calendario')

@section('content')
<div class="container">
  <div id="calendario">
    
  </div>
</div>
@stop

@section('js')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      
      initialView: 'dayGridMonth',

      locale:"es",

      headerToolbar: {
        left: 'prev,next,today',
        center: 'title',
        right: 'dayGridMonth, timeGridWeek, dayGridDay'
      },

    });
    calendar.render();
  });
</script>
@stop