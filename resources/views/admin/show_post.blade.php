<!DOCTYPE html>
<html>
  <head> 
   @include('admin.adminCss')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style>
    .title_deg{
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
    }

    .table_deg{
        width: 80%;
        margin-left: 70px;
    }

    .table_head{
        background-color: #047857;
        color:#fcd34d;
    }

    .image_deg{
        height: 100px;
        width: 150px;
        padding: 10px;
    }

   </style>
  </head>
  <body>
    @include('admin.AdminHeader')
    <div class="d-flex align-items-stretch">
      @include('admin.AdminNav')
      <div class="page-content">

      @if (session()->has('message'))
        <di class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </di>
      @endif

        <h1 class="title_deg text-center">All Posts</h1>

        <table 
        class=" table_deg text-center"
        cellpadding="5px"
        >
            <tr class="table_head">
                <th>Title</th>
                <th>Description</th>
                <th>Post By</th>
                <th>Post Status</th>
                <th>Usertype</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
                <th>Accept</th>
                <th>Reject</th>
            </tr>
        @foreach ($post as $post)
        
        
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td>
                    <img src="postimage/{{$post->image}}" class="image_deg">
                </td>
                <td>
                    <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger"
                     onClick="confirmation(event)">Delete</a>
                </td>
                <td>
                    <a href="{{url('edit_page',$post->id)}}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <a href="{{url('accept_post',$post->id)}}" onclick="return confirm('Going to Accept? Give another thought!')" class="btn btn-outline-primary">Accept</a>
                </td>
                <td>
                    <a href="{{url('reject_post',$post->id)}}" onclick="return confirm('Going to Reject? Give another thought!')" class="btn btn-outline-secondary">Reject</a>
                </td>
            </tr>
        @endforeach
        </table>
      </div>
      </div>
       @include('admin.AdminFooter')
    

       <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                title:"Are You Sure ?",
                text:"This will delete the data Permanently.",
                icon:"warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if(willCancel){
                    window.location.href = urlToRedirect;
                }
            });
        }
       </script>
</body>
</html>