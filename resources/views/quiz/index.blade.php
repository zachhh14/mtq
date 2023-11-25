<ul>
    @foreach($quizzes as $quiz)
    <p>{{$quiz->id}} {{ $quiz->question }}</p>
    <p>ANSWER: {{ $quiz->answer }}</p>
    @endforeach
</ul>
