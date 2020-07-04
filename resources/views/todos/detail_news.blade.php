@extends('layouts.app1')


@section('content')
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
                <div class="text-center">
                  <h3>{{$todo->judul}}</h3>
                  <img src="{{asset('admin/dist/img/user4-128x128.jpg')}}" alt="">
                </div>
                
                 <p>{{$todo->description}}</p>
             </div>

            </div>
         
        </div>
        <div class="col-md-4">
        <div class="card card-warning card-outline">
              <div class="card-body box-profile">
                  <h3>Berita lainnya</h3>
                    <ol><li>{{$todo->judul}}</li>
                    </ol>
                  
              </div>
            </div>
        </div>

    </div>
</div>
    </section>
@endsection