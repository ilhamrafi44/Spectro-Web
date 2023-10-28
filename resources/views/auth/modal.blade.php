<div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Masuk / Daftar</a>
</div>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="block_loading">
            <div class="modal-body">
                <div class="d-flex justify-content-end">

                    <div class="btn btn-icon btn-sm btn-active-light-primary" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Daftar</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                        <form id="loginForm">
                            @csrf
                            <div class="p-3">
                                <h3 class="text-center">Sign-In</h3>
                                <div class="fs-5 text-center">Akun belum terverifikasi? <br><a data-bs-toggle="modal"
                                        href="#exampleModalToggle3" role="button"
                                        class="text-spectro fs-6 fw-bold">Kirim Ulang Tautan Verifikasi</a></div><br>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold text-dark">Email</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        name="email" autocomplete="off" id="email" value="{{ old('email') }}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                                        <!--end::Label-->
                                        <!--begin::Link-->
                                        <a href="{{ route('password.request') }}"
                                            class="text-spectro fs-6 fw-bold">Forgot
                                            Password ?</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        name="password" autocomplete="off" id="password" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="rememberMe"
                                                id="rememberMe" />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-spectro col-12" type="submit">Login</button>
                                <hr>

                                <div class="fs-5 text-center fw-bolder mb-3 text-gray-500">
                                    Or</div>
                                <a href="{{ route('google-auth') }}"
                                    class="btn btn-flex flex-center btn-light hover-scale btn-lg w-100 mb-3">
                                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                        class="h-20px me-3" />Continue with Google</a>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                        <div class="p-3">
                            <h3 class="text-center">Sign-Up</h3>
                        </div>
                        <div class="mb-5 hover-scroll-x">
                            <div class="d-grid ">
                                <ul class="nav nav-tabs flex-nowrap text-nowrap d-flex justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-active-primary text-active-white  btn-color-gray-600 btn-active-color-white m-2 active"
                                            data-bs-toggle="tab" href="#kt_tab_pane_1s"><i
                                                class="fas fa-solid fa-briefcase"></i>
                                            Candidate</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-active-primary text-active-white btn-color-gray-600 btn-active-color-white m-2"
                                            data-bs-toggle="tab" href="#kt_tab_pane_2s"><i
                                                class="fas fa-solid fa-user"></i>
                                            Employer</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1s" role="tabpanel">
                                <form id="candidateForm">
                                    @csrf

                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6">Nama
                                            Lengkap</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" id="name_candidate" autocomplete="off" required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6">Nomor
                                            HP</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="628xxxxx" id="no_tlp_candidate" autocomplete="off"
                                            required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6">Email</label>
                                        <input class="form-control form-control-lg form-control-solid" type="email"
                                            placeholder="" id="email_candidate" autocomplete="off" required />
                                    </div>

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold text-dark fs-6">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" id="password_candidate"
                                                    autocomplete="off" required />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-2"></i>
                                                    <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters
                                            with a mix of letters, numbers &
                                            symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <label class="form-label fw-bold text-dark fs-6">Confirm
                                            Password</label>
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" id="password_confirmation_candidate" autocomplete="off"
                                            required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6    ">Jenis Kelamin</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            id="jenis_kelamin_candidate">
                                            <option value="1" @if (isset($profile) && $profile->jenis_kelamin == 1) selected @endif>
                                                Laki-Laki</option>
                                            <option value="2" @if (isset($profile) && $profile->jenis_kelamin == 2) selected @endif>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="toc"
                                                value="1" checked disabled />
                                            <span class="form-check-label fw-semibold text-gray-700 fs-6">I
                                                Agree
                                                <a href="#" class="ms-1 link-primary">Terms
                                                    and conditions</a>.</span>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-spectro col-12">
                                            <span>Continue</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2s" role="tabpanel">
                                <form id="employerForm">
                                    @csrf
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6">Nama Perusahaan</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" id="name_employer" autocomplete="off" required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6">Nomor
                                            HP Perusahaan</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="628xxxxx" id="no_tlp_employer" autocomplete="off"
                                            required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bold text-dark fs-6">Email</label>
                                        <input class="form-control form-control-lg form-control-solid" type="email"
                                            placeholder="" name="email" id="email_employer" autocomplete="off"
                                            required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold text-dark fs-6">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" id="password_employer"
                                                    autocomplete="off" required />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-2"></i>
                                                    <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters
                                            with a mix of letters, numbers &
                                            symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <label class="form-label fw-bold text-dark fs-6">Confirm
                                            Password</label>
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" id="password_confirmation_employer" autocomplete="off"
                                            required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <hr>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="toc"
                                                value="1" checked disabled />
                                            <span class="form-check-label fw-semibold text-gray-700 fs-6">I
                                                Agree
                                                <a href="#" class="ms-1 link-primary">Terms
                                                    and conditions</a>.</span>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->

                                    <button type="submit" class="btn btn-lg btn-spectro col-12">
                                        <span>Continue</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="block_verify">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <div class="btn btn-icon btn-sm btn-active-light-primary" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                </div>
                <form id="verifyForm">
                    @csrf
                    <div class="p-3">
                        <h3 class="text-center">Belum Verifikasi Akun?</h3>
                        <p class="text-center">Masukkan email yang digunakan untuk mendaftar akun.</p>

                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bold text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="text"
                                name="email" autocomplete="off" id="email_verify" value="{{ old('email') }}" />
                            <!--end::Input-->
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-light col-12" role="button" data-bs-target="#exampleModalToggle"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary col-12" type="submit">Kirim Ulang Email</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
            data-bs-dismiss="modal">Kembali</button>
    </div>
</div>
