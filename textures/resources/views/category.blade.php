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

    <!-- Main content -->
    <section class="content">
        <div class="panel panel-primary" id="addcategorydiv" style="display: none">
            <div class="panel panel-heading">
                Add a Category
            </div>
            <div class="panel panel-body">

                    <div class="col-md-4"style="float: left">
                    <label for="categoryname">Category Name </label>
                        <br/>
                        <input type="text" id="categoryname" placeholder="Enter CategoryName">
                    </div>
                    <div class="col-md-4">
                    </div>



                <div class="col-md-4">
                    <form action="/action_page.php">
                        <input type="file" name="pic" accept="image/*">
                        <input type="submit">
                    </form>


                </div>
                <div class="pull-right">
                    <button id="categorysave" class="btn btn-primary" style="border-radius: 2px">Save</button>
                    <button id="categorycancel"class="btn btn-warning" style="border-radius: 2px">Cancel</button>
                </div>


        </div>
        </div>
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
                            <button class="fa fa-pencil"></button>
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
    <script>
        $("document").ready(function(){
            $("#categorytable").dataTable({responsive:true}
            );
        });
        $("#addcategory").click(function(){
           $("#addcategorydiv").slideDown(function(){

           });
           setTimeout(function(){ $("#addcategorydiv").slideUp(function(){

           })},3000);

        });

    </script>
@endsection