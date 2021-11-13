<div>
    @section('title', 'Site Configuration')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Site Configuration</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Site Configuration</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="text-center card-header">
                    <h2 class="">About Us</h2>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="description">Site Configuration<sup class="text-danger">*</sup></label>
                            
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button wire:click.prevent="store" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
@endpush
