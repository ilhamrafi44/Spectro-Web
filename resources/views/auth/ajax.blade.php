
<script>
    $(document).ready(function() {
        $("#loginForm").submit(function(e) {
            e.preventDefault();
            var target = document.querySelector("#block_loading");
            var blockUI = new KTBlockUI(target);
            blockUI.block();
            var email = $("#email").val();
            var password = $("#password").val();
            var remember = $("#remember").prop('checked');
            $.ajax({
                url: "{{ route('login.ajax') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'email': email,
                    'password': password,
                    'remember': remember
                },
                success: function(response) {
                    blockUI.release();
                    blockUI.destroy();
                    if (response.error) {
                        Swal.fire({
                            text: response.error,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    } else {
                        Swal.fire({
                            text: response.success,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success"
                            }
                        });
                        setTimeout(function() {
                            window.location.href = '/home';
                        }, 2000);
                    }
                },
                error: function(xhr, status, error) {
                    blockUI.release();
                    blockUI.destroy();
                    Swal.fire({
                        text: "Kesalahan Sistem",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-danger"
                        }
                    });
                }
            });
        });

        $("#verifyForm").submit(function(e) {
            e.preventDefault();
            var target = document.querySelector("#block_verify");
            var blockUI = new KTBlockUI(target);
            blockUI.block();
            var email = $("#email_verify").val();
            $.ajax({
                url: "{{ route('verify.ajax') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'email': email,
                },
                success: function(response) {
                    blockUI.release();
                    blockUI.destroy();
                    if (response.error) {
                        Swal.fire({
                            text: response.error,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    } else {
                        Swal.fire({
                            text: response.success,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success"
                            }
                        });
                    }
                },
                error: function(xhr, status, error) {
                    blockUI.release();
                    blockUI.destroy();
                    Swal.fire({
                        text: "Kesalahan Sistem",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-danger"
                        }
                    });
                }
            });
        });

        $("#candidateForm").submit(function(e) {
            e.preventDefault();
            var target = document.querySelector("#block_loading");
            var blockUI = new KTBlockUI(target);
            blockUI.block();
            var name = $("#name_candidate").val();
            var no_tlp = $("#no_tlp_candidate").val();
            var email = $("#email_candidate").val();
            var password = $("#password_candidate").val();
            var password_confirmation = $("#password_confirmation_candidate").val();
            var jenis_kelamin = $("#jenis_kelamin_candidate").val();
            $.ajax({
                url: "{{ route('register.ajax') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'name': name,
                    'email': email,
                    'no_tlp': no_tlp,
                    'password': password,
                    'password_confirmation': password_confirmation,
                    'jenis_kelamin': jenis_kelamin,
                    'type': 'candidate'
                },
                success: function(response) {
                    blockUI.release();
                    blockUI.destroy();
                    if (response.error) {
                        Swal.fire({
                            text: response.error,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    } else {
                        $('a[href="#kt_tab_pane_1"]').tab('show');
                        Swal.fire({
                            text: response.success,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success"
                            }
                        });
                    }
                },
                error: function(xhr, status, error) {
                    blockUI.release();
                    blockUI.destroy();
                    Swal.fire({
                        text: "Kesalahan Sistem",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-danger"
                        }
                    });
                }
            });
        });

        $("#employerForm").submit(function(e) {
            e.preventDefault();
            var target = document.querySelector("#block_loading");
            var blockUI = new KTBlockUI(target);
            blockUI.block();
            var no_tlp = $("#no_tlp_employer").val();
            var name = $("#name_employer").val();
            var email = $("#email_employer").val();
            var password = $("#password_employer").val();
            var password_confirmation = $("#password_confirmation_employer").val();
            $.ajax({
                url: "{{ route('register.ajax') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'name': name,
                    'email': email,
                    'password': password,
                    'no_tlp': no_tlp,
                    'password_confirmation': password_confirmation,
                    'type': 'employer'
                },
                success: function(response) {
                    blockUI.release();
                    blockUI.destroy();
                    if (response.error) {
                        Swal.fire({
                            text: response.error,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    } else {
                        $('a[href="#kt_tab_pane_1"]').tab('show');
                        Swal.fire({
                            text: response.success,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success"
                            }
                        });
                    }
                },
                error: function(xhr, status, error) {
                    blockUI.release();
                    blockUI.destroy();
                    Swal.fire({
                        text: error,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-danger"
                        }
                    });
                }
            });
        });

    });
</script>

