@extends('panel.layouts.app')

@section('body')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-12">
                @if(session()->has('successMessage'))
                    <div class="alert alert-success text-center">
                        {{ session('successMessage') }}
                    </div>
                @endif
                @if(session()->has('errorMessage'))
                    <div class="alert alert-danger text-center">
                        {{ session('errorMessage') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger text-center">
                        Lütfen Bilgileri Kontrol Ediniz
                    </div>
                @endif
            </div>
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">
                    Yaptığımız İşler
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">

            <div class="card-body">
                <form action="{{ route('our_works.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 col-xl-12">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name" class="col-sm-12 col-form-label">Video Url</label>
                                <div class="col-sm-6">
                                    <input value="" type="text" class="form-control font-20" id="video_url"
                                           name="video_url"
                                           placeholder="Video Url">
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-3">
                                <label for="name" class="col-sm-12 col-form-label">Sıra</label>
                                <div class="col-sm-12">
                                    <input  type="number" class="form-control font-20" id="sira"
                                            name="sira"
                                            placeholder="Sıra" required>
                                </div>
                                <label for="image_check" class="col-sm-12 col-form-label">Resim mi ?</label>
                                <div class="col-sm-12">
                                    <input  type="checkbox" class="form-control " id="image_check"
                                            name="image_check"
                                            placeholder="Resim mi ?">
                                </div>

                                <label for="images" class="col-sm-12 col-form-label">Resim</label>
                                <input type="file" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary pull-right">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection

@section('js')

    <script>
        $( document ).ready(function() {
            var name = $("#summernote").text();
            console.log(name);
            //$("#description").val(name);
        });
    </script>
@endsection


