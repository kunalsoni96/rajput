@extends('Admin.layouts.Master')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/app-assets/css/sweetalert2.min.css">
@endsection
@section('MainSection')

<div class="app-content content">
      <div class="content-wrapper">
        
<div class="content-body" style="margin-top: 20px"><!-- Input Validation start -->
<section class="input-validation" >
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="min-height: 80vh">
        <div class="card-header" style="background: #262D47; height: 60px">
          <div class="row">
            <div class="col-sm-6" style="color:white">
               Contact List
            </div>
            
          </div>
        </div>
        <div class="card-content collapse show">
           <div class="card-body card-dashboard">
                  <p class="card-text">
          </p>
            <div class="table-responsive">
                      <table class="table table-striped table-bordered sourced-data">
                      <thead>
                          <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Course</th>
                              <th>Created At</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      @php $i = 1; @endphp
                      @foreach($data as $row)
                          <tr>
                              <td>{{$i++}}</td>
                              <td>{{$row->Name}}</td>
                              <td>{{$row->Email}}</td>
                              <td>{{$row->Message}}</td>
                              <td>
                                {{$row->Mobile}}
                              </td>
                             
                              <td>{{$row->created_at}}</td>
                              
                              <td>
                                <button id="delete_popup" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <form action="#" method="post">
                                  {{csrf_field()}}
                                  <input type="hidden" name="Delete" value="{{$row->id}}">
                                  <button type="submit" style="display: none;" id="delete"></button>
                                </form>
                              </td>

                          </tr>
                      @endforeach
                      </tbody>
              </table>
            </div>
          </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--/ HTML (DOM) sourced data -->


        </div>
      </div>
    </div>
@endsection 

@section('js')
   <script type="text/javascript" src="{{url('/')}}/public/assets/app-assets/js/sweetalert2.all.min.js"></script>

@if(session()->has('success'))
   <script type="text/javascript">
      swal(
        'Success',
        'Contact Added <b style="color:green;">Successfully </b> button!',
        'success'
      )
   </script>
 @endif

 @if(session()->has('update'))
   <script type="text/javascript">
    
      swal(
        'Success',
        'Contact Updated <b style="color:green;">Successfully </b> button!',
        'success'
      )
  
   </script>
 @endif

 @if(session()->has('delete'))
   <script type="text/javascript">
    
      swal(
        'Success',
        'Contact Deleted <b style="color:green;">Successfully </b> button!',
        'success'
      )
    
   </script>
 @endif

<script type="text/javascript">
  $(document).on('click', '#delete_popup', function(e) {
        swal({
        title: "Are you sure?", 
        text: "You will be delete Contact", 
        type: "warning",
        confirmButtonText: "Yes, Delete It",
        showCancelButton: true
        })
          .then((result) => {
          if (result.value) {
              $("#delete").click();
          } else if (result.dismiss === 'cancel') {
              swal(
                'Cancelled',
                'Your stay here :)',
                'error'
              )
          }
        })
    });
</script>

@endsection