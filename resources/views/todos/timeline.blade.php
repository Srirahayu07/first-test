@extends('layouts.app1')


@section('content')
<section class="content-header">
      <div class="container-fluid">
          <h1>Timeline</h1>
        
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
       <form action="/timeline/cari" method="GET">
            <label>Pencarian: </label>
            <input type="text" name="cari" style="width:500px;" placeholder="Cari Judul Berita / Tanggal Berita/ Narasumber" value="{{ old('cari') }}">
              <input type="submit" value="CARI"> <br>
             
            </form><br>
        <!-- Timelime example  -->
        <div class="row">
            
          <div class="col-md-12">
           
            
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              	
		          @if (count($todo))
               @foreach($todo as $todo)
              <div class="time-label">
                <span class="bg-dark">{{ date('l, d F Y', strtotime($todo->created_at)) }}</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <div>
                <i class="fas fa-comments bg-blue"></i>
                
                <div class="timeline-item">
                  
                  <span class="time"><i class="fas fa-clock"></i> {{Carbon\Carbon::parse($todo->created_at)->diffForHumans()}} </span>
                  <h3 class="timeline-header"><a>{{$todo->judul}}</a></h3>
                  <div class="timeline-body card-body">
                    
                    {{str_limit($todo->description,180,'...')}} <a href="/timeline/{{$todo->id}}/detail_news">[Baca Selengkapnya]</a>
                    <br><br>
                    <div class="float-right">
                    <p><i>Dikutip Oleh, <a href="/timeline/{{$todo->id}}/profile">{{$todo->name}}</a></i></p>
                    </div>
                  </div>
                 
                </div>
              </div>
            
              <!-- END timeline item -->
              <!-- timeline time label -->
              @endforeach
                @else
            <div class="alert alert-danger">Data Tidak Ditemukan</div>
              @endif
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
@endsection