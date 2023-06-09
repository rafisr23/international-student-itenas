<x-mail::message>
# Interview Invitation

Dear {{ $student->first_name }},<br>

Thank you for your interest in joining Institut Teknologi Nasional Bandung. We appreciate the time you've taken to apply for the {{ $form->studyProgram->name }} program.<br>

After reviewing your form, we would like to invite you to attend an interview session on:<br>

<x-mail::table>
| Interview Date       | Interview Time         | Interview Room  |
| :------------------: |:----------------------:| :--------------:|
| {{ date('j F Y', strtotime($form->interviewSchedule->interview_date)) }}      | {{ date('g:i A', strtotime($form->interviewSchedule->interview_time)) }}      | {{ $interviewSchedule->interview_room}}      |
</x-mail::table>
<br><br>

{{-- 
<x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Yours Sincerely,<br>
Itenas International Office<br><hr>

Note: Don't forget to bring your document to the interview session.
</x-mail::message>
