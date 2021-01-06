@extends('layouts.app')

@section('mycontent')

    <header>
        <nav class="nav1 navbar navbar-expand-lg p-2 border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand mb-2 coll" href="/">SAFE A LIFE<span class="logo"></span></a>
                <button class="navbar-toggler " type="button" data-toggle="collapse"
                        data-target="#navbar-togglerDemo02" aria-controls="navbar-togglerDemo02"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="margin-bottom: 0;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-togglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/">Home
                                <span
                                    class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/donerRegs">
                                {{--                                        href="/posts/{{$post->id}}"--}}
                                Doner Registration <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/donerReq">Doner request <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/learn">Learn <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active bor p-2">
                            <a class="nav-link coll" href="/contact"> <span >
                                            Contact
                                        </span> <span class="sr-only">(current)</span></a>
                        </li>
                        {{--                                <li class="nav-item active bor">--}}
                        {{--                                    <a class="nav-link" href="Arabic.html"> <span class="badge badge-secondary">--}}
                        {{--                                            Arabic--}}
                        {{--                                        </span> <span class="sr-only">(current)</span></a>--}}
                        {{--                                </li>--}}
                    </ul>

                </div>
            </div>
        </nav>


    </header>
    <section id="reg" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 donnerReg p-4 shadow">
                    <div class="borderHover">
                        <h2 id="heading" class=" mt-3 text-center">Doner Request</h2>
                        <div class="hBorder m-auto"></div>
                    </div>
                    <form class="mt-5 px-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName" placeholder="name">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Your name must be 4-20 characters long, contain letters and  spaces, and must not contain special characters, or emoji, and first letter must be camel case.
                            </small>
                        </div>
                        <div class="form-group">
                            <input type="text" class=" form-control" id="inputAddress" placeholder="full address">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="alaa form-control phoneNum" id="inputPhone"
                                       placeholder="phone number">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control phoneNum" id="inputPhone2"
                                       placeholder="anthor number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control alert-dark">
                                    <option selected>blood type</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control alert-dark">
                                    <option selected>time of calling</option>
                                    <option>24 hours</option>
                                    <option>from 8am to 3pm</option>
                                    <option>from 3pm to 11pm</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group text-center ">
                            <label class="form-check-label check">calling way:</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions"
                                           id="inlineRadio1" value="option1"> SMS
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions"
                                           id="inlineRadio2" value="option2"> phone call
                                </label>
                            </div>
                        </div>

                        <div class="form-group text-center ">
                            <label class="form-check-label check">gander:</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                           id="inlineRadio1" value="option1"> male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                           id="inlineRadio2" value="option2"> female
                                </label>
                            </div>
                        </div>
                        <button id="addBtn" type="submit" class="btn  btn-outline btn-lg rounded-0 ">SEND
                            MESSAGE</button>
                    </form>
                    <table>
                          <tr>
                            <th>NO</th>
                            <th>Details</th>
                          </tr>
                          <tr>
                            <td>  1  </td>
                            <td>   Shahdan Mostafa </br> 27 yrs </br> (+2) 01069672692 </td>
                          </tr>
                          <tr>
                            <td>  2  </td>
                            <td>   Hend Mohamed </br> 27 yrs </br> (+2) 01069672692 </td>
                          </tr>
                          <tr>
                            <td>  3  </td>
                            <td>   Romaisaa </br> 27 yrs </br> (+2) 01069672692 </td>
                          </tr>
                          <tr>
                            <td>  4  </td>
                            <td>   Merna </br> 27 yrs </br> (+2) 01069672692 </td>
                          </tr>
                        </table>

                </div>
                <div class="col-md-1"></div>


            </div>
        </div>
    </section>



@endsection
