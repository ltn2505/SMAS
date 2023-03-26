@extends('layout')
@section('content')
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Add new account</h3>
                <form action="{{ route('account.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Account Name</label>
                        <div class="col-sm-10">
                            <input name="account_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input name="full_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="gender">
                                <option selected>Open this select menu</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Day of Birth</label>
                        <div class="col-sm-10">
                            <input name="dob" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input name="phone_number" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="role">
                                <option selected>Open this select menu</option>
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                                <option value="Collaborator">Collaborator</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
    </div>
@endsection
