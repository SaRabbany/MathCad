@extends('layout.header')
@section( 'content')



<!-- Question section in top -->
<section class="top_question">
    <div class="top_question_body container" id="top">
        <h1>How do I make the most out of a MS in Business Analytics?</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nesciunt.</p>
    </div>
</section>

<!-- Body and slider section start  -->





<section class="answer-section container">
    <div class="row">
        <!-- Answer section -->

        {{-- Data update successfully message --}}
        @if (Session::has('status'))
         <p class="alert-danger p-3">{{ Session::get('status') }}</p>
            
        @endif

        {{-- error message --}}
        <div class="col-md-9 page_content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <!-- leave the answer section -->
            <section class="leave_answer">
                <div class="leave_answer_title">
                    <h2>Leave An Answer </h2>
                </div>


                <div class="leave_answer_form mt-3">
                    <form class="row g-3" action="{{ url('/updateQ/'.$editQuestion->id) }}" method="post">

                        @csrf
                        <div class="col-md-12">
                            <label for="validationDefaultUsername" class="form-label">Username</label>
                            <div class="input-group">

                                <input type="text" class="form-control" id="validationDefaultUsername" name="name" value="{{ $editQuestion->name }}" aria-describedby="inputGroupPrepend2" placeholder="Username">

                            </div>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault01" class="form-label">Title</label>
                            <input placeholder="Your Title" name="title" type="text" value="{{ $editQuestion->title }}" class="form-control" id="validationDefault01">

                        </div>
                        @error('title')
                            <span class="text-danger" >{{ $message }}</span>                            
                        @enderror
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">description*</label>

                                <textarea placeholder="Place your description here." name="description" value="{{ $editQuestion->description }}" class="form-control" id="validationDefault03" rows="5"></textarea>



                            </div>
                             @error('description')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror

                        </div>

                        <div class="col-12">
                            <input class="btn common-button" type="submit" Value="Update">
                        </div>
                    </form>
                </div>
            </section>





        </div>


        <!-- side bar section -->
        <div class="col-md-3">

            <div class="ask_question">
                <a href="" class="common-button btn d-block"> Ask Your Question</a>
            </div>



            <!-- login register slider section -->
            <div class="login_reg_slider">
                <div class="login_title">
                    <h2>Login</h2>
                </div>
                <div class="login_form">
                    <div class="mb-3 row">
                        <!-- <label for="forEmail" class="col-sm-2 col-form-label"></label> -->
                        <div class="col-sm-12">
                            <input type="Email" class="form-control " id="inputEmail" placeholder="Email/User Name">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <!-- <label for="inputPassword" class="col-sm-2 col-form-label"></label> -->
                        <div class="col-sm-12 ">
                            <input type="password" class="form-control " id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="ask_question">
                        <a href="" class="common-button btn d-block"> Login</a>
                    </div>
                </div>
            </div>


            <!-- Point section -->


        </div>
    </div>
</section>


@endsection
