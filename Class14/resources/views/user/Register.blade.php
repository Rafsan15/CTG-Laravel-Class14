<html>
    <head>
        <title>RegisterPage</title>
        <link rel="stylesheet" href="{{ asset('css/boots.css') }}">
    </head>
    <body>
        <div class="col-md-6">
            <h1>User Registration</h1>
            @include('errors.error')
        </div>
        <form action="{{route('user.register')}}" method="post">
            {{csrf_field()}}
            <fieldset div class="col-md-6">
                <div class="form-group">
                    <label for="UserName">User Name</label>
                    <input type="text" name="UserName" class="form-control" id="UserName"  placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" name="Email" class="form-control" id="Email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="CPassword">Confirm Password</label>
                    <input type="password" name="Password_confirmation" class="form-control" id="CPassword" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="File">File input</label>
                    <input type="file" name="File" class="form-control-file" id="File" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </body>
</html>