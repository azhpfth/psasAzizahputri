
<!DOCTYPE html>
<html>
<head>
    <title>psas-Azizah Putri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
      
        <h3 class="card-header p-3"><i class="fa-brands fa-shopware"></i> Show Outlet </h3>
                    <div class="card-body">
                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Code</label>
                            {{ $outlets->code }}
                        
                            @error('code')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Nama</label>
                            {{ $outlets->name }}
                           
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Status</label>
                            {{ $outlets->status }}

                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Address</label>
                            {{ $outlets->addres }}
                        
                            @error('addres')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Phone</label>
                            {{ $outlets->phone_number }} <br>&nbsp;
                        
                            @error('phone_number')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md btn-warning mt-2">BACK</button>

                    </form> 
                </div>


</body>
</html>