@extends('admin.master')

@section('title')
    Add blog category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Category</h4>

                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <span class="text-center text-danger">{{ session::get('message') }}</span>
                                @endif
                            <form action="{{ route('new-blog-category') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-4">
                                        <input type="text" name="category_name" class="form-control">

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
                                    <input type="submit" name="" class="btn btn-success" value="addCategory">

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
