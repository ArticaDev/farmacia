@extends('layouts.default')
@section('content')
    <p>Content</p>
@endsection

@section('card')
<div class="container">
        <div class="row justify-content-center">
            <!-- Start: Card -->
            <div class="col-sm-6 col-lg-4" style="margin-right: auto;margin-bottom: 20px;">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="https://images.pexels.com/photos/159211/headache-pain-pills-medication-159211.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                    <div class="card-body info" style="padding: 22px;">
                        <h3 class="text-break text-left card-title" style="font-family: Oswald, sans-serif;margin-bottom: 17px;">Título do produto</h3>
                        <h3 class="text-left card-title" style="font-family: Oswald, sans-serif;font-size: 24px;">R$ 30,00</h3>
                        <div class="row">
                            <div class="col d-flex"><input type="number" style="width: 75px;margin: 0px;margin-right: auto;" min="1" placeholder="1"><a href="#"><button class="btn btn-danger" type="button" style="margin-right: auto;margin-left: auto;background: rgb(203,36,48);">+ Carrinho<i class="fa fa-shopping-cart" style="margin-left: 10px;"></i></button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Card -->
            <!-- Start: Card -->
            <div class="col-sm-6 col-lg-4" style="margin-right: auto;margin-bottom: 20px;">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="https://images.pexels.com/photos/159211/headache-pain-pills-medication-159211.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                    <div class="card-body info" style="padding: 22px;">
                        <h3 class="text-break text-left card-title" style="font-family: Oswald, sans-serif;margin-bottom: 17px;">Título do produto</h3>
                        <h3 class="text-left card-title" style="font-family: Oswald, sans-serif;font-size: 24px;">R$ 30,00</h3>
                        <div class="row">
                            <div class="col d-flex"><input type="number" style="width: 75px;margin: 0px;margin-right: auto;" min="1" placeholder="1"><a href="#"><button class="btn btn-danger" type="button" style="margin-right: auto;margin-left: auto;background: rgb(203,36,48);">+ Carrinho<i class="fa fa-shopping-cart" style="margin-left: 10px;"></i></button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Card --><!-- Start: Card -->
            <div class="col-sm-6 col-lg-4" style="margin-right: auto;margin-bottom: 20px;">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="https://images.pexels.com/photos/159211/headache-pain-pills-medication-159211.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                    <div class="card-body info" style="padding: 22px;">
                        <h3 class="text-break text-left card-title" style="font-family: Oswald, sans-serif;margin-bottom: 17px;">Título do produto</h3>
                        <h3 class="text-left card-title" style="font-family: Oswald, sans-serif;font-size: 24px;">R$ 30,00</h3>
                        <div class="row">
                            <div class="col d-flex"><input type="number" style="width: 75px;margin: 0px;margin-right: auto;" min="1" placeholder="1"><a href="#"><button class="btn btn-danger" type="button" style="margin-right: auto;margin-left: auto;background: rgb(203,36,48);">+ Carrinho<i class="fa fa-shopping-cart" style="margin-left: 10px;"></i></button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Card -->
        </div>
    </div>
@endsection










@section('footer')
<div style="font-family: Oswald, sans-serif;font-weight: normal;">
        <div class="row">
            <div class="col d-flex d-xl-flex justify-content-center justify-content-xl-center" style="background-color: #ffffff;"><img src="{{asset('assets/img/tim-removebg-preview.png')}}" style="width: 120px;"></div>
        </div>
        <!-- Start: Footer Dark -->
        <footer class="page-footer dark" style="background-color: rgb(203,36,48);">
            <div class="container" style="margin-top: -30px;">
                <div class="row">
                    <div class="col-sm-3">
                        <h5 style="font-weight: normal;">Institucional</h5>
                        <ul>
                            <li><a href="#">Trabalhe conosco</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Serviços</h5>
                        <ul>
                            <li><a href="#">Aferir pressão</a></li>
                            <li><a href="#">Aplicação de vacina</a></li>
                            <li><a href="#">Controle de peso</a></li>
                            <li><a href="#">Testes Covid-19</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Descontos</h5>
                        <ul>
                            <li><a href="#">Convênios</a></li>
                            <li><a href="#">Promoções do dia</a></li>
                            <li><a href="#">Programa de benefícios</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Atendimento</h5>
                        <ul>
                            <li><a href="#">Como Comprar</a></li>
                            <li><a href="#">Frete</a></li>
                            <li><a href="#">Entregas no mesmo dia</a></li>
                            <li><a href="#">Cancelamentos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center"><i class="fa fa-whatsapp" style="font-size: 30px;color: rgb(232,232,232);"></i><i class="fa fa-instagram" style="font-size: 30px;margin-left: 5%;color: rgb(232,232,232);"></i><i class="fa fa-linkedin" style="font-size: 30px;margin-left: 5%;color: rgb(232,232,232);"></i></div>
                </div>
            </div>
            <div class="footer-copyright" style="background-color: #671218;border-style: none;margin-top: 30px;">
                <a href="http://www.articadev.com"><p style="color: rgb(255,255,255);">Desenvolvido por Artica Dev -&nbsp; 2020&nbsp;</p></a>
            </div>
        </footer>
        <!-- End: Footer Dark -->
    </div>
    <!-- End: Footer -->
@endsection