@extends('admin/layout/layout')

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Danh mục</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('categories.update',[$category->id])}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label for="name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Tên danh mục</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" id="name" value="{{$category->name}}"
                                                   placeholder="Ten danh muc">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                                            <button type="reset" class="btn btn-primary mt-3">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
