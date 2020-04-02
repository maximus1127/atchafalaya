@extends('layouts.masterback')

@section('header-styles')

<style>

  input{
    border: 1px solid gray;
  }

</style>

@endsection

@section('content')
<div class="container">
  <form method="post" action="{{route('db-csv')}}">@csrf
  <button type="submit" class="btn btn-primary">Export Client Database</button>
</form>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Created At</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
    <tr>
      <th scope="row">{{$client->lname.', '.$client->fname}}</th>
      <td>{{$client->email}}</td>
      <td>{{$client->phone}}</td>
      <td>{{$client->created_at}}</td>
      <td><a href="#"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit Details" onclick="viewDetails({{$client->id}})"><i class="zmdi zmdi-edit"></i></button></a></td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection


@section('footer-scripts')
<script>
function viewDetails(id) {
    $.ajax({
        url: "/get-client-details",
        type: "get",
        data: {
            id: id
        },
        success: function(data) {
            Swal.fire({
                title: 'Edit Info',
                html: data.html,
                confirmButtonText: "Done"
            }).then(()=>{
              $.ajax({
                  url: "/update-client-details",
                  type: "get",
                  data: {
                      id: id,
                      email: $('#client-email').val(),
                      phone: $('#client-phone').val()
                  },
                  success: function(){
                    window.location.reload()
                  }
            });
        });
    }
});
}



// function csv(){
//   // console.log('alerte')
//   $.ajax({
//     url: '/database-csv',
//     type: 'get',
//     success: function(data){
//       window.location(data)
//     }
//   })
//
// }

</script>


@endsection
