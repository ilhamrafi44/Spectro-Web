  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar  pt-lg-9 pt-6 ">

      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack flex-wrap ">
          <!--begin::Toolbar wrapper-->
          <div class="d-flex flex-stack flex-wrap gap-4 w-100">

              <!--begin::Page title-->
              <div class="page-title d-flex flex-column gap-3 me-3">
                  <!--begin::Title-->
                  <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">
                      {{ $page_name }}
                  </h1>
                  <!--end::Title-->

                  <!--begin::Breadcrumb-->
                  <ul class="breadcrumb breadcrumb-separatorless fw-semibold">

                      <!--begin::Item-->
                      <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                          <a href="/" class="text-gray-500 text-hover-primary">
                              <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                          </a>
                      </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                          <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                      </li>
                      <!--end::Item-->


                      <!--begin::Item-->
                      <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                          {{ $page_name }} </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                          <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                      </li>
                      <!--end::Item-->


                      <!--begin::Item-->
                      <li class="breadcrumb-item text-gray-500">
                          Default </li>
                      <!--end::Item-->


                  </ul>
                  <!--end::Breadcrumb-->
              </div>
              <!--end::Page title-->

              <!--begin::Actions-->
              {{-- <div class="d-flex align-items-center gap-3 gap-lg-5">
                  <!--begin::Secondary button-->
                  <div class="m-0">
                      <a href="#" class="btn btn-flex btn-sm btn-color-gray-700 bg-body fw-bold px-4"
                          data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">
                          New Project
                      </a>
                  </div>
                  <!--end::Secondary button-->

                  <!--begin::Primary button-->
                  <a href="#" class="btn btn-flex btn-center btn-dark btn-sm px-4" data-bs-toggle="modal"
                      data-bs-target="#kt_modal_invite_friends">
                      Reports
                  </a>
                  <!--end::Primary button-->
              </div> --}}
              <!--end::Actions-->
          </div>
          <!--end::Toolbar wrapper-->
      </div>
      <!--end::Toolbar container-->
  </div>
  <!--end::Toolbar-->
