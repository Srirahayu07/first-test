@extends('layouts.app')

@section('content')
    <div class="card">

    <div class="card-body">
      <!-- Content Header (Page header) -->
      <section class="content">
     <div class="row">
      <div class="col-md-8">
@foreach($todo as $todo)
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <div>
                <div class="timeline-item">
                
                  <h3 class="timeline-header"><a>{{$todo->judul}}</a></h3>
                  
                  <div class="timeline-body card-body">
                    <span class="time"><i class="fas fa-clock"></i> {{Carbon\Carbon::parse($todo->created_at)->diffForHumans()}} </span>
                    <br>
                    
                    {{str_limit($todo->description,180,'...')}} <a href="/timeline/{{$todo->id}}/detail_news">[Baca Selengkapnya]</a>
                    <br><br>
                    <div class="float-right">
                    <p><i>Dikutip Oleh, <a href="/timeline/{{$todo->id}}/profile">{{$todo->name}}</a></i></p>
                    </div>
                  </div>
                 
                </div>
              </div>
            @endforeach

      </div>

      <div class="col-md-4">
      
     <h1>masih ksong</h1>
       
     </div>
                
        </section>
         </div>
    </div>
        
  
  @endsection

