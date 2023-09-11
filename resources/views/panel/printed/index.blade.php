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
                    Printed
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">

            <div class="card-body">
                <form action="{{ route('panel.printedupdate', ['data' => $printedupdate]) }}" method="POST"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 col-xl-12">

                            @error('description')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="description" class="col-sm-12 col-form-label">Açıklama</label>
                            <div class="col-sm-12">
                                <div class="card-body">
                                    <textarea id="tinymce-example" name="description_tr" required>{{$printedupdate['description_tr']}}</textarea>
                                </div>
                            </div>

                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                            <div class="col-sm-12">
                                <div class="card-body">
                                    <textarea id="tinymce-example" name="description_en" required>{{$printedupdate['description_en']}}</textarea>
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


