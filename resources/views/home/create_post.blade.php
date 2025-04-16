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
      @include('home.homecss')
   </head>
   <body>
        @include('sweetalert::alert')

      @include('home.header')
      

      <h1 class="post_title">Add Post</h1>
        <br><br>

        <div>
            <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_center">
                    <label for="">Post Title</label><br>
                    <input type="text" name="title">
                </div>
                <div class="div_center">
                    <label for="">Post Description</label><br>
                    <textarea name="description" id="" rows="15" cols="100"></textarea>
                </div>
                <div class="div_center">
                    <label for="">Add Image</label><br>
                    <input type="file" name="image">
                </div>
                <div class="div_center">
                    
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
     
     
     
      
      
      @include('home.footer')
      
   
   </body>
</html>