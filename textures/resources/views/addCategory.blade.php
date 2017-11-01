<!DOCTYPE html>
<html>
 <head>

<script src="//code.jquery.com/jquery-1.12.4.js" type="text/javascript">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript">


  
  <meta charset="UTF-8">
<script src="/js/ifhjYdVTo1ah9vku6SFr83JvZcA.js"></script>
<link rel="stylesheet" type="text/css" href="/css/styles.css" />
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<meta name="csrf-token" content="{{ csrf_token() }}">
<title>App name</title>
<link rel="icon" href="images/favicon-16.png" sizes="16x16" type="image/png">
<link rel="icon" href="images/favicon-32.png" sizes="32x32" type="image/png">
<link rel="icon" href="images/favicon-64.png" sizes="64x64" type="image/png">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<style></style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
<meta name="description" content="Textures.com is a website that offers digital pictures of all sorts of materials. Sign up for free and download 15 free images every day!" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=yes" />
<meta property="og:site_name" content="Textures.com" />
<meta property="og:title" content="Textures.com" />
<meta property="og:image" content="http://www.textures.com/images/facebook_generic_share.jpg?v=4" />
<meta property="og:image:secure_url" content="https://www.textures.com/images/facebook_generic_share.jpg?v=4" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="600" />
<meta property="og:description" content="Textures for 3D, Graphic Design and Photoshop 15 Free downloads every day!" />
<meta property="og:type" content="product" />



  
  
  
  
 </head>

 <body>



    <br> <br> <br>
    <form style="margin-left:45%" action="/admin" enctype="multipart/form-data" method="post">

        {{csrf_field()}}

        <label style="color:white"> Category Name  </label> &nbsp;&nbsp;


        <input type="text" name="fname">


        <input type="file" name="image">


        <br><br><br>

        <input  class="join login-header-button" type="submit" value="Upload" >

    </form>


<br/><br/><br/>



<div id ="addRows">  
<table cellpadding="0" cellspacing="0" class="download_table">
<tr class="main_tr">
<td width="335">Category ID </td>
<td width="280">Category Name</td>
<td width="280">Category Image</td>
</tr>










</table>


<div id="hello"> 

</div>





<script>
       
        $(document).ready(function() {
                        
                     //  debugger;
					//	alert('hello');
						
					
                    //$('#bro').dataTable();


                      $.get("{{ URL::to('/student/read-data') }}",function(data){
                    
                 //   alert('jiggar');
                           // alert(data);
                   // console.log(data);
                    //alert(data.tostring());
                   // alert('hello3');

                    $.each(data, function(index,value){


                           
                       // alert(value.name);

					//	alert(value.imageUrl);
                    //    alert(value.name);



var a = '<table id="bro" cellpadding="0" cellspacing="0" class="download_table" style="background-color:white">\
<tr class="main_tr">\
<td width="335">' + value.name +'</td>\
<td width="280">' + value.name +'</td>\
<td width="280">' + value.name +'</td>\
</tr>\
</table>';

                   /*var a ='<tr>\
<td><a href="http://www.textures.com/people/view/contributor/97">' + value.name +'</a></td>\
<td width="280">' + value.name +'</td>\
</tr>\
';*/
    
						
						$('#hello').append(a);


                                          

                    }); 

              }) 

            });		
						
						
					


                        
       </script>



</body>