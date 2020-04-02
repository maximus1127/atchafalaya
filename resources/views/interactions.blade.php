@extends('layouts.masterback')


@section('header-styles')
<style>
  textarea{
    border: 1px solid gray;
  }


</style>

@endsection

@section('content')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">


            <!-- WELCOME-->

            <!-- END WELCOME-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container" id="app">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Active Clients</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select  name="property" id="showProperties">
                                            <option  value="all">All Clients</option>
                                            <option selected="selected" value="1">Active</option>
                                            <option value='0'>Inactive</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                </div>
                                <div class="table-data__tool-right">
                                    <a href="/add-client" ><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add Client</button></a>

                                </div>

                            </div>
                            <div class="table-responsive table-responsive-data2">
                              <clients-rows></clients-rows>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

@endsection


@section('footer-scripts')
<script>

  $("#showProperties").change(filterRows)
  $(document).ready(filterRows)

  function filterRows(){
    $('.tr-shadow').each(function(row){
      if($(this).data('active') != $('#showProperties').val()){
        $(this).hide();
      } else {
        $(this).show()
      }
      if($("#showProperties").val() == 'all'){
        $('.tr-shadow').each(function(row){
          $(this).show();
        })
      }
    })
  }

  function addNote() {
      // alert("hi");
      $.ajax({
          url: "/add-note",
          type: "post",
          data: {
              id: $("#clientId").val(),
              description: $("#addItemField").val()
          },
          success: function(data) {
              Swal.close()
          }
      });
  }

  function deleteNote(id) {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
        url: "/delete-note/" + id,
        
        type: "post",
        success: function(data) {
            $("#subTr" + id).remove();
        }
    });
}


</script>

@endsection
