@extends('admin.master')
@section('title')
    Manage Category

@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        @if(Session::has('message'))
                            <span class="text-center text-danger">{{ session::get('message') }}</span>
                        @endif
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           Manage Category
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>

                                <tr>
                                    <td>   </td>
                                    <td> </td>
                                    <td>  </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                               <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger" onclick="return confirm('Are You sure Deleted ?')">
                                            <i class="fa fa-trash"></i>

                                        </a>
                                    </td>
                                </tr>

                            </table>
                        </div>



                </div>

            </div>

        </div>
        </div>

    </section>


@endsection
