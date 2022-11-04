@include('includes.navbar')


<div class="container mt-5">

    @if(Session::has('error'))
    <div class="alert alert-success">
        {{Session::get('error')}}
    </div>
    @endif

    <h1 class="text-center"> @if(isset($employee)) Update @else Add @endif Employee Record</h1>

    <form action=" @if(isset($employee))  {{ url('employees/update', $employee->id) }} @else {{ url('employees') }} @endif " method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Employee Name</label>
            <input type="text" value="@if(isset($employee)) {{ $employee->name }}  @endif " name="name" placeholder="Enter Employee Name Here" class="form-control" style="padding:12px" id="name">


            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Employee Email</label>
            <input type="email" value="@if(isset($employee)) {{ $employee->email }}  @endif " name="email" placeholder="Enter Employee Email Here" style="padding:12px" class="form-control" id="exampleInputPassword1">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Emplyee Address</label>
            <input type="text" value="@if(isset($employee)) {{ $employee->email }}  @endif " placeholder="Enter Employee address here" style="padding:12px" name="address" class="form-control" id="exampleInputPassword1">
            @error('address')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary"> @if(isset($employee)) Update @else Add @endif Employee </button>


    </form>

</div>



@include('includes.footer')