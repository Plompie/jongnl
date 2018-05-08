<h1>Login</h1>

<form action="login/loginAuth" method="post">

    <div class="form-group">
        <label for="username" class="cols-sm-2 control-label">Username</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="login" id="login"  placeholder="Voer username in"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="cols-sm-2 control-label">Password</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" id="password"  placeholder="Voer wachtwoord in"/>
            </div>
        </div>
    </div>
    <div class="form-group ">
        <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Login</button>
    </div>

</form>
