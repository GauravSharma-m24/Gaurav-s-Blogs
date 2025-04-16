<!DOCTYPE html>
<html>
  <head> 

  <base href="/public">
   @include('admin.adminCss')
  
   <style>
    .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;   
        padding: 30px;
    }

    .div_center{
        text-align: center;
        padding: 30px;
    }

    label{
        display: inline-block;
        width: 150px;
    }
   </style>


  </head>
  <body>
    @include('admin.AdminHeader')
    <div class="d-flex align-items-stretch">
      @include('admin.AdminNav')
      <div class="page-content">

      <h1 class="post_title">Update Post</h1>

      <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_center">
                    <label for="">Post Title</label>
                    <input type="text" name="title" value="{{$post->title}}">
                </div>
                <div class="div_center">
                    <label for="">Post Description</label>
                    <textarea name="description" rows="10" cols="60">{{$post->description}}</textarea>
                </div>
                <div class="div_center">
                    <label for="">Old Image</label>
                    <img style="margin: auto;" src="/postimage/{{$post->image}}" height="100px" width="150px">
                </div>
                <div class="div_center">
                    <label for="">Update old Image</label>
                    <input type="file" name="image">
                </div>
                <div class="div_center">
                    
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>  
      
      </div>
      </div>
       @include('admin.AdminFooter')
    

      
</body>
</html>