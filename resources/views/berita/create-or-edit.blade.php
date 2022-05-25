@extends('layouts.base')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: "#editor",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor",
                "save code fullscreen autoresize codesample autosave responsivefilemanager"
            ],
            menubar: false,
            toolbar1: "undo redo restoredraft | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent table searchreplace",
            toolbar2: "| fontsizeselect | styleselect | link unlink anchor | image media emoticons | forecolor backcolor | code codesample fullscreen ",
            image_advtab: true,
            fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
            relative_urls: false,
            remove_script_host: false,
            filemanager_access_key: '@filemanager_get_key()',
            filemanager_sort_by: '',
            filemanager_descending: '',
            filemanager_subfolder: '',
            filemanager_crossdomain: '',
            external_filemanager_path: '@filemanager_get_resource(dialog.php)',
            filemanager_title: "File Manager",
            external_plugins: {
                "filemanager": "http://127.0.0.1:8000/js/filemanager.min.js"
            },
            filemanager_access_key: 'key',
        });
    </script>
@endsection

@section('content')

    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }

    </style>





        <div class="card">

            <div class="card-body">
                @if ($act == 'create')
                @section('header')
                    <div class="section-header">
                        <h1>Buat Berita</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ route('management') }}">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></div>

                        </div>
                    </div>
                    @endsection
                        <br>
                        <center>
                            <h1>Buat Berita</h1>
                        </center>
                        <br>

                    <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="judul" placeholder="isi Judul "
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Contents</label>
                            <textarea class="form-control" name="content" placeholder="Masukan Konten" id="editor"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="Kompetensi Keahlian" class="form-label">Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi" aria-label="Default select example" required>
                                <option selected value="" >Pilih Kompetensi</option>

                                @foreach (DB::table('kompetensi_keahlians')->get() as $kk)

                                    <option value="{{ $kk->id }}">{{ $kk->nama }}</option>

                                @endforeach
                            </select>
                        </div>

                        <select class="form-control" name="categories" aria-label="Default select example" required>
                            <option selected value="">Pilih Kategori</option>

                            @foreach (DB::table('categories')->get() as $category)

                                <option value="{{ $category->id }}">{{ $category->nama }}</option>

                            @endforeach
                        </select>
                        <br>


                        <input type="file" name="gambar" class="dropify" data-max-width="2000" data-max-width="2000"required />


                        <br>
                        <br>
                        <center> <button class="btn btn-success" type="submit" >Submit</button>
                        </center>

                    </form>

                @else

                @section('header')
                    <div class="section-header">
                        <h1>Edit Berita</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ route('management') }}">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></div>

                        </div>
                    </div>
                @endsection
                        <br>
                        <center>
                            <h1>Edit Berita</h1>
                        </center>
                        <br>

                    <form action="{{ route('berita.update', ['id' => $data->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="judul" value="{{ $data->judul }}"
                                placeholder="isi Judul ">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Contents</label>
                            <textarea class="form-control" name="content" placeholder="Masukan Konten"
                                id="editor">{{ $data->content }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="Kompetensi Keahlian" class="form-label">Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi" aria-label="Default select example">
                                <option selected>Pilih Kompetensi</option>

                                @foreach (DB::table('kompetensi_keahlians')->get() as $kk)

                                    @if ($kk->id == $data->kompetensi)

                                        <option value="{{ $kk->id }}" selected>{{ $kk->nama }}</option>
                                    @else

                                        <option value="{{ $kk->id }}">{{ $kk->nama }}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>

                        <select class="form-select" name="categories" aria-label="Default select example">
                            <option selected>Pilih Kategori</option>

                            @foreach (DB::table('categories')->get() as $category)
                                @if ($category->id == $data->categories)
                                    <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br>


                        <input type="file" name="gambar" class="dropify"
                            data-default-file="{{ url('thumbBerita/' . $data->gambar) }}" data-max-width="2000"
                            data-max-width="2000" />


                        <br>
                        <br>
                        <center> <button class="btn btn-success" type="submit">Submit</button>
                        </center>
                    </form>
                @endif


            </div>
        </div>

@endsection

@section('js')

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!--Ionicon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Table Js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- ckeditor -->
    <script src="https://cdn.tiny.cloud/1/{{ env('TINY_API_TOKEN') }}/tinymce/5/tinymce.min.js" referrerpolicy="origin">
    </script>

    <script>
        var editor_config = {
            path_absolute: "/",
            selector: '#editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endsection
