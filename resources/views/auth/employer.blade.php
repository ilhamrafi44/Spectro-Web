@include('layouts.metahead')
<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto bg-spectro w-xl-600px positon-xl-relative">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="../dist/index.html" class="py-2 py-lg-20">
                            <img alt="Logo" src="{{ asset('assets/media/spectro-white.png') }}"
                                class="h-40px h-lg-50px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Temukan job yang
                            sesuai dan
                            hidupkan mimpimu</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">100+ Pekerjaan
                            <br />Yang dapat kamu temukan disini!.
                        </p>
                        <!--end::Description-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Illustration-->
                    <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-450px"
                        style="background-image: url({{ asset('assets/media/spectro-1.png') }})"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <!--begin::Heading-->
                            <div class="mb-10 text-center">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Create an Account</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-4">Already have an account?
                                    <a href="{{ route('login') }}"
                                        class="link-primary text-spectro fw-bold">Sign in here</a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-light-primary fw-bold w-100 mb-10">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />Sign in with Google</button>
                            <!--end::Action-->
                            <!--begin::Separator-->
                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <span class="fw-semibold text-gray-400 fs-7 mx-2">OR</span>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Nama Perusahaan</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="" name="name" autocomplete="off" required/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Nomor HP</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="+628xxxxx" name="no_tlp" autocomplete="off" required/>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bold text-dark fs-6">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="email"
                                    placeholder="" name="email" autocomplete="off" required/>
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
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="password" autocomplete="off" required/>
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
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Hint-->
                                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
                                    symbols.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <label class="form-label fw-bold text-dark fs-6">Confirm Password</label>
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="" name="password_confirmation" autocomplete="off" required/>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <input type="hidden" name="role" value="2">
                            <hr>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <label class="form-check form-check-custom form-check-solid form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-6">I Agree
                                        <a href="#" class="ms-1 link-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">Terms and conditions</a>.</span>
                                </label>
                                <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Terms and conditions</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
<p>
    Halaman ini menyatakan syarat penggunaan (“Ketentuan”) di mana Anda dapat menggunakan Situs Web spectro.id , dan hubungan Anda dengan spectro.id . Harap baca dengan cermat karena hal itu memengaruhi hak dan kewajiban Anda di bawah hukum. Jika Anda tidak menyetujui Ketentuan ini, mohon untuk tidak mendaftar atau menggunakan Situs spectro.id
</p>
<h3>A. Definisi</h3>
<blockquote>
    <p>
        spectro.id : Pengelola situs web spectro.id
Pemberi kerja : pihak, organisasi, individu, atau perusahaan yang menggunakan spectro.id untuk pemenuhan kebutuhan tenaga kerja nya melalui kerjasama lowongan kerja/peluang karir pada situs spectro.id
Pencari Kerja : pihak atau individu yang menggunakan spectro.id untuk melamar pekerjaan atau peluang karir dan untuk mendapatkan informasi yang tersedia di spectro.id atau link-link lain yang terkait.
Pengguna : Mengacu pada individu atau entitas yang menggunakan aspek apa pun dari Situs Web spectro.id
Anda : Orang (atau entitas atas nama siapa Anda bertindak) yang menyetujui Persyaratan ini.
    </p>
</blockquote>
<h3>B. Aturan Penggunaan Situs Web spectro.id</h3>

<p>
    Pengelola situs spectro.id berhak untuk menambah/merubah peraturan-peraturan ini dari waktu ke waktu. Situs spectro.id disediakan terutama untuk mencari dan memasang lowongan kerja dari berbagai perusahaan swasta atau instansi pemerintahan. Untuk mendaftar di situs web spectro.id, anda harus berumur minimal 18 tahun. Pemasang lowongan kerja akan melalui proses kurasi dan diharuskan memberikan informasi yang benar dan dapat dipertanggung jawabkan agar pengguna situs spectro.id terhindar dari hal-hal yang merugikan.

    Pengguna tidak diperkenankan untuk melakukan segala bentuk kejahatan kriminal, termasuk namun tidak terbatas hanya pada kejahatan siber, baik secara langsung maupun tidak langsung, melalui spectro.id Pengelola spectro.id berhak melakukan penghapusan lowongan kerja anda tanpa pemberitahuan sebelumnya. Di situs spectro.id ini terdapat link, berupa banner maupun text, ke situs lain. Pengelola situs spectro.id tidak bertanggung-jawab atas isi dan akibat yang ditimbulkan dari situs-situs tersebut. Anda sepakat untuk menyetujui syarat dan ketentuan lain yang mungkin akan ditambahkan oleh spectro.id dari waktu ke waktu tanpa pemberitahuan sebelumnya dari spectro.id
</p>
<h3>
    C. Ketentuan Tambahan berlaku untuk Pemberi Kerja
</h3>
<p>

    Pemberi Kerja wajib menginformasikan identitas asli perusahaannya dengan sebenar-benarnya untuk kepentingan pendaftaran akun dan penayangan lowongan kerja oleh spectro.id. Segala bentuk penipuan ataupun pencatutan identitas perusahaan sebagai pengguna akan ditindaklanjuti oleh spectro.id.
    Konten lowongan kerja yang dapat ditayangkan pada spectro.id hanyalah konten yang berkaitan dengan kebutuhan rekrutmen.
    Tidak diperkenankan untuk menayangkan materi lowongan kerja yang mengandung unsur pornografi, agama, ras, suku, atau hal lain yang dapat menebar kebencian sosial. Setiap iklan wajib mematuhi Kebijakan Posting Lowongan Pekerjaan.
    Tidak diperkenankan untuk memungut biaya sepeserpun dari pencari kerja yang hendak direkrut melalui spectro.id; baik sebelum maupun sesudah proses interview dilaksanakan; dan dengan alasan apapun, kecuali buaya administrasi resmi yang dipersyaratkan sesuai dengan ketentuan dan tarif resmi yang berlaku.
    Seluruh konten lowongan kerja yang diajukan perlu mendapat persetujuan tayang dari spectro.id Pemberi kerja memahami dan sepakat bahwa dalam kondisi kerja sama antara spectro.id dengan media lainnya, spectro.id berhak untuk menayangkan konten Pemberi kerja melalui media-media tersebut tanpa pemberitahuan sebelumnya.

    Tidak diperkenankan mengganti nama perusahaan terdaftar yang telah lolos verifikasi. Segala bentuk hak yang dimiliki akan dinyatakan gugur secara otomatis jika akun / lowongan kerja terindikasi penipuan dan atau pemilik akun tidak dapat membuktikan identitas asli perusahaannya untuk keperluan verifikasi dan atau tidak menaati “Kondisi dan Ketentuan” yang berlaku di spectro.id
</p>
<h3>
    D. Ketentuan Tambahan berlaku untuk Pencari Kerja
</h3>
<p>

    spectro.id berhak untuk mengedit resume, memblokir account dan menolak memberikan layanan kepada Pencari Kerja yang dianggap melanggar kebijakan spectro.id, di mana interpretasinya menjadi hak spectro.id sepenuhnya. Keputusan spectro.id dalam hal ini bersifat mutlak dan tidak dapat diganggu-gugat.
    Anda mengetahui dan menyetujui bahwa resume anda akan ditampilkan dan digunakan oleh Pemberi kerja untuk keperluan rekrutmen tenaga kerja.
    Anda setuju untuk tidak mencantumkan informasi yang tidak benar, menyesatkan, melecehkan, membangkitkan kebencian, memfitnah, bersifat diskriminatif terhadap suku, agama dan ras tertentu (SARA) ataupun menyinggung prinsip keagamaan.
    Anda merupakan satu-satunya pihak yang bertanggung-jawab penuh atas informasi yang dicantumkan dalam surat lamaran atau resume.
    Anda setuju untuk tidak menuntut spectro.id dan/atau seluruh karyawannya atas kerugian apapun yang terjadi akibat penggunaan spectro.id atau link-link lain yang terkait.
    Anda tidak diperkenankan untuk menggunakan informasi yang diperoleh dari spectro.id atau link-link lain yang terkait untuk tujuan yang melanggar hukum, atau melanggar undang-undang hak cipta dan hak intelektual. Pelanggaran terhadap ketentuan ini dapat diperkarakan ke pengadilan oleh spectro.id dan/atau pihak-pihak lain yang dirugikan.
</p>
<h3>

    E. Kekayaan Intelektual
</h3>
<p>

Situs Web spectro.id , Konten spectro.id , dan semua hak, kepemilikan, dan kepentingan dalam dan ke Situs Web spectro.id dan Konten spectro.id adalah milik eksklusif spectro.id atau pemberi lisensinya.
Tidak diperkenankan mereproduksi, memodifikasi, menyalin atau mendistribusikan atau menggunakan untuk tujuan komersial setiap materi atau Konten spectro.id di Situs Web spectro.id tanpa izin tertulis dari spectro.id
</p>
<h3>

    F. Ketersedian Situs Web spectro.id
</h3>
<p>

    Meskipun kami bertujuan untuk menawarkan layanan terbaik kepada Anda, kami tidak berjanji bahwa layanan di Situs Web spectro.id akan memenuhi kebutuhan Anda.
    Kami tidak dapat menjamin bahwa Situs Web spectro.id akan bebas dari kesalahan, bebas kesalahan, atau bahwa Situs Web dan server spectro.id bebas dari virus atau mekanisme berbahaya lainnya. Jika terjadi kesalahan pada Situs Web spectro.id , Anda harus melaporkannya di sini dan kami akan berusaha memperbaiki kesalahan tersebut secepat mungkin.
    Akses Anda ke Situs Web spectro.id terkadang dibatasi untuk memungkinkan adanya perbaikan, pemeliharaan atau pengenalan konten, fasilitas atau layanan baru. Kami akan berusaha memulihkan akses dan / atau lakanan secepat mungkin.

    Ketentuan ini berlaku mulai 1 September 2023. Jika Anda memiliki pertanyaan tentang Kondisi dan Ketentuan Penggunaan Layanan, silakan hubungi kami di :
</p>

<blockquote>
<pre>

    spectro.id
    Jl. Pinang Ranti no.34 RT.08 / RW.02
    Jakarta Timur, 13560
    info@spectro.id
</pre>
</blockquote>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-spectro">
                                    <span>Submit</span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-semibold fs-6">
                        <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2"
                            target="_blank">About</a>
                        <a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2"
                            target="_blank">Support</a>
                        <a href="https://keenthemes.com/products/oswald-html-pro"
                            class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-up/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
