<meta name="description" content="Website Sekolah Gemilang Mutafannin"/>
@extends('mainlayout')
@section('content') 
<style type="text/css">
</style>
<div class="row">
    <div class="col-4">
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body p-0">
                    <div class="form-group">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="list-group-item pt-1 pb-0 col-12">
                                <div class="checkbox">
                                    <label style="margin-left:10px">
                                        <input type="checkbox" value="19" name="categories[]">
                                        Oh Ternyata
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item pt-1 pb-0 col-12">
                                <div class="checkbox">
                                    <label style="margin-left:10px">
                                        <input type="checkbox" value="19" name="categories[]">
                                        Oh Ternyata
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item pt-1 pb-0 col-12">
                                <div class="checkbox">
                                    <label style="margin-left:10px">
                                        <input type="checkbox" value="19" name="categories[]">
                                        Oh Ternyata
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <div class="col-12 mt-2">
                            <center><a class="btn btn-primary AddCategory" onclick="klikCategory(1)"><i class="fa fa-plus-circle"></i> Add New Category</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Save As</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <select class="col-12">
                                <option value="">Draft</option>
                                <option value="1">Published</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Editor</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div id="editor">
                    <h1>Hello world!</h1>
                    <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endsection