<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GPU INTELLIGENCE</title>
    <meta name="description" content="${2}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{URL::to('css/home-page.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::to('css/header.css')}}>

</head>
<body>
@include('header')


<table>
    <thead>
    <th>Name</th>
    <th>E-Mail</th>
    <th>User</th>
    <th>VIP</th>
    <th>Mod</th>
    <th>Admin</th>
    <th></th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <form action="{{ route('admin.assign') }}" method="post">
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                <td><input type="checkbox" {{ $user->hasRole('Vip') ? 'checked' : '' }} name="role_vip"></td>
                <td><input type="checkbox" {{ $user->hasRole('Mod') ? 'checked' : '' }} name="role_moderator"></td>
                <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                {{ csrf_field() }}
                <!--<td><button type="submit">Assign Roles</button></td>-->
            </form>
        </tr>
    @endforeach
    </tbody>
</table>