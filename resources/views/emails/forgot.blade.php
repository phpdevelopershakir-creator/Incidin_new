Hello {{$user->name}}
<p>We Understand it happens .</p>
<a href="{{ url('superadmin/reset/password',  $user->remember_token) }}">
    Reset Password
</a>




 thanks
 {{config('app.name')}}