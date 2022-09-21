@extends('layouts.master_home')
@section('home_content')
    <div id="contact" class="contact-us section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Estamos aqui para lo que nos necesites</h2>
                        <p>Con el objetivo de hacer realidad tu proyecto cumplimos con los tiempos establecidos y la certeza
                            de que tendras un exelente servicio por parte de nosotros</p>


                        <div class="email">
                            <img src="{{ asset('fontend/assets/images/gmail.png') }}" alt="">

                            <a href="mailto:tuwebenlinea.cl@gmail.com" class="animated-button1">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                CLICK AQUI
                            </a>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('contact.form') }}" id="contact" action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Nombre"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="surname" name="subject" id="surname" placeholder="asunto"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Enviar Mensaje</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">

                            <img src="{{ asset('fontend/assets/images/contact-decoration.png') }}" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
