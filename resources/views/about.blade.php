@extends('layout.main')

@section('content')
<div class="container" style="margin-top:70px;">

 <div class="row">
     <div class="col-lg-12">
         <h1 class="page-header  text-primary">About
             <small>Blood Bank</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="{{route('home')}}">Home</a>
             </li>
             <li class="active">About</li>
         </ol>
     </div>
 </div>

 <div class="row">
     <div class="col-md-6">
         <img class="img-responsive" src="images/contact.jpg" alt="">
     </div>
     <div class="col-md-6">
         <h2 class="text-primary">About Blood Bank</h2>
         <p>
         Blood banking is the process that takes place in the laboratory to ensure that donated blood, or blood products, are safe before they are used in blood transfusions and other medical procedures. Blood banking includes typing the blood for transfusion and testing for infectious diseases.The term "blood bank" typically refers to a division of a hospital where the storage of blood product occurs and where proper testing is performed (to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, and indeed some hospitals also perform collection.
         </p>
     </div>
 </div>
</div>
{{--<script src="{{asset('assets/js/jquery.js')}}"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>--}}
@endsection






