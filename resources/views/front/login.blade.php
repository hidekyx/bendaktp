<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header p-0">
        <h2>Login</h2>
    </div>

    <div class="row gx-lg-0 gy-4">

        <div class="offset-lg-4 col-lg-4">
        <form action="{{ asset('/autentikasi') }}" method="post" role="form" class="php-email-forms">
            @csrf
            <div class="row">
                <div style="text-align: center;">
                    <img src="assets/img/logo-benda.png" style="text-align: center; max-width: 150px;" alt="">
                    <h2>BENDA E-KTP</h2>
                </div>
                <!-- pesan error -->
                <div class="col-md-12">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible text-dark" role="alert">
                            @foreach ($errors->all() as $error)
                            <span class="text-sm">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible text-dark" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <!-- END -->
                <div class="col-md-12 form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" maxlength="30" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Your password" maxlength="30" required>
                </div>
                
            </div>
            <div class="text-center mt-3"><button type="submit">Login</button></div>
        </form>
        </div><!-- End Contact Form -->

    </div>

    </div>
</section>