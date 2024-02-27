<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@include('header')
    <div class="container p-4">
        <form method="POST" action="{{route('owners.update', ['owner' => $owner])}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Vardas</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$owner->name}}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Pavarde</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{$owner->surname}}">
                @error('surname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefonas</label>
                <div class="input-group">
                    <span class="input-group-text">+</span>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$owner->phone}}">
                </div>
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$owner->email}}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Adresas</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$owner->address}}">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Atnaujinti</button>
        </form>
    </div>
</body>
</html>