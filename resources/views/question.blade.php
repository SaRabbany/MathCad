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
            <div class="col-md-9 page_content">

                <!-- show all Question -->
                <div class="ans_page_content mb-5">

                    <div class="ans_page_body">
                        <div class="row justify-content-evenly">
                            <div class="col-1 author_img">
                                <a href="">
                                    <img src="https://2code.info/demo/themes/ask-me/wp-content/uploads/2017/07/team-8-65x65.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-10 p-0 ans_page_left">
                                <b class="author_name Q-title">Do I need to have a undergrad percentage of 70% to do my masters in
                                    Germany?</b>
                                <div class="ans_body_content">
                                    <p>The biggest piece of advice I could give is to take a course.
                                        .
                                    </p>
                                    <img src="../image/math image.jpg" class="img-fluid" alt="">
                                    <div class="publish_date justify-content-end align-items-center d-flex">
                                        <i class="fas fa-heart"></i>
                                        <i>89</i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i>12</i>
                                        <i class=" fas fa-calendar-week"></i>
                                        <i>01-02-02003</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ans_page_content mb-5">

                    <div class="ans_page_body">
                        <div class="row justify-content-evenly">
                            <div class="col-1 author_img">
                                <a href="">
                                    <img src="https://2code.info/demo/themes/ask-me/wp-content/uploads/2017/07/team-8-65x65.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-10 p-0 ans_page_left">
                                <b class="author_name Q-title">Do I need to have a undergrad percentage of 70% to do my masters in
                                    Germany?</b>
                                <div class="ans_body_content">
                                    <p>The biggest piece of advice I could give is to take a course.
                                        .
                                    </p>
                                    <!-- <img src="../image/math image.jpg" class="img-fluid" alt=""> -->
                                    <div class="publish_date justify-content-end align-items-center d-flex">
                                        <i class="fas fa-heart"></i>
                                        <i>89</i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i>12</i>
                                        <i class=" fas fa-calendar-week"></i>
                                        <i>01-02-02003</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ans_page_content mb-5">

                    <div class="ans_page_body">
                        <div class="row justify-content-evenly">
                            <div class="col-1 author_img">
                                <a href="">
                                    <img src="https://2code.info/demo/themes/ask-me/wp-content/uploads/2017/07/team-8-65x65.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-10 p-0 ans_page_left">
                                <b class="author_name Q-title">Do I need to have a undergrad percentage of 70% to do my masters in
                                    Germany?</b>
                                <div class="ans_body_content">
                                    <p>The biggest piece of advice I could give is to take a course.

                                    </p>
                                    <img src="../image/math image.jpg" class="img-fluid" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, ex cum! Ullam, doloribus eaque voluptate corporis error rem sapiente est.</p>
                                    <div class="publish_date justify-content-end align-items-center d-flex">
                                        <i class="fas fa-heart"></i>
                                        <i>89</i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i>12</i>
                                        <i class=" fas fa-calendar-week"></i>
                                        <i>01-02-02003</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- leave the answer section -->
                <section class="leave_answer">
                    <div class="leave_answer_title">
                        <h2>Leave An Answer </h2>
                    </div>
                    <div class="leave_answer_form mt-3">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="validationDefaultUsername" class="form-label">Username</label>
                                <div class="input-group">
                                    <!-- <span class="input-group-text" id="inputGroupPrepend2">@</span> -->
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">Email</label>
                                <input placeholder="Your Email" type="email" class="form-control" id="validationDefault01">
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault02" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number (Optional)" id="validationDefault02" required>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Featured image</label>
                                    <input class="form-control" type="file" id="formFile" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Answer*</label>
                                    <textarea placeholder="Place your answer here." class="form-control" id="validationDefault03" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <input class="btn common-button" type="submit">
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

                <section>
                    <div class="slider_point">
                        <div class="slider_point_title">
                            <h2>Highest Point</h2>
                        </div>
                        <div class="slider_point_body">

                            <!-- First card -->
                            <div class="slider_card">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../main-images/team-9-65x65.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Ahmed Hassan</h5>
                                                <button class="btn point_btn btn-sm"> Explainer</button>
                                                <p class="card-text"><small class="">390 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Second card -->
                            <div class="slider_card">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../main-images/team-9-65x65.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Ahmed Hassan</h5>
                                                <button class="btn point_btn btn-sm"> Explainer</button>
                                                <p class="card-text"><small class="">390 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Second card -->
                            <div class="slider_card">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../main-images/team-9-65x65.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Ahmed Hassan</h5>
                                                <button class="btn point_btn btn-sm"> Explainer</button>
                                                <p class="card-text"><small class="">390 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>

@endsection