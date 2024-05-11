<!DOCTYPE html>
<html>
<head>
    <title>psas-Azizah Putri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa-solid fa-shop"></i> Laundry - Azizah Putri </h3>
        <div class="card-body">
            
            <div class="float-end">
                <a class="btn btn-dark" href="{{ route('outlets.create') }}">Tambah</a>
            </div><br><br>

            <table class="table table-bordered mt-3">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>
                </tr>
                @foreach($outlets as $o)
                <tr>
                    <td>{{ $o->id }}</td>
                    <td>{{ $o->code }}</td>
                    <td>{{ $o->name }}</td>
                    <td>{{ $o->status }}</td>
                    <td>{{ $o->addres }}</td>
                    <td>{{ $o->phone_number }}</td>
                    <td>{{ $o->created_at }}</td>
                    <td>{{ $o->updated_at }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('outlets.destroy', $o->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('outlets.show',$outlets) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('outlets.edit',$outlets) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Anda yakin, data outlet ini di hapus ?')" class="btn btn-danger">Delete</button>
                        </form>
                </tr>
                @endforeach
            </table>
    
        </div>
    </div>
</div>
       
</body>
<footer>
    <div class="container"
    style="text-align:center; background-color:rgb(243, 249, 247)">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by Azizah Putri Web Programming 11
    </div>
</footer>
</html>