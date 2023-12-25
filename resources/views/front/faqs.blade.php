<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

    <div class="row gy-4">

        <div class="col-lg-4">
            <div class="content px-xl-5">
                <h3>Frequently Asked <strong>Questions</strong></h3>
                <p>Sebelum mulai mengajukan layanan E-KTP, ada baiknya dibaca terlebih dahulu syarat dan ketentuan yang harus dipersiapkan</p>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="accordion accordion-flush" id="faqlist">
                @foreach($faqs as $key => $f)
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="{{ $f->key+1 }}00">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $f->id_faqs }}">
                            <span class="num">{{ $key+1 }}. </span>{{ $f->judul }}
                        </button>
                    </h3>
                    <div id="faq-content-{{ $f->id_faqs }}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $f->keterangan }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->