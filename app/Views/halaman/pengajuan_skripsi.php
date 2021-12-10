<?= $this->extend('layout/Welcome');?>
<?= $this->section('content');?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="card mb-2">
    <div class="card-body">
        <div class="form-group">
            <label for="">Pilih Dosen Pembimbing</label>
            <select class="js-example-basic-single w-50 select2-hidden-accessible" multiple="[]" data-select2-id="1"
                tabindex="-1" aria-hidden="true">
                <option value="AL" data-select2-id="3">Pilih Dosen</option>
                <option value="WY">Dosen 1</option>
                <option value="AM">Dosen 2</option>

            </select>
            <!-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2"
                style="width: 464px;">
                <span class="selection">
                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                        aria-expanded="false" tabindex="0" aria-disabled="false"
                        aria-labelledby="select2-qkok-container">
                        <span class="select2-selection__rendered" id="select2-qkok-container" role="textbox"
                            aria-readonly="true" title="Alabama">Pengajuan Judul</span>
                        <span class="select2-selection__arrow" role="presentation">
                            <brole="presentation"></b>
                        </span></span></span>
                <span class="dropdown-wrapper" aria-hidden="true">
                </span>
            </span> -->
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Unggah Judul Skripsi</label>
            <div class="form-group">
              <label for=""></label>
              <textarea class="form-control" name="" id="editor">Testing Here</textarea>
            </div>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Unggah Judul Skripsi</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
       
        <!-- <div class="dropify-wrapper">
            <div class="dropify-message d-flex justify-content-center align-items-center">
                <span class="file-icon">
                    <p>Drag or click here</p>
                </span>
                <p class="dropify-error">Ooops!</p>
            </div>
            <div class="dopify-loader"></div>
            <div class="dopify-error-container">
                <ul></ul>
            </div>
            <input type="file" class="dopify">
            <button class="dropify-clear">Remove</button>
            <div class="dropify-preview"></div>
        </div> -->
        <button type="button" class="btn btn-outline-primary btn-fw">Simpan</button>
    </div>
</div>

<?= $this->endSection(); ?>