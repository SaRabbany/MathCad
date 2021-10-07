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
        <p class="alert-primary p-3">{{ Session::get('status') }}</p>

        @endif

        {{-- error message --}}
        <div class="col-md-9 page_content">

            <h1> All Question Customization </h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($showQ as $key => $value)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->title }}</td>
                       <td> <span style="display:inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
                                max-width: 25ch;">
                            {{ $value->description }}

                        </span>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('editQ/'.$value->id) }}" class="btn btn-warning px-5 mb-2"> Edit</a>

                            <a href="{{ url ('deleteQ/'.$value->id) }}" onclick="return confirm('Are you sure you want to delete this   ')" class="btn btn-danger px-5"> Delete</a>

                        </td>
                    </tr>


                    @endforeach

                </tbody>
            </table>
             {{ $showQ->links() }}



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

