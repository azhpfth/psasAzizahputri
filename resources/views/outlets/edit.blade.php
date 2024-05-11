<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>psas-Azizah Putri</title>
</head>
<body>
    
</body>
</html>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Outlet</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('outlets.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

  
    <form action="{{ route('outlets.update',$outlet->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group">
            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Code</label>
            <input type="text" class="mb-2 form-control @error('code') is-invalid @enderror" name="code">
        
            @error('code')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Nama</label>
            <input type="text" class="mb-2 form-control @error('name') is-invalid @enderror" name="name">  
            {{-- value="{{ old('title') }}" placeholder="Masukkan Judul --}}
        
            @error('name')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Status</label>
            <select class="mb-2 form-control @error('status') is-invalid @enderror" name="status">
                <option value="berlangsung">Sedang berlangsung</option>
                <option value="selesai">Sudah selesai</option>
            </select>
            @error('status')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        

        <div class="form-group">
            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Address</label>
            <input type="text" class="mb-2 form-control @error('addres') is-invalid @enderror" name="addres">
        
            @error('addres')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Phone</label>
            <input type="text" class="mb-2 form-control @error('phone_number') is-invalid @enderror" name="phone_number">
        
            @error('phone_number')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn-btn-primary mt-2">UPDATE</button>
        <button type="reset" class="btn-btn-warning mt-2">RESET</button>
    </form>

@endsection