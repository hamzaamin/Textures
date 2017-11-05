@extends('Layout.admin')
@section('body')

    <section class="content-header">
        <h1>
            Texture Categories

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-folder"></i> Home</a></li>
            <li class="active">Categories</li>
        </ol>
    </section>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width:100%;">

            <!-- Modal content-->
            <div class="modal-content" style="width:30%;">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" style="" class="pull-right round-button"><i class="fa fa-remove fa-lg text-red"></i></a>
                    @*<button type="button" class="close" data-dismiss="modal">&times;</button>*@
                    <label>Delete </label>
                </div>
                <div class="modal-body">
                    <p>Are You Sure You Want To Delete This Record ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="Yespop" class="btn btn-lg btn-success ">Yes</button>
                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">No</button>
                </div>
            </div>

        </div>
    </div>
    <form action="addnewcategory" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <!-- Main content -->

        <div class="panel panel-primary" id="addcategorydiv" style="display: none">
            <div class="panel panel-heading">
                Add a Category
            </div>
            <div class="panel panel-body">

                    <div class="col-md-4"style="float: left">
                    <label for="categoryname">Category Name </label>
                        <br/>
                        <input type="text" name="categoryname" placeholder="Enter CategoryName">
                    </div>
                    <div class="col-md-4">
                    </div>



                <div class="col-md-4">

                    <input type="file" id="image">



                </div>
                <div class="pull-right">
                    <button id="categorysave" type="submit" class="btn btn-primary" style="border-radius: 2px">Save</button>
                    <button id="categorycancel"class="btn btn-warning" style="border-radius: 2px">Cancel</button>
                </div>


        </div>
        </div>
    </form>
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <button class="fa fa-plus-circle pull-right" id="addcategory" style="background-color: red;border-radius: 4px"> Add Category</button>
            <h4>Category List</h4>

        </div>

        <div class="panel panel-body">
            <div class="table-responsive">
                <table id="categorytable" class="table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Edit</th>
                        <th> Id</th>
                        <th> Name</th>
                        <th style="color:red">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorylist as $cat)
                    <tr>
                        <td>
                            <button class="categorylist fa fa-pencil" categorry_id="{{$cat->id}}"></button>
                        </td>

                        <td>
                            {{$cat->id}}
                        </td>
                            <td>
                                {{$cat->name}}
                            </td>

                            <td>
                                <button class="fa fa-trash" style="color:red"></button>
                            </td>
                                              </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </section>

    <script type="text/javascript">
        $("document").ready(function(){
            $("#categorytable").dataTable({responsive:true}
            );

        });

        $("#addcategory").click(function(){
           $("#addcategorydiv").slideDown(function(){

           });


        });

        $(".categorylist").click(function(){
             var category=$(this).attr('categorry_id');
             $.ajax({
             type:"GET",
             url:"./index",
             data:"",
                 success:function(){
                 alert("hello");
                 }

             });
        });
    </script>
@endsection