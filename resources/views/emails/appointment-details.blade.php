@component('mail::message')
Hello,
{{$appointment->doctor_rel['onomateponimo']}}, 
<br>
Έχετε ένα νέο ραντεβού
<br>
Ημερομηνία: <b> {{$appointment['date']}} </b>
<br>
Ώρα: <b> {{$appointment['time']}} </b>
<br>    
Έίδος επέμβασης: <b>{{$appointment->operation_rel['name']}}</b>
<br>
Ασθενής: <b>{{$appointment['patient_name']}}</b>
<br>
Άιθουσα: <b>{{$appointment['room']}}



{{ config('app.name') }}
@endcomponent