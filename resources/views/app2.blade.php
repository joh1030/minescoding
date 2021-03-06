@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @yield('title')
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @yield('page')
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Style</label>
                                <div class="col-md-6">
                                    <select name="style">
                                        <option value="social">Social</option>
                                        <option value="competitve">Competitive</option>
                                        <option value="any">Any</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Language 1</label>
                                <div class="col-md-6">
                                    <select name="lang_one">
                                        <option value="Python">Python</option>
                                        <option value="Java">Java</option>
                                        <option value="C/C++">C/C++</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Language 2</label>
                                <div class="col-md-6">
                                    <select name="lang_two">
                                        <option value="Python">Python</option>
                                        <option value="Java">Java</option>
                                        <option value="C/C++">C/C++</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Language 3</label>
                                <div class="col-md-6">
                                    <select name="lang_three">
                                        <option value="Python">Python</option>
                                        <option value="Java">Java</option>
                                        <option value="C/C++">C/C++</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Courses Taken</label>
                                <div class="col-md-6">
                                    <input type="checkbox" name="csci_261" value=1>CSCI 261<br>
                                    <input type="checkbox" name="csci_262" value=1>CSCI 262<br>
                                    <input type="checkbox" name="csci_306" value=1>CSCI 306<br>
                                    <input type="checkbox" name="csci_406" value=1>CSCI 406<br>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        @yield('closeForm')
                    @yield('closeDiv')
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection