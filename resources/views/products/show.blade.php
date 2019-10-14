@extends('layout.store');

@section('content')
    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            
            <strong>Store</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          @include('inc.messages')
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                    <div class="card-body">
                        <p>{{ $product->Name }}</p>
                      <p class="card-text">{{ $product->Description }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                          {!! Form::open(['action' => 'PlacesOrderController@store','method' => 'POST']) !!}
                              <div class="form-group">
                                {{ Form::label('Email','Enter Your Email to place order') }}
                                {{  Form::text('Email','',['class'=>'form-control ']) }}
                              </div>
                              <div class="form-group">
                                {{  Form::text('Name',$product->Name,['class'=>'form-control hide']) }}
                              </div>
                              <div class="form-group">
                                {{  Form::text('Price',$product->Price,['class'=>'form-control hide']) }}
                              </div>
                              {{ Form::submit('Place Order',['class'=>'btn btn-sm btn-outline-secondary']) }}
                          {!! Form::close() !!}  
                        <h4 class="text-muted">R{{ $product->Price }}</h4>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <a href="/" class="btn btn-default">Go back</a>
        </div>
      </div>
     
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       var count = parseInt($('.viewcount').val());
       var counttotal = count + 1;
      
       
      });
    </script>
  @endsection