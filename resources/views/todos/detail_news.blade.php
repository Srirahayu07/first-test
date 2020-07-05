@extends('layouts.app1')


@section('content')
<style>
    

.sticker {
    position: relative;
    height: 80px;
    width: 80px;
    background: url(https://2.bp.blogspot.com/-BBx70tsKzTQ/WKuUWrml-lI/AAAAAAAAEFk/EhAj_uISOV85dK1GHt1TuikfN2zAC9kVACPcB/s1600/burung.png);
    background-size: 320px 320px;
    cursor: default;
    background-position: 0px 0px;
    image-rendering: -webkit-optimize-contrast;
}
.justify { text-align: justify;}


</style>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/timeline">Timeline</a></li>
              <li class="breadcrumb-item active">Detail News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-md-8">
         <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                  <p><i>{{ date('d F Y', strtotime($todo->created_at)) }}</i></p>
                  <p>oleh <i>{{$todo->name}}</i></p>
                <div class="text-center">
                  <h3>{{$todo->judul}}</h3></div>
                  <div class="sticker" id="stiker"></div>

                    <script src="stiker.js" stype="text/javascript"></script>
                  
                
                
                 <p class="justify">{{$todo->description}}</p>
             </div>

            </div>
         
        </div>
        <div class="col-md-4">
        <div class="card card-warning card-outline">
              <div class="card-body box-profile">
                  <h3>Berita lainnya</h3>
                    
                     <ol>
                       <li>{{$todo->judul}}</li>
                     </ol>
                     
                  
              </div>
            </div>
        </div>

    </div>
</div>
    </section>

    <script>
        var x = 0;
var y = 0;

setInterval(function(){

    x -= 80
    if( x == -320){
        x = 0;
        y -= 80;
    } else {

        if(y == -240)
        {
            y = 0;
        }
    }

    document.getElementById('stiker').style.backgroundPositionX = String(x) + "px";
    document.getElementById('stiker').style.backgroundPositionY = String(y) + "px";

}, 100);
    </script>
@endsection