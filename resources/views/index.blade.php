<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pagrindinis</title>
</head>
<body>
    @include('header')
    <div class="container p-4">
        <div>
            @if(session()->has('success'))
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Telefonas</th>
                <th scope="col">Email</th>
                <th scope="col">Adresas</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            @foreach($owners as $owner)
                <tr>
                    <td>{{$owner->name}}</td>
                    <td>{{$owner->surname}}</td>
                    <td>+{{$owner->phone}}</td>
                    <td>{{$owner->email}}</td>
                    <td>{{$owner->address}}</td>
                    <td>
                        <a  class="btn btn-dark" href="{{route('owners.edit', ['owner' => $owner])}}">Redaguoti</a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('owners.delete', ['owner' => $owner])}}">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Ištrinti"/>
                        </form>
                    </td>
                </tr>  
            @endforeach
        </table>
    </div>
</body>
</html>