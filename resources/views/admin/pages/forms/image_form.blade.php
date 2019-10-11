<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo_1/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 06:43:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <!-- core:css -->
    <link rel="stylesheet" href="../../../assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png"/>
</head>
<body>
<div class="main-wrapper">

    <!-- partial:../../partials/_sidebar.html -->
@yield('sidebar')

    <!-- partial -->

    <div class="page-wrapper">

        <!-- partial:../../partials/_navbar.html -->
  @yield('right_panel')
        <!-- partial -->

        <div class="page-content">

            {{--            <nav class="page-breadcrumb">--}}
            {{--                <ol class="breadcrumb">--}}
            {{--                    <li class="breadcrumb-item"><a href="#">Forms</a></li>--}}
            {{--                    <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>--}}
            {{--                </ol>--}}
            {{--            </nav>--}}

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Image</h6>

                            {!! Form::open(['method' => 'POST', 'action'=>'SliderImagesController@store','files'=>true]) !!}

                            <div class="form-group">

                                {!! Form::label('name','') !!}

                                {!! Form::file('file',null,['class'=>'form-control']) !!}

                            </div>

                            <div class="form-group">
                                {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}


                            {{--                            <form class="forms-sample">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label for="exampleInputUsername1">Category</label>--}}
                            {{--                                    <input type="text" class="form-control" id="exampleInputUsername1"--}}
                            {{--                                           autocomplete="off" placeholder="Name">--}}
                            {{--                                </div>--}}
                            {{--                                <button type="submit" class="btn btn-primary mr-2">Add</button>--}}
                            {{--                                <button type="reset" class="btn btn-light">Cancel</button>--}}
                            {{--                            </form>--}}




                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Slider Images Table</h6>
                            {{--                            <p class="card-description">Add class <code>.table</code></p>--}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($slides)
                                        @foreach($slides as $img)

                                            <tr>

                                                <td>{{$img->id}}</td>
                                                <td>
                                                    <img style="height:200px; width:200px;" class="rounded-0" src="/images/{{$img->file}}" alt="">
                                                </td>
                                                <td>

                                                    <a href="{{route('slides.edit',$img->id)}}">Edit</a>
                                                </td>
                                                <td>

                                                    {!! Form::open(['method' => 'DELETE', 'action'=>['SliderImagesController@destroy',$img->id]]) !!}

                                                    <div class="form-group">
                                                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                                    </div>

                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>

                                        @endforeach
                                    @else


                                        <h1 class="text-center">No Categories</h1>


                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            {{--                <div class="col-md-6 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h6 class="card-title">Horizontal Form</h6>--}}
            {{--                            <form class="forms-sample">--}}
            {{--                                <div class="form-group row">--}}
            {{--                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>--}}
            {{--                                    <div class="col-sm-9">--}}
            {{--                                        <input type="text" class="form-control" id="exampleInputUsername2"--}}
            {{--                                               placeholder="Email">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group row">--}}
            {{--                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>--}}
            {{--                                    <div class="col-sm-9">--}}
            {{--                                        <input type="email" class="form-control" id="exampleInputEmail2"--}}
            {{--                                               autocomplete="off" placeholder="Email">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group row">--}}
            {{--                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>--}}
            {{--                                    <div class="col-sm-9">--}}
            {{--                                        <input type="number" class="form-control" id="exampleInputMobile"--}}
            {{--                                               placeholder="Mobile number">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group row">--}}
            {{--                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>--}}
            {{--                                    <div class="col-sm-9">--}}
            {{--                                        <input type="password" class="form-control" id="exampleInputPassword2"--}}
            {{--                                               autocomplete="off" placeholder="Password">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-check form-check-flat form-check-primary mt-0">--}}
            {{--                                    <label class="form-check-label">--}}
            {{--                                        <input type="checkbox" class="form-check-input">--}}
            {{--                                        Remember me--}}
            {{--                                    </label>--}}
            {{--                                </div>--}}
            {{--                                <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}
            {{--                                <button class="btn btn-light">Cancel</button>--}}
            {{--                            </form>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="row">--}}
            {{--                <div class="col-md-12 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h6 class="card-title">Inputs</h6>--}}
            {{--                            <form>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputText1">Text Input</label>--}}
            {{--                                    <input type="text" class="form-control" id="exampleInputText1" value="Amiah Burton"--}}
            {{--                                           placeholder="Enter Name">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputEmail3">Email Input</label>--}}
            {{--                                    <input type="email" class="form-control" id="exampleInputEmail3"--}}
            {{--                                           value="amiahburton@gmail.com" placeholder="Enter Email">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputNumber1">Number Input</label>--}}
            {{--                                    <input type="number" class="form-control" id="exampleInputNumber1" value="6473786">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputPassword3">Password Input</label>--}}
            {{--                                    <input type="password" class="form-control" id="exampleInputPassword3"--}}
            {{--                                           value="amiahburton" placeholder="Enter Password">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputDisabled1">Disabled Input</label>--}}
            {{--                                    <input type="text" class="form-control" id="exampleInputDisabled1" disabled--}}
            {{--                                           value="Amiah Burton">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputPlaceholder">Placeholder</label>--}}
            {{--                                    <input type="text" class="form-control" id="exampleInputPlaceholder"--}}
            {{--                                           placeholder="Enter Your Name">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleInputReadonly">Readonly</label>--}}
            {{--                                    <input type="text" class="form-control" id="exampleInputReadonly" readonly--}}
            {{--                                           value="Amiah Burton">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleFormControlSelect1">Select Input</label>--}}
            {{--                                    <select class="form-control" id="exampleFormControlSelect1">--}}
            {{--                                        <option selected disabled>Select your age</option>--}}
            {{--                                        <option>12-18</option>--}}
            {{--                                        <option>18-22</option>--}}
            {{--                                        <option>22-30</option>--}}
            {{--                                        <option>30-60</option>--}}
            {{--                                        <option>Above 60</option>--}}
            {{--                                    </select>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleFormControlSelect2">Example multiple select</label>--}}
            {{--                                    <select multiple class="form-control" id="exampleFormControlSelect2">--}}
            {{--                                        <option>1</option>--}}
            {{--                                        <option>2</option>--}}
            {{--                                        <option>3</option>--}}
            {{--                                        <option>4</option>--}}
            {{--                                        <option>5</option>--}}
            {{--                                        <option>6</option>--}}
            {{--                                        <option>7</option>--}}
            {{--                                        <option>8</option>--}}
            {{--                                    </select>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="exampleFormControlTextarea1">Example textarea</label>--}}
            {{--                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-groupp">--}}
            {{--                                    <label for="customRange1">Range Input</label>--}}
            {{--                                    <input type="range" class="custom-range" id="customRange1">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" class="form-check-input">--}}
            {{--                                            Default checkbox--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" checked class="form-check-input">--}}
            {{--                                            Checked--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" disabled class="form-check-input">--}}
            {{--                                            Disabled checkbox--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" class="form-check-input" disabled checked>--}}
            {{--                                            Disabled checked--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" class="form-check-input">--}}
            {{--                                            Inline checkbox--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" checked class="form-check-input">--}}
            {{--                                            Checked--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" disabled class="form-check-input">--}}
            {{--                                            Inline disabled checkbox--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="checkbox" class="form-check-input" disabled checked>--}}
            {{--                                            Disabled checked--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios"--}}
            {{--                                                   id="optionsRadios" value="option1">--}}
            {{--                                            Default--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios"--}}
            {{--                                                   id="optionsRadios1" value="option1">--}}
            {{--                                            Default--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios2"--}}
            {{--                                                   id="optionsRadios2" value="option2" checked="">--}}
            {{--                                            Selected--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios3"--}}
            {{--                                                   id="optionsRadios3" value="option3" disabled="">--}}
            {{--                                            Disabled--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios4"--}}
            {{--                                                   id="optionsRadios4" value="option4" disabled="" checked="">--}}
            {{--                                            Selected and disabled--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios5"--}}
            {{--                                                   id="optionsRadios5" value="option5">--}}
            {{--                                            Default--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios5"--}}
            {{--                                                   id="optionsRadios6" value="option5">--}}
            {{--                                            Default--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios7"--}}
            {{--                                                   id="optionsRadios7" value="option6" checked="">--}}
            {{--                                            Selected--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios8"--}}
            {{--                                                   id="optionsRadios8" value="option7" disabled="">--}}
            {{--                                            Disabled--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="form-check form-check-inline">--}}
            {{--                                        <label class="form-check-label">--}}
            {{--                                            <input type="radio" class="form-check-input" name="optionsRadios9"--}}
            {{--                                                   id="optionsRadios9" value="option8" disabled="" checked="">--}}
            {{--                                            Selected and disabled--}}
            {{--                                        </label>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label>File upload</label>--}}
            {{--                                    <input type="file" name="img[]" class="file-upload-default">--}}
            {{--                                    <div class="input-group col-xs-12">--}}
            {{--                                        <input type="text" class="form-control file-upload-info" disabled=""--}}
            {{--                                               placeholder="Upload Image">--}}
            {{--                                        <span class="input-group-append">--}}
            {{--												<button class="file-upload-browse btn btn-primary"--}}
            {{--                                                        type="button">Upload</button>--}}
            {{--											</span>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <button class="btn btn-primary" type="submit">Submit form</button>--}}
            {{--                            </form>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="row">--}}
            {{--                <div class="col-md-6 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h6 class="card-title">Input Size</h6>--}}
            {{--                            <p class="mb-3">Use class <code>.form-control-lg</code> or <code>.form-control-sm</code></p>--}}
            {{--                            <form>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="colFormLabelSm">Small</label>--}}
            {{--                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm"--}}
            {{--                                           placeholder="form-control-sm">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group">--}}
            {{--                                    <label for="colFormLabel">Default</label>--}}
            {{--                                    <input type="email" class="form-control" id="colFormLabel"--}}
            {{--                                           placeholder="form-control">--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group mb-0">--}}
            {{--                                    <label for="colFormLabelLg" class="pb-0">Large</label>--}}
            {{--                                    <input type="email" class="form-control form-control-lg" id="colFormLabelLg"--}}
            {{--                                           placeholder="form-control-lg">--}}
            {{--                                </div>--}}
            {{--                            </form>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-6 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h6 class="card-title">Select Size</h6>--}}
            {{--                            <p class="mb-3">Use class <code>.form-control-lg</code> or <code>.form-control-sm</code></p>--}}
            {{--                            <div class="form-group">--}}
            {{--                                <label>Small</label>--}}
            {{--                                <select class="form-control form-control-sm mb-3">--}}
            {{--                                    <option selected>Open this select menu</option>--}}
            {{--                                    <option value="1">One</option>--}}
            {{--                                    <option value="2">Two</option>--}}
            {{--                                    <option value="3">Three</option>--}}
            {{--                                </select>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}
            {{--                                <label>Default</label>--}}
            {{--                                <select class="form-control mb-3">--}}
            {{--                                    <option selected>Open this select menu</option>--}}
            {{--                                    <option value="1">One</option>--}}
            {{--                                    <option value="2">Two</option>--}}
            {{--                                    <option value="3">Three</option>--}}
            {{--                                </select>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}
            {{--                                <label>Large</label>--}}
            {{--                                <select class="form-control form-control-lg">--}}
            {{--                                    <option selected>Open this select menu</option>--}}
            {{--                                    <option value="1">One</option>--}}
            {{--                                    <option value="2">Two</option>--}}
            {{--                                    <option value="3">Three</option>--}}
            {{--                                </select>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="row">--}}
            {{--                <div class="col-md-12 stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h6 class="card-title">Form Grid</h6>--}}
            {{--                            <form>--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-sm-6">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">First Name</label>--}}
            {{--                                            <input type="text" class="form-control" placeholder="Enter first name">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                    <div class="col-sm-6">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">Last Name</label>--}}
            {{--                                            <input type="text" class="form-control" placeholder="Enter last name">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                </div><!-- Row -->--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-sm-4">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">City</label>--}}
            {{--                                            <input type="text" class="form-control" placeholder="Enter city">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                    <div class="col-sm-4">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">State</label>--}}
            {{--                                            <input type="text" class="form-control" placeholder="Enter state">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                    <div class="col-sm-4">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">Zip</label>--}}
            {{--                                            <input type="text" class="form-control" placeholder="Enter zip code">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                </div><!-- Row -->--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-sm-6">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">Email address</label>--}}
            {{--                                            <input type="email" class="form-control" placeholder="Enter email">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                    <div class="col-sm-6">--}}
            {{--                                        <div class="form-group">--}}
            {{--                                            <label class="control-label">Password</label>--}}
            {{--                                            <input type="password" class="form-control" autocomplete="off"--}}
            {{--                                                   placeholder="Password">--}}
            {{--                                        </div>--}}
            {{--                                    </div><!-- Col -->--}}
            {{--                                </div><!-- Row -->--}}
            {{--                            </form>--}}
            {{--                            <button type="button" class="btn btn-primary submit">Submit form</button>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--        </div>--}}

            <!-- partial:../../partials/_footer.html -->
                <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="https://www.nobleui.com/"
                                                                                       target="_blank">NobleUI</a>. All rights
                        reserved</p>
                    <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                                class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
                </footer>
                <!-- partial -->

            </div>
        </div>

        <!-- core:js -->
        <script src="../../../assets/vendors/core/core.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <!-- end plugin js for this page -->
        <!-- inject:js -->
        <script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
        <script src="../../../assets/js/template.js"></script>
        <!-- endinject -->
        <!-- custom js for this page -->
        <script src="../../../assets/js/file-upload.js"></script>
        <!-- end custom js for this page -->
</body>

<!-- Mirrored from www.nobleui.com/html/template/demo_1/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 06:43:19 GMT -->
</html>