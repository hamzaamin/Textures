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

    <head>
        <script>
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    title:{
                        text: "Email Categories",
                        horizontalAlign: "left"
                    },
                    data: [{
                        type: "doughnut",
                        startAngle: 60,
                        //innerRadius: 60,
                        indexLabelFontSize: 17,
                        indexLabel: "{label} - #percent%",
                        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                        dataPoints: [
                            { y: 67, label: "Inbox" },
                            { y: 28, label: "Archives" },
                            { y: 10, label: "Labels" },
                            { y: 7, label: "Drafts"},
                            { y: 15, label: "Trash"},
                            { y: 6, label: "Spam"}
                        ]
                    }]
                });
                chart.render();

            }
        </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </body>
    </html>
@endsection