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
                    İş Ortaklarımız
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">

            <div class="card-body">
                <form action="{{ route('works.update', ['work' => $works['id'],'data' => $works]) }}" method="POST"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 col-xl-12">
                            <div class="col-lg-6 col-xl-6">
                                @error('name')
                                <div class="alert alert-danger text-center">{{ $message }}</div>
                                @enderror
                                <label for="name" class="col-sm-12 col-form-label">Başlık</label>
                                <div class="col-sm-6">
                                    <input value="{{$works['title']}}" type="text" class="form-control font-20" id="title"
                                           name="title"
                                           placeholder="Başlık" required>
                                </div>

                                <label for="name" class="col-sm-12 col-form-label">Sıra</label>
                                <div class="col-sm-6">
                                    <input value="{{$works['sira']}}" type="text" class="form-control font-20" id="sira"
                                           name="sira"
                                           placeholder="Sıra" required>
                                </div>
                                <input type="hidden" name="id" value="{{$works['id']}}">

                            </div>

                            <div class="col-lg-6 col-xl-6">

                                <label for="images" class="col-sm-12 col-form-label">Sayfa Resmi</label>
                                <input type="file" name="image" value="{{$works['image_url']}}">
                                <img src="{{ asset('images') .  '/' . $works['image_url']}}" width="100">
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


