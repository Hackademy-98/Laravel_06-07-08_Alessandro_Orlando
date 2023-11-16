<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Register</h1>
            </div>
            <div class="col-12">

                <form method="POST" action="{{ route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" name="name">
                      </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">                        <label for="password_confirmation" class="form-label">Password</label>
                    </label>
                        <input type="password" class="form-control" id="password_confirmation" name="password">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

                  </div>

            </div>
        </div>
    </div>

    
</x-layout>