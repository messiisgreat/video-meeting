@extends('layouts.company')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/template-list/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/common/modal-preview.css') }}">

    <main class="pt-5">
        <div class="container px-4">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <input type="text" class="form-control rounded-pill" placeholder="タイトルで検索する">
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <select name="" id="" class="form-select rounded-pill">
                        <option value="email">Eメール</option>
                        <option value="SMS">SMS</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0 d-flex justify-content-end">
                    <a class="btn btn-primary px-4" href="{{ route('template.create') }}"><i
                            class="fa fa-solid fa-plus"></i> 作成</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive border rounded" style="min-height: 500px; overflow-y: auto;">
                        <table id="messages_table" class="table" style="min-width: 1200px; overflow-x: auto;">
                            <thead>
                                <tr class="bg-secondary-grey">
                                    <th class="py-4 text-center">タイ卜ル</th>
                                    <th class="py-4">更新しました-</th>
                                    <th class="py-4">プレビュー</th>
                                    <th class="py-4">アクション</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>
                                            @if ($message->type == 'email')
                                                <i class="fa fa-solid fa-envelope me-2"></i>
                                            @else
                                                <i class="fa fa-solid fa-comment me-2"></i>
                                            @endif{{ $message->title }}
                                        </td>
                                        <td>{{ $message->updated_at }}</td>
                                        <td>{!! $message->content !!}</td>
                                        <td>
                                            <div>
                                                <a href="javascript:;" data-bs-toggle="modal" data-id="{{ $message->id }}"
                                                    @if ($message->type == 'sms') data-bs-target="#smsModal"
													@else @if ($message->type == 'email' && $message->trigger == 'invite')
														data-bs-target="#inviteModal"
													@else @if ($message->type == 'email' && $message->trigger == 'success')
														data-bs-target="#successModal"
													@else @if ($message->type == 'email' && $message->trigger == 'reminder')
														data-bs-target="#reminderModal" @endif
                                                    @endif
                                @endif
                                @endif
                                data-id = {{ $message->id }}>
                                <i class="fa fa-solid fa-eye me-3"></i>
                                </a>
                                @if ($message->editable == 1)
                                    <a href="{{ route('template.edit', ['template' => $message->id ]) }}">
                                        <i class="fa fa-solid fa-edit me-3"></i>
                                    </a>
                                @else
                                    <div style="display: inline-block;width: 32px;"></div>
                                @endif
                                <a href="javascript:;" onclick="copy('{{$message->id}}')">
                                    <i class="fa fa-solid fa-copy me-3"></i>
                                </a>
                                @if ($message->editable == 1)
                                    <a href="javascript:;" onclick="del('{{$message->id}}')">
                                        <i class="fa fa-solid fa-trash"></i>
                                    </a>
                                @else
                                    <div style="display: inline-block;width: 14px;height: 1rem;"></div>
                                @endif
                    </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>

    <div class="modal fade modal-preview" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div></div>
                    <h5 class="modal-title text-center">Default Invite Email</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="body-header">
                        <img src="{{ asset('/assets/img/success.jpg') }}" alt="success icon">
                    </div>
                    <div class="message-content">

                    </div>
                    <div class="body-footer mt-5">
                        <hr>
                        <p class="text-center">
                            We've let {recruiter_name} know you've completed this interview.
                            <br><br>
                            <span class="text-success">This interview produced 93% fewer emissions than a traditional
                                face-to-face interview.</span>
                            <br>👋
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" style="width: 150px;" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-preview" id="inviteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div></div>
                    <h5 class="modal-title text-center">Default Invite Email</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="message-content">

                    </div>
                    <div class="body-footer mt-4 text-center">
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary px-4 py-3 rounded-pill"
                                data-bs-dismiss="modal">Go to the interview</button>
                        </div>
                        <hr class="mb-4 mt-4">
                        <h6>Before you get started 💡</h6>
                        <p>Please allow sufficient time to complete the interview. We recommend using the latest version of
                            Google Chrome or Firefox browser in Incognito mode, on a stable and fast internet connection.
                            Relax and put your best self forward, you can practice as many times as you like to feel
                            comfortable.
                        </p>
                        <h6>Technical question or issue?
                        </h6>
                        <p>Please visit the 24/7 support portal or email support@willo.video.
                            <br><br>
                            We sent you this email on behalf of {interview_owner_name}.
                            {{-- <a href="/ ">Report abuse here.</a> --}}
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" style="width: 150px;" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-preview" id="reminderModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div></div>
                    <h5 class="modal-title text-center">Default Invite Email</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="message-content">

                    </div>
                    <div class="body-footer mt-4 text-center">
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary px-4 py-3 rounded-pill"
                                data-bs-dismiss="modal">Go to the interview</button>
                        </div>
                        <hr>
                        <p class="text-center mt-4">Willo sent you this email on behalf of {recruiter_name}.
                            {{-- <a href=""> Report abuse.</a> --}}
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" style="width: 150px;" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-preview" id="smsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div></div>
                    <h5 class="modal-title text-center">Default Invite Email</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="message-content">

                    </div>
                </div>
                {{-- <div class="modal-footer justify-content-center">
                    <a href="/" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" style="width: 150px;" alt="logo">
                    </a>
                </div> --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('/assets/js/template/index.js') }}"></script>
@endsection
