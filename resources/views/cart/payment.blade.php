@extends('layouts.page')

@section('content')
    <section class="pt-0">
        
        <div class="pt-3 pt-lg-4 pb-5 pb-lg-6 mb-2 mb-lg-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="steps steps-sm">
                            <ul class="row">
                                <li class="col">
                                    <a href="<?php echo url('/cart')?>">
                                        <span class="step-item" data-text="Carrito">
                                            <span>1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col  current">
                                    <a href="<?php echo url('/payment')?>">
                                        <span class="step-item" data-text="Metodos de Pago">
                                            <span>2</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col">
                                    <a href="<?php echo url('/receipt')?>">
                                        <span class="step-item" data-text="Informacion de la Compra">
                                            <span>3</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
    
                    <h2 class="pre-label font-size-base">Elija su Metodo de Pago</h2>
    
                    <!-- Checkout credit card -->
    
                    <div class="accordion br-sm" id="accordionPaymentExample">
    
                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header py-4 p-3 p-md-5">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <div class="custom-control custom-radio d-flex align-items-center">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input form-radio" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio1">
                                                <span class="h5 m-0">Tarjeta de Credito</span> <br />
                                                <small class="d-none d-lg-inline-block">MasterCard, Maestro, Visa, Visa Electron, JCB and American Express</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <div class="h1 m-0">
                                            <i class="fa fa-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="collapse pt-0" aria-labelledby="customRadio1" data-parent="#accordionPaymentExample">
                                <hr class="m-0">
                                <div class="card-body">
                                    <form action="/action_page.php">
                                        <div class="form-row mb-1">
                                            <div class="col">
                                                <input type="text" class="form-control form-control-simple" placeholder="Name on card">
                                            </div>
                                        </div>
    
                                        <div class="form-row mb-1">
                                            <div class="col">
                                                <input type="tel" class="form-control form-control-simple" placeholder="0000-0000-0000-0000" inputmode="numeric" maxlength="19" pattern="[0-9\s]{13,19}">
                                            </div>
                                        </div>
    
                                        <div class="form-row mb-1">
                                            <div class="col">
                                                <input type="text" class="form-control form-control-simple" placeholder="MM/YY">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control form-control-simple" placeholder="CVV">
                                            </div>
                                        </div>
    
                                        <div class="form-row mt-3">
                                            <div class="col">
                                                <button class="btn btn-rounded btn-primary btn-sm px-3">
                                                    Proceed payment
                                                </button>
                                            </div>
                                            <div class="col text-right">
                                                <small>Accepted Cards</small>
                                                <div class="icon-container">
                                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
    
                                </div>
                            </div>
                        </div>
    
                        <!-- Checkout Paypal -->
    
                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header py-4 p-3 p-md-5">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <div class="custom-control custom-radio d-flex align-items-center">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio2">
                                                <span class="h5 m-0">PayPal</span><br />
                                                <small class="d-none d-lg-inline-block">Purchase with your fingertips. Look for us the next time you're paying from a mobile app, and checkout faster on thousands of mobile websites.</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <div class="h1 m-0">
                                            <i class="fa fa-paypal"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse pt-0" aria-labelledby="customRadio2" data-parent="#accordionPaymentExample">
                                <hr class="m-0">
                                <div class="card-body">
                                    <p>Incidunt exercitationem optio quos doloremque neque placeat recusandae obcaecati ab quidem commodi, eaque earum unde?</p>
                                    <button class="btn btn-rounded btn-primary btn-sm px-3">
                                        <i class="fa fa-paypal"></i> Got to checkout
                                    </button>
                                </div>
                            </div>
                        </div>
    
                        <!-- Checkout Banktransfer -->
    
                        <div class="card card-fill mb-3 shadow-sm rounded">
                            <div class="card-header py-4 p-3 p-md-5">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <div class="custom-control custom-radio d-flex align-items-center">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">
                                            <label class="custom-control-label pl-2 pl-lg-4" for="customRadio3">
                                                <span class="h5 m-0">Transferencia Bancaria </span><br />
                                                <small class="d-none d-lg-inline-block">
                                                    You can make payments directly into our bank account and email the bank wire transfer receipt to us.
                                                    We recommend bank wire transfer for payments exceeding $500,00.</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <div class="h1 m-0">
                                            <i class="fa fa-money"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse pt-0" aria-labelledby="customRadio3" data-parent="#accordionPaymentExample">
                                <hr class="m-0">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, consectetur ullam dicta explicabo sit corrupti incidunt
                                    exercitationem optio quos doloremque neque placeat recusandae obcaecati ab quidem commodi, eaque earum unde?
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!--Buttons-->
    
                    <div class="py-3">
                        <div class="row align-items-center no-gutters">
                            <div class="col-6">
                                <a href="<?php echo url('/cart')?>" class="btn btn-dark btn-primary btn-rounded px-lg-5">Volver</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?php echo url('/receipt')?>" class="btn btn-primary btn-rounded px-lg-5">Confirmar pago</a>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

@endsection