@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
			 <div class="card-body">
			    <div class="card-title">
                    <div class="d-flex align-items-center">
                        <h3>{{$question->title}}</h3>
                        <div class="ml-auto">
                            <a class="btn btn-outline-secondary"
                            href="{{route('questions.index')}}">Back To All Question</a>
                        </div>
                    </div>
                </div>
                 <hr>
                <div class="media">
                 <div class="d-flex flex-column">
                  <a class="vote_up">
                  vote_up
                  </a>
                  <a class="vote_down">
                    vote_down
                   </a>
                <a class="favourite">
                 Favourite
               <span class="text-muted">
                  123
                </span>

                </a>
		  </div>
                
                    <div class="media-body">
					  {!! $question->body_html !!}
               <div class="float-right">
				  </div>	 
                 <span class="text-muted">
                   Questioned {{$question->create_date}}
               </span>
                  <div class="media">
                   <a class="pr-2" href="{{$question->user->url}}">
                    <img src="{{$question->user->avatar}}">
                  </a>
                   <div class="media-body">
                     <a href="{{$question->user->url}}">
                      {{$question->user->name}}
                  </a>
                 </div>
                </div> 
             </div> 
                </div>
            </div>
        </div>

    </div>
     <div class="row mt-5">
       <div class="col-md-12">
         <div class="card">
          <div class="card-body">
            <div class="card-title">
            <h3>
             {{$question->answers_count}}
               {{str_plural('Answer',$question->answers_count)}}
          </h3>
         </div>
         <hr>
           @foreach ($question->answers as $answer)
             <div class="media">
               <div class="media-body">
               {!! $answer->body_html !!}
               <div class="float-right">
                 <span class="text-muted">
                   Answared {{$answer->create_date}}
               </span>
                  <div class="media">
                   <a class="pr-2" href="{{$answer->user->url}}">
                    <img src="{{$answer->user->avatar}}">
                  </a>
                   <div class="media-body">
                     <a href="{{$answer->user->url}}">
                      {{$answer->user->name}}
                  </a>
                 </div>
                </div> 
             </div> 
             </div>
           </div>
            <hr>
         @endforeach
       </div>
     </div>
    </div>
   </div>
</div>
@endsection
