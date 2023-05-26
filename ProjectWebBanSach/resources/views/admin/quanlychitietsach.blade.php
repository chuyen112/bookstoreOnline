@extends('layoutadmin.admin')
 
@section('content')
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
          <h1>
            Chi tiết
            <small>Sách</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->

            <!-- right column -->
  
            <div class="col-md-12" >
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Chi tiết Sách</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{URL::to('/save-sach')}}" method="post">
                    {{ csrf_field() }}
                  <div class="box-body" >
                    <div class="form-group">
                      <label  class="col-sm-2">Tên:</label>
                      <div class="col-sm-5">
                      <input type="text" name="ten" class="form-control" id="exampleInputEmail" placeholder="Tên">
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2">Hình ảnh:</label>  
                      <div class="col-sm-2">
                        <input type="file" name="hinhanh" style="width: 300px; height: 30px;"  class="form-control" id="exampleInputEmail">
                      </div>        
                    </div>
                    <div class="form-group">
                    <label  class="col-sm-2 ">Nhà xuất bản:</label>
                    <div class="col-sm-5">
                        <select name="nhaxuatban">
                            <option value="0">Không có </option>
                            <option value="1">Có </option>
                        </select>
                      </div> 
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 ">Ngày:</label>
                    <div class="col-sm-5">
                        <input type="date" name="ngay" class="form-control" id="exampleInputEmail" placeholder="Ngày">
                      </div> 
                    </div>
                    <div class="form-group">
                    <label  class="col-sm-2 ">Giá:</label>  
                       <div class="col-sm-5">
                        <input type="number" name="gia" class="form-control" id="exampleInputEmail" placeholder="Giá">
                      </div>        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">Khuyến mãi: </label> 
                        <div class="col-sm-5">
                        <select name="khuyenmai">
                            <option value="0">Không có khuyến mãi</option>
                            <option value="1">Có khuyến mãi</option>
                        </select>
                    </div>
                    </div>
                  <div class="form-group">
                    <label  class="col-sm-2 ">Mô tả: </label>
                    <div class="col-sm-5">
                        <textarea style ="resize: none" rows="8" class="form-control" name = "mota" id="exampleInputEmail" placeholder="Mô tả"></textarea>
                      </div> 
                    
                  </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                  <a href="qlysanpham.php"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                  <button type="submit" name="create" class="btn btn-info pull-right">Create</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <!-- general form elements disabled -->
            <!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @endsection 
      @include('partialsadmin.ControlSidebar')
      <div class="control-sidebar-bg">
      </div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('public/Admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('public/Admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/Admin/plugins/fastclick/fastclick.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public/Admin/dist/js/app.min.js')}}"></script>
    @section('script')
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
    @endsection
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('public/Admin/dist/js/demo.js')}}"></script>
  </body>
</html>


