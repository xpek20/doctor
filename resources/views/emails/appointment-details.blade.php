@component('mail::message')
Hello,
{{$appointment->doctor_rel['onomateponimo']}}, 
<br>
Έχετε ένα νέο ραντεβού
<br>
Έναρξη: <b> {{$appointment['start']}} </b>
<br>
Λήξη: <b> {{$appointment['end']}} </b>
<br>    
Έίδος επέμβασης: <b>{{$appointment->operation_rel['name']}}</b>
<br>
Ασθενής: <b>{{$appointment->patient_rel['name']}}</b>
<br>
Άιθουσα: <b>{{$appointment['room']}}



{{ config('app.name') }}
@endcomponent