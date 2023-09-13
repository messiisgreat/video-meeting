@extends('layouts.company')

@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/companyMana/create.css') }}">
<main class="pt-5">
    <div class="container">
        <div class="row">
            <ul class="list-inline">
                <li class="list-inline-item me-2">
                    <a class="u-link-v5" href="{{ route('company.index') }}">
                        <i class="fa-solid fa-play me-2"></i>会社
                    </a>
                </li>
                <li class="list-inline-item me-2">
                    <label class="u-link-v5 g-color-main" href="#">
                        <i class="fa fa-angle-right me-2"></i>会社の作成
                    </label>
                </li>
            </ul>
        </div>
        <div class="row mt-5">
            <form action="" method="" class="col-lg-6 mx-auto">
                <div class="mb-3">
                    <label for="companyName" class="form-label px-3">会社名</label>
                    <input type="text" class="form-control rounded-pill" id="companyName" placeholder="会社名を入力してください" required>
                </div>
                <div class="mb-3">
                    <label for="companyEmail" class="form-label px-3">メールアドレス</label>
                    <input type="email" class="form-control rounded-pill" id="companyEmail" placeholder="メールアドレスを入力してください">
                </div>
                <div class="mb-3">
                    <div class="w-100 d-flex justify-content-between px-3">
                        <label for="companySite" class="form-label">Webサイト</label>
                        <span class="text-secondary">オプション</span>
                        {{-- <span>オプション</span> --}}
                    </div>
                    <input type="text" class="form-control rounded-pill" id="companySite"
                        placeholder="ウェブサイトを入力してください">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="companyName" class="form-label px-3">ヘッダー/フッターの色</label>
                                <div class="position-relative">
                                    <div class="form-control p-0 rounded-pill py-2 px-3"
                                        style="height: 40px; cursor: pointer;" onclick="togglePicker(1)">
                                        <div class="m-0 rounded" style="width: 25px; height: 25px;" id="selectedValue1">
                                        </div>
                                    </div>
                                    <div class="position-absolute w-100 py-3 bg-white top-100 px-2 rounded border mt-1 colorPicker"
                                        id="colorPicker1" style="z-index: 2;">
                                        <div class="w-100 d-flex flex-wrap gap-1">
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, 'FF6900')"
                                                style="width: 35px; height: 35px; background-color: #FF6900;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, 'FCB900')"
                                                style="width: 35px; height: 35px; background-color: #FCB900;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, '7BDCB5')"
                                                style="width: 35px; height: 35px; background-color: #7BDCB5;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, '00D084')"
                                                style="width: 35px; height: 35px; background-color: #00D084;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, '8ED1FC')"
                                                style="width: 35px; height: 35px; background-color: #8ED1FC;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, '0693E3')"
                                                style="width: 35px; height: 35px; background-color: #0693E3;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, 'ABB8C3')"
                                                style="width: 35px; height: 35px; background-color: #ABB8C3;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, 'EB144C')"
                                                style="width: 35px; height: 35px; background-color: #EB144C;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, 'F78DA7')"
                                                style="width: 35px; height: 35px; background-color: #F78DA7;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(1, '9900EF')"
                                                style="width: 35px; height: 35px; background-color: #9900EF;"></button>
                                            <input type="text" class="form-control m-0" id="previewValue1"
                                                style="max-width: 155px; height: 35px;" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="companyName" class="form-label px-3">ボタンの色</label>
                                <div class="position-relative">
                                    <div class="form-control p-0 rounded-pill py-2 px-3"
                                        style="height: 40px; cursor: pointer;" onclick="togglePicker(2)">
                                        <div class="m-0 rounded" style="width: 25px; height: 25px;" id="selectedValue2">
                                        </div>
                                    </div>
                                    <div class="position-absolute w-100 py-3 bg-white top-100 px-2 rounded border mt-1 colorPicker"
                                        id="colorPicker2" style="z-index: 2;">
                                        <div class="w-100 d-flex flex-wrap gap-1">
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, 'FF6900')"
                                                style="width: 35px; height: 35px; background-color: #FF6900;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, 'FCB900')"
                                                style="width: 35px; height: 35px; background-color: #FCB900;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, '7BDCB5')"
                                                style="width: 35px; height: 35px; background-color: #7BDCB5;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, '00D084')"
                                                style="width: 35px; height: 35px; background-color: #00D084;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, '8ED1FC')"
                                                style="width: 35px; height: 35px; background-color: #8ED1FC;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, '0693E3')"
                                                style="width: 35px; height: 35px; background-color: #0693E3;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, 'ABB8C3')"
                                                style="width: 35px; height: 35px; background-color: #ABB8C3;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, 'EB144C')"
                                                style="width: 35px; height: 35px; background-color: #EB144C;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, 'F78DA7')"
                                                style="width: 35px; height: 35px; background-color: #F78DA7;"></button>
                                            <button class="rounded border-0" type="button"
                                                onclick="changeColor(2, '9900EF')"
                                                style="width: 35px; height: 35px; background-color: #9900EF;"></button>
                                            <input type="text" class="form-control m-0" id="previewValue2"
                                                style="max-width: 155px; height: 35px;" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="companyName" class="form-label px-3">ロゴ</label>
                            <div class="drop-zone">
                                <span class="drop-zone__prompt text-active"><i
                                        class="fa fa-solid fa-plus text-active"></i><br>アップロ一ド</span>
                                <input type="file" name="myFile" accept="image/jpeg, image/png, image/jpg"
                                    class="drop-zone__input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="companyName" class="form-label px-3">業界 </label>
                    <select name="" id="" class="form-select rounded-pill">
                        <option value="">自動車</option>
                    </select>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between px-3">
                        <p class="m-0"><i class="fa fa-solid fa-circle-info"></i> デフォルトの会社として使用</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-4">
                    <a href="/home" type="reset" class="btn btn-light border text-active rounded-pill px-4">キャンセル</a>
                    <button type="submit" class="btn btn-primary border rounded-pill px-4">保存</button>
                </div>
            </form>
        </div>
    </div>
</main>
<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }

    function togglePicker(cnt) {
        var count = $(".colorPicker").length;
        if($("#colorPicker" + cnt).hasClass("active") == true) {
            for(i = 1; i <= count; i ++) {
                $("#colorPicker" + i).removeClass('active');
            }
        } else {
            for(i = 1; i <= count; i ++) {
                $("#colorPicker" + i).removeClass('active');
            }
            $("#colorPicker" + cnt).addClass('active');
        }
    }

    function changeColor(cnt, value) {
        $("#selectedValue" + cnt).css('background-color', '#' + value);
        $("#previewValue" + cnt).val('#' + value);
        togglePicker(cnt);
    }
</script>
@endsection