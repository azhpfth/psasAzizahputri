<!DOCTYPE html>
<html>
<head>
    <title>psas-Azizah Putri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
      
        <h3 class="card-header p-3"><i class="fa-solid fa-user"></i> Laundry-Azizah Putri</h3>
                    <div class="card-body">
                        <form action="{{ route('outlets.update', $outlets->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Code</label>
                                <input type="text" class="mb-2 form-control @error('code') is-invalid @enderror" name="code" value="{{ ($outlets->code) }}">
                            
                                @error('code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Nama</label>
                                <input type="text" class="mb-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ ($outlets->name) }}">  
                               
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Status</label>
                                <select class="mb-2 form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="sedang berlangsung">Sedang berlangsung</option>
                                    <option value="sudah selesai">Sudah selesai</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Address</label>
                                <input type="text" class="mb-2 form-control @error('addres') is-invalid @enderror" name="addres" value="{{ ($outlets->addres) }}">
                            
                                @error('addres')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Phone</label>
                                <input type="text" class="mb-2 form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ ($outlets->phone_number) }}">
                            
                                @error('phone_number')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary mt-2">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning mt-2">RESET</button>

                        </form> 
                    </div>
    

</body>
</html>