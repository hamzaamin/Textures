@extends('Layout.admin')
@section('body')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">

        <div>
            <div id="overall" style="float:left"></div>
            <div id="catsubcat" style="float:right; margin-right:505px"></div>
        </div>



    </section>

    <script>

        $("document").ready(function() {


            $.ajax({
                type: "GET",
                url: "./getallproducts",
                data: "",
                success: function (data) {


                    var chart = new CanvasJS.Chart("overall", {
                        animationEnabled: true,
                        title:{
                            text: "Overall",
                            horizontalAlign: "left"
                        },
                        data: [{
                            type: "doughnut",
                            startAngle: 60,
                            //innerRadius: 60,
                            indexLabelFontSize: 15,
                            indexLabel: "{label}",

                            dataPoints: [
                                { y: data.categories, label: "Categories" },
                                { y: data.subcategories, label: "Subcategories" },
                                { y: data.products, label: "Products" }

                            ]
                        }]
                    });
                    var chart2 = new CanvasJS.Chart("catsubcat", {
                        animationEnabled: true,
                        title:{
                            text: "Categories/Subcategories",
                            horizontalAlign: "left"
                        },
                        data: [{
                            type: "doughnut",
                            startAngle: 60,
                            //innerRadius: 60,
                            indexLabelFontSize: 15,
                            indexLabel: "{label}",

                            dataPoints: [
                                { y: data.categories, label: "Categories" },
                                { y: data.subcategories, label: "Subcategories" }


                            ]
                        }]
                    });

                    chart.render();
                    chart2.render();


                }

            });


        });






    </script>
    </html>

@endsection