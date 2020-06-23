<form class="" action="" method="">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-8">
                <div class="form-group">
                    <label>Product name</label>
                    <input type="text" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" value="" id="tinymce" class="form-control" style="height: 650px"></textarea>

                </div>

        </div>
        <div class="col-md-4">
            <div class="" style="background-color: #e4e5e6; padding: 10px;">
                <div class="form-group">
                    <label>Product Type</label>
                   <select class="form-control" name="product_type">
                       <option value="Downloadable">OpenSource Product</option>
                       <option value="Downloadable">License Product</option>
                       <option value="Downloadable">Physical Product</option>
                   </select>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="product_type">
                        <option value="Downloadable">OpenSource Product</option>
                        <option value="Downloadable">License Product</option>
                        <option value="Downloadable">Physical Product</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Product Image</label>
                    <div class="" style="border-style:dashed;border-width: 2px;height: 300px;border-color: #bababa;text-align: center;background-color: white;"  data-toggle="modal" data-target="#file_manager_dialog">
                        <i class="fa fa-image" style="font-size: 60px;padding-top: 100px;color: #e4e5e6;"></i>
                        <h4 style="color: #e4e5e6">Image Here</h4>
                    </div>
                </div>

                <div class="form-group">
                    <label>URL</label>
                    <input type="text" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>

            </div> <br>

            <button type="submit" class="btn btn-primary">Save Product</button>
        </div>
    </div>
</form>


@include('backend.dialogs.file_manager_dialog')

<script>
    $('#file_manager_dialog').on('show.bs.modal', function (e) {
      console.log('Hello');
    })
</script>


<script>
    tinymce.init({
        selector: "#tinymce",
        toolbar: true,
        menubar: false,
    });
</script>