@extends('layout')
@section('content')


<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h3 class="mb-4">Edit account</h3>
        <form action="{{ route("account.update",$account->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Account Name</label>
                <div class="col-sm-10">
                    <input name="account_name" value="{{ $account->account_name }}" type="text" class="form-control" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" value="{{ $account->password }}" type="password" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input name="full_name" value="{{ $account->full_name }}" type="text" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                        <select class="form-select"  name="gender">
                            <option selected>Open this select menu</option>
                            <option value="Male" {{ $account->gender =="Male"?'selected':'' }}>Male</option>
                            <option value="Female" {{ $account->gender =="Female"?'selected':'' }}>Female</option>
                        </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Day of Birth</label>
                <div class="col-sm-10">
                    <input name="dob" value="{{ $account->dob }}" type="date" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" value="{{ $account->email }}" type="email" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input name="phone_number" value="{{ $account->phone_number }}" type="text" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <select class="form-select"  name="role">
                        <option selected>Open this select menu</option>
                        <option value="Admin"{{ $account->role =="Admin"?'selected':'' }}>Admin</option>
                        <option value="Staff"{{ $account->role =="Staff"?'selected':'' }}>Staff</option>
                        <option value="Collaborator"{{ $account->role =="Collaborator"?'selected':'' }}>Collaborator</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

</div>
@endsection
