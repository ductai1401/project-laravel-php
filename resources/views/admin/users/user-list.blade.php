@extends('admin.layouts.app')
@section("title","User")
@section('content')
<div class="col-x2-13 col-md-12 mb-12">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><i class="fa-solid fa-pen-to-square text-success"></i></td>
                    <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><i class="fa-solid fa-pen-to-square text-success"></i></td>
                    <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td><i class="fa-solid fa-pen-to-square text-success"></i></td>
                    <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>



@endsection