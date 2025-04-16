<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Gaurav's Blog</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
       <base href="/public">
      @include('home.homecss')
   </head>
   <body>
    
    @include('home.header')
   
    
    <!-- <div class="col-md-12">
                     <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                     <h1>{{$post->title}}</h1>
                     <h3>{{$post->description}}</h3>
                     <p>Posted by <b>{{$post->name}}</b></p>
                     <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
    </div> -->
    <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_right_0">
                  <div><img src="/postimage/{{$post->image}}" class="about_img"></div>
               </div>
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">{{$post->title}}</h1>
                     <p class="about_text">{{$post->description}}</p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      @include('home.footer')
         
   </body>
</html>
