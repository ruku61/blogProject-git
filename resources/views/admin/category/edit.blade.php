@extends('admin.master')

@section('title')
    Edits blog category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Category</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-blog-category',['id'=>$blog_categories->id]) }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-4">
                                        <input type="text" name="category_name" class="form-control" value="">

                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-4">
                                        <label for=""><input type="radio" name="status"  value="1"  checked>Published</label>
                                        <label for=""><input type="radio" name="status"  value="0" >UnPublished</label>


                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-4">
                                        <input type="submit" name="" class="btn btn-success" value="updateCategory">

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

