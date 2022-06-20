
@extends('admin.master')

@section('title')
    Add blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Blog</h4>

                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <span class="text-center text-danger">{{ session::get('message') }}</span>
                            @endif
                            <form action="" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Category Name</label>
                                    <div class="col-md-8">
                                        <select name="blog_category_id" id="" class="form-control">

                                            <option  value=""> </option>


                                        </select>

                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control">

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"> Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control"></textarea>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"> Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control"></textarea>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Featured Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">

                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-4">
                                        <label for=""><input type="radio" name="status" value="1" checked>Published</label>
                                        <label for=""><input type="radio" name="status" value="0">UnPublished</label>


                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-4">
                                        <input type="submit" name="" class="btn btn-success" value="addBlog">

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


@endsection
