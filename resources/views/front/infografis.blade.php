<!-- ======= Portfolio Section ======= -->
<section id="infografis" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2>Infografis</h2>
        <p>Informasi tentang teknologi terkini yang disajikan dalam format visual infografis</p>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 portfolio-container">

        @foreach($infografis as $i)
        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <a href="infografis/{{ $i->file }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="storage/infografis/{{ $i->file }}" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">{{ $i->judul }}</a></h4>
            </div>
            </div>
        </div>
        @endforeach

        </div>

    </div>

    </div>
</section><!-- End Portfolio Section -->