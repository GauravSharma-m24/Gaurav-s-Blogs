<!DOCTYPE html>
<html>
  <head> 
   @include('admin.adminCss')

   <style>
    .post_title{
        font-size: 30px;
        font-weight: bold;  
        padding: 30px;
        
    }

    .div_center{
        padding: 30px;
    }

    label{
        display: inline-block;
        width: 150px;
    }
   </style>
  </head>
  <body>
    <a href="{{url('Admin_Dashboard')}}">back</a>
    <div class="">
      @if (session()->has('message'))
      
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>

      @endif

        <h1 class="post_title">Add Post</h1>
        <br><br>

        <div>
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
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
      </div>

       @include('admin.AdminFooter')
</html>admincss/