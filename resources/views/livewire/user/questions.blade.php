<div>
    <div class="container sm:pt-10 pt-6">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-5xl text-4xl leading-none mb-0 uppercase">Mis preguntas</h1>
        </div>
    </div>
    <div class="container sm:pt-5 sm:pb-10 pt-6 pb-5">
        @if(count($questions) > 0)
            @foreach($questions as $question)
                <div class="bg-white px-5 py-3 border border-gray-300 my-5">
                    <p class="mb-0 font-semibold text-red">{{$question['activity']['title']}}</p>
                    <p class="mb-3"><b>Pregunta: </b> {{$question['question']}}</p>
                    @if($question['answer'])
                        <hr class="my-3">
                        <p><b>Respuesta: </b> {{$question['answer']}}</p>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
</div>
