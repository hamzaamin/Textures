@extends('Layout.master')
@section('body')
    <br/>
    <br/>
    <div id="maincontent">
        @foreach($category as $cat)

            <div class="thumbnail"  >
                <h3 style="color:white"> {{$cat->name}} </h3>
                <br/>
                <a href="{{ url('/category/'.$cat->name) }}">
                    <div style="position:relative;width:100%;height:100%">
                        <img src="{{URL::asset('storage/Images/'.$cat->pitcure)}}"width="97" height="97" border="0">
                        <div class="transition_background"></div>

                    </div>
                </a>

            </div>

            @endforeach

    </div>
    <script type="text/css">
    #maincontent{
        text-color:white;
    }
    </script>
@endsection
