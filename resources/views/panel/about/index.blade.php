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
                    Hakkımızda ve İletişim
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">

            <div class="card-body">
                <form action="{{ route('panel.aboutupdate', ['aboutupdate' => $aboutupdate]) }}" method="POST"
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
                                    <input value="{{$aboutupdate['title_tr']}}" type="text" class="form-control font-20" id="title_tr"
                                           name="title_tr"
                                           placeholder="Başlık" required>
                                </div>

                                <label for="name" class="col-sm-12 col-form-label">Title</label>
                                <div class="col-sm-6">
                                    <input value="{{$aboutupdate['title_en']}}" type="text" class="form-control font-20" id="title_en"
                                           name="title_en"
                                           placeholder="Başlık" required>
                                </div>

                                <input type="hidden" name="id" value="{{$aboutupdate['id']}}">

                                @error('description')
                                <div class="alert alert-danger text-center">{{ $message }}</div>
                                @enderror
                                <label for="description" class="col-sm-12 col-form-label">Açıklama</label>
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <textarea id="tinymce-example" name="description_tr" required>{{$aboutupdate['description_tr']}}</textarea>
                                    </div>
                                </div>

                                <label for="description" class="col-sm-12 col-form-label">Description</label>
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <textarea id="tinymce-example" name="description_en" required>{{$aboutupdate['description_en']}}</textarea>
                                    </div>
                                </div>

                                <label for="images" class="col-sm-12 col-form-label">Sayfa Resmi</label>
                                <input type="file" name="image" >
                                <img src="{{ asset('images') .  '/' . $aboutupdate['image_url']}}" width="100">
                                <input type="hidden" name="image_url" id="image_url" value="{{$aboutupdate['image_url']}}">
                            </div>
                                <hr>
                            <div class="col-lg-6 col-xl-6">

                                <h1>İletişim</h1>

                                <label for="address" class="col-sm-12 col-form-label">Adres</label>
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <textarea id="tinymce-example" name="address" required>{{$aboutupdate['address']}}</textarea>
                                    </div>
                                </div>

                                <label for="name" class="col-sm-12 col-form-label">Telefon</label>
                                <div class="col-sm-6">
                                    <input value="{{$aboutupdate['tel']}}" type="text" class="form-control font-20" id="tel"
                                           name="tel"
                                           placeholder="Başlık" required>
                                </div>

                                <label for="email" class="col-sm-12 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input value="{{$aboutupdate['email']}}" type="email" class="form-control font-20" id="email"
                                           name="email"
                                           placeholder="Başlık" required>
                                </div>

                                <label for="map" class="col-sm-12 col-form-label">Harita Linki</label>
                                <div class="col-sm-6">
                                    <input value="{{$aboutupdate['map']}}" type="text" class="form-control font-20" id="map"
                                           name="map"
                                           placeholder="Başlık" required>
                                </div>


                            </div>

                            <div class="col-lg-6 col-xl-6">
                                @error('description')
                                <div class="alert alert-danger text-center">{{ $message }}</div>
                                @enderror
                                <label for="description" class="col-sm-12 col-form-label">Açıklama</label>
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <textarea id="tinymce-example" name="address" required >{{$aboutupdate['address']}}</textarea>
                                    </div>
                                </div>
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


