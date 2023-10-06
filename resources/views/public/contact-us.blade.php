@extends('public.components.layout')

@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern bg-primary custom-page-header mb-0">

        <div class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 400" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" data-plugin-float-element-svg="true">
                <circle id="svg_2" r="7.5" cy="539.5" cx="209.5" fill="#FFF" opacity="0.2" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"/>
                <circle id="svg_3" r="12" cy="211" cx="268" fill="#FFF" opacity="0.2" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}"/>
                <circle id="svg_4" r="17" cy="144" cx="1864" fill="#FFF" opacity="0.2" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"/>
                <circle id="svg_6" r="28.5" cy="326.74992" cx="327.75073" stroke-miterlimit="10" stroke-width="3" stroke="6CD499" fill="none"/>
                <circle opacity="0.2" stroke="#ffffff" id="svg_8" r="21.5" cy="340.25" cx="90.74976" fill="none" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"/>
                <circle stroke="#ffffff" opacity="0.2" id="svg_9" r="14.625" cy="689.625" cx="128.87476" fill="none" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}"/>
            </svg>
        </div>

        <div class="container position-relative z-index-1 mt-4 h-100">
            <div class="row h-100">
                <div class="col align-self-end">
                    <div class="d-block">
                        <span class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2">Hubungi Kami</span>
                    </div>
                    <div class="d-block">
                        <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-2 line-height-1 mb-0">Hubungi Kami</h1>
                    </div>
                    <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
                        <li><a href="#">Home</a></li>
                        <li class="active">Hubungi Kami</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="section bg-color-dark text-light border-0 py-0 m-0">
        <div class="container">
            <div class="row py-3">
                <div class="col py-5">

                    <h2 class="font-weight-bold text-color-light text-9 mb-4">Hubungi Kami</h2>
                    <p class="text-4-5 line-height-7">Selamat datang di halaman Hubungi Kami kami. Kami sangat menghargai minat dan partisipasi Anda. Di sini, Anda dapat menghubungi tim kami untuk bertanya, memberikan umpan balik, atau berbagi pengalaman Anda dengan produk atau layanan kami. Kami selalu siap mendengar dari Anda. </p>

                    <div class="row">
                        <div class="col-md-6 py-3">

                            <h2 class="font-weight-bold text-color-light text-6 mb-3">SEMARANG</h2>

                            <p class="font-weight-semi-bold text-4 text-light mb-3">Jl. Imam Bonjol No.207, Pendrikan Kidul Kecamatan : Semarang Tengah Kota : Semarang Provinsi : Jawa Tengah Kode Pos : 50131</p>
                            <ul class="list list-icons mb-0">
                                <li><i class="far fa-envelope"></i> <a href="siresma.bemfik2023@gmail.com">siresma.bemfik2023@gmail.com</a></li>
                                <li class="mb-0"><i class="fas fa-mobile-alt left-3"></i> <a href="tel">+6285941396579</a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-4">
        <div class="row">
            <div class="col">

                <h2 class="font-weight-bold text-color-dark text-7 mt-0 mb-4">Send a Message</h2>

                <form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row row-gutter-sm">
                        <div class="form-group col-lg-6 mb-4">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required placeholder="Your Name">
                        </div>
                        <div class="form-group col-lg-6 mb-4">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" id="phone" required placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row row-gutter-sm">
                        <div class="form-group col-lg-6 mb-4">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required placeholder="Your Name">
                        </div>
                        <div class="form-group col-lg-6 mb-4">
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required placeholder="Subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <button type="submit" class="btn btn-gradient font-weight-bold btn-px-5 btn-py-3" data-loading-text="Loading...">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
@stop
