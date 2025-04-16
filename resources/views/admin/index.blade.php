<!DOCTYPE html>
<html>
  <head> 
   @include('admin.adminCss')
  </head>
  <body>
    @include('admin.AdminHeader')
    <div class="d-flex align-items-stretch">
      @include('admin.AdminNav')
     @include('admin.AdminBody')
       @include('admin.AdminFooter')
</html>