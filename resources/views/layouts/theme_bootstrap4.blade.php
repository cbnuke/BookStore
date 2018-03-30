<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="BookStore System">
  <meta name="author" content="CBNUKE">
  <link rel="icon" href="{{asset('favicon.ico')}}">

  <title>{{config('app.name')}}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/pricing.css')}}" rel="stylesheet">
</head>

<body>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">{{config('app.name')}}</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{route('home')}}">หน้าหลัก</a>
      <a class="p-2 text-dark" href="{{route('types.index')}}">ประเภทหนังสือ</a>
      <a class="p-2 text-dark" href="{{route('books.index')}}">หนังสือ</a>
      <a class="p-2 text-dark" href="{{route('members.index')}}">สมาชิก</a>
      <a class="p-2 text-dark" href="{{route('sells.index')}}">ขายหนังสือ</a>
    </nav>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
@section('page-title')
    <h1 class="display-4">Pricing</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default
      Bootstrap components and utilities with little customization.</p>
    @show
  </div>

  <div class="container">

    
@section('page-content') This is content. @show

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">&copy; 2018</small>
        </div>
      </div>
    </footer>
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>