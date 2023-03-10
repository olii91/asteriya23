@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12">
          <form method="POST" action="{{ route('user.store') }}">
              @csrf
               <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                    <label for="name"> Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="telepon" class="form control" id="telepon" placeholder="telepon">
                    <label for="telepon">Telepon</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email"name="email" class="form-control" id="email" placeholder="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="from-control" id="password" pleaceholder="password">
                    <label for="password">Password</lable>
                </div>

                <div class="form-floating mb-3">
                    <select id="level" class="form-control @error('level') is-invalid @enderror"  name="level" required>
                        <option value="">Pilih Level User</option>
                        <optiom value="administrator"> administrator</option>
                        <option value="petugas"> petugas</option>
                    </select>
                        @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message}}</strong>
                            </span>
                        @enderror
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection