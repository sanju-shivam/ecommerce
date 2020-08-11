
                        <div class="login-body">
                            <form method="POST" action="{{ route('register') }}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="email" class="form-control" 
                                    name="email" value="{{ old('email') }}" placeholder="Enter email">
                                    <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror -->
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control"  placeholder="Password">
                                   <!--  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror -->
                                </div>                                
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                    name="name" value="{{ old('name') }}" placeholder="Name">
                                    <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror -->
                                </div>
            
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                            <p class="m-t-sm">Already have an account? <a href="{{url('/login')}}">Login</a></p>
                        </div>