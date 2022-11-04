@include('includes.navbar')

<style>
    svg{
        display: none;
    }
</style>
@if (sizeof($employees))
<div class="container">
    <h1>Employee List</h1>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm">
            <a href="{{ url('employees/create') }}" class="btn btn-success">Add Employee</a>
        </div>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>
                    <a href="{{ url('employees/edit', $employee->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{ url('employees/delete', $employee->id) }}" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
 <div class="container mt-5">
    <h1 class="text-center text-danger">No Record Found</h1>
    <p class="text-center">Click on Below link and Add New Employee</p>
    <p class="text-center">
        <a href="{{ url('employees/create') }}" class="btn btn-success text-center" >Add Employee</a>

    </p>


 </div>
@endif

<div class="container">
    {!! $employees->links() !!}
</div>



<!-- {{ $employees->links()}}; -->

@include('includes.footer')