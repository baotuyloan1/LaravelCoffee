<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin</title>
    <base href="{{asset('')}}" >

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">











</head>

<body>

    <div id="wrapper">

       @include('admin.layout.header')

        <!-- Page Content -->
       @yield('content')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

    function xacnhanxoa(msg) {
        if (window.confirm(msg)) {
            return true ;
        }
        return false ;
    }
    //Xóa Hình Detail Jquery Ajax

    $(document).ready(function() {
       
        $("#addImages").click(function() { 
            
            $("#insert").append('<div class="form-group"><input type="file" name="fEditDetail1[]"></div>') ;
        });
    }) ;
    $(document).ready(function() {
        $("a#del_img_demo").on('click',function(){
       
            var url = "http://localhost/doan2/ducbao/admin/product/delimg/" ;
            var _token = $("form[name='frnEditProduct']").find("input[name='_token']").val() ;

           var idHinh = $(this).parent().find("img").attr("idHinh");
  
          var img = $(this).parent().find("img").attr("src") ;

      
      
            var rid = $(this).parent().find("img").attr("id") ;
            $.ajax({
                url: url + idHinh,
                type: 'GET' ,
                cache: false ,
                data: {"_token":_token,"idHinh":idHinh,"urlHinh":img},
                success: function(data) {
                    if (data = "Oke") {
                        $("#"+rid).remove();

                    }else {
                        alert("Lỗi") ;
                    }
                }
                 });
        });
    });

    </script>



    @yield('script')
</body>

</html>
