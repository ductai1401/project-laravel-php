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
                    <?php $i =0; ?>
                    @foreach($users as $user)
                    <?php $i++; ?>
                    <tr>   
                    <th scope="row"><?php echo $i ?></th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td><i class="fa-solid fa-pen-to-square text-success"></i></td>
                    <td><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>

</div>



@endsection