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
                                        <h4>Bài viết</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('categories.store')}}" method="post">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label for="name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Tên bài viết</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="title" id="name" value="{{ old('name') }}"
                                                   placeholder="Nhập tên bài viết">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Nội dung bài viết</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control @error('content') is-invalid @enderror"
                                                   name="name" id="name"
                                                   placeholder="Nhập nội dung bài viết">
                                            @error('content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Danh mục</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="">Chọn danh mục bài viết</option>
                                                @foreach(\App\Models\Category::all() as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label>Chọn ảnh bài viết</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="file" class="form-control-file">
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
