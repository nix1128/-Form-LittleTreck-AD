@extends('layouts.app')

@section('title', 'Form')


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Form</title>
    </head>

    <body>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">

            <button class="navbar-toggler text-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                Menu <span class="navbar-toggler-icon"></span>
            </button>




            <form class="form-inline col-md-8 " method="POST" action="/store">
                @csrf

                <a class="navbar-brand" href="#">Brand</a>
                <input class="form-control mr-sm-2 w-50" style="border-radius:1rem" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>





                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                    </ul>
                </div>
        </nav>


        <div class="m-5 ">

            <div class="container card mt-10 p-5 " style="background-color: lightgray">

                <div class="row card-body">
                    <div class="col-md-4 col-sm-4 col-12">

                        <h4> CLIENT * </h4>


                    </div>
                    <div class="col ">
                        <input class="w-100" type="text" name="client" list="client" />
                        <datalist id="client">
                            <option>Client A</option>
                            <option>Client B</option>
                            <option>Client C</option>
                        </datalist>
                    </div>
                </div>
                <div class="row card-body">
                    <div class="col-md-4 col-sm-4 col-12">
                        <h4> MATTER * </h4>
                    </div>
                    <div class="col ">
                        <input class="w-100" type="text" name="matter" />
                    </div>
                </div>
                <div class="container card  p-0  bg-light ">

                    <div class="row card-body">
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4 class="float-start"> CLIENT NAME </h4>
                        </div>
                        <div class="col ">
                            <p>Test Client</p>
                        </div>
                    </div>


                    <div class="row card-body">
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4 class="float-start"> MATTER NAME </h4>
                        </div>
                        <div class="col ">
                            <p>LEGAL WORK</p>
                        </div>
                    </div>

                    <div class="row card-body">
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4 class="float-start"> ISSUER </h4>
                        </div>
                        <div class="col ">

                            <select  class="form-select w-50" aria-label="Default select example" name = "issuer">
                                <option selected>Select issuer</option>
                                <option value="Atanas Mihnev">Atanas Mihnev</option>
                                <option value="Elvis Metodiev">Elvis Metodiev</option>
                                <option value="Nikolay Sabev">Nikolay Sabev</option>

                            </select>

                        </div>
                    </div>

                    <div class="row card-body">
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4 class="float-start"> Language </h4>
                        </div>
                        <div class="col ">
                            <select class="form-select w-50" aria-label="Default select example" name = "language">
                                <option selected>Select language</option>
                                <option value="English">English</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Mandarin">Mandarin</option>

                            </select>
                        </div>
                    </div>

                    <div class="row card-body">
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4 class="float-start"> Currency </h4>
                        </div>
                        <div class="col ">
                            <select class="form-select w-50" aria-label="Default select example"  name = "curency">
                                <option selected>Select curency</option>
                                <option value="Dollar">Dollar</option>
                                <option value="EURO">EURO</option>

                            </select>
                        </div>
                    </div>

                    <div class="row card-body">
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4 class="float-start"> Invoice No </h4>
                        </div>
                        <div class="col ">
                            <input class="w-100" type="number" name="Invoice_no" />
                        </div>
                    </div>


                    <div class="row card-body">
                        <div class="row card-body">
                            <div class="col-md-4 col-sm-4 col-12">
                                <h4 class="float-start"> Isuing Date </h4>
                            </div>
                            <div class="col ">
                                <div class="form-group w-50">

                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control"
                                        name="issuing_date">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row card-body">
                        <div class="row card-body">
                            <div class="col-md-4 col-sm-4 col-12">
                                <h4 class="float-start"> Amount</h4>
                            </div>
                            <div class="col ">

                                <input class="w-50" type="number"  value= "1" name="Amount" />

                            </div>
                        </div>
                    </div>

                    <div class="row card-body">
                        <div class="row card-body">
                            <div class="col-md-4 col-sm-4 col-12">
                                <h4 class="float-start"> Price</h4>
                            </div>
                            <div class="col ">

                                <input class="w-50" type="number"   name="Price" /> <label class="text-primary">€</label>

                            </div>
                        </div>
                    </div>

                    <div class="row card-body">
                        <div class="row card-body">
                            <div class="col-md-4 col-sm-4 col-12">
                                <input class="form-check-input" type="checkbox"  id="flexCheckChecked" name = "Discount" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Discount
                                </label>
                            </div>
                            <div class="col ">

                                <input class="w-50" type="number" name = "Discount" /> <label class="text-primary">%</label>

                            </div>
                        </div>
                    </div>


                    <div class="row card-body">
                        <div class="row card-body">
                            <div class="col-md-4 col-sm-4 col-12">
                                <h4 class="float-start"> VAT</h4>
                            </div>
                            <div class="col ">

                                <input class="w-50" type="number"  value= "20" name="VAT" />

                            </div>
                        </div>
                    </div>


                    <div class="text-right pb-4 p-4">
                        <button type="submit" class="btn btn-primary ">CREATE INVOICE</button>
                        <button type="reset" class="btn btn-secondary ">Clear Form</button>
                    </div>




                </div>
            </div>

        </div>

        </form>


        <style>
            h4 {
                font-size: 1rem;
                margin: 0.5rem 0;
                font-family: monospace
            }

        </style>







        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </body>

    </html>
