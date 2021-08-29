@extends('students.admin')

@section('content')
<div class="login-form"> 
        <form action="/inscription" method="POST">
            {{ csrf_field() }}
            <h2 class="text-center">Inscription</h2>
            <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off"> 
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off"> 
            </div>
            <div>
                <input type="password" name="password_retype" class="form-control" placeholder="Retapez le mot de passe" required="required" autocomplete="off"> 
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
            </div>
        </form>
        <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            background: #f7f7f7;
            margin-bottom: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .login-form, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    </div>
@endsection