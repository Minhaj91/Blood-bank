@extends('layout.main')

@section('content')
    <div class="container" style="margin-top:70px;">

        <div class="row">
            <div class="col-md-8">
<!--                --><?php
//                if(isset($_POST["submit"]))
//                {
//                    $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
//                    if($con->query($sql))
//                    {
//                        echo '
//					<div class="alert alert-success">
//						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//						<strong>Success!</strong> Your message has been Successfully sent.
//					</div>
//
//
//					';
//                    }
//                }
//                ?>

                <h3 class='text-primary'>Send us a Message</h3>
                @if(Session:: get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                @if(Session:: get('fail'))
                    <div class="alert alert-success">
                         {{Session:: get('fail')}}
                    </div>
                @endif
                <form method="post" action="{{route('contact.store')}}" role="form" >
                    @csrf
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="contact" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit"><i class='fa fa-send'></i> Send Message</button>
                </form>

            </div>

            <div class="col-md-4">
                <h3 class='text-primary'>Contact Details</h3>
                <p>
                    Minhajul Islam &amp; <br>Islamic University of Technology, <br>
                    Boardbazar.<br>
                    Dhaka.
                </p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: 01791645123</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="#" >bloodbankin@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: 24*7</p>
                <p><i class="fa fa-globe"></i>
                    <abbr title="Website">W</abbr>: <a href="{{route('home')}}">www.bloodbank.org</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
{{--    <script src="{{asset('assets/js/jquery.js')}}"></script>--}}

{{--    <!-- Bootstrap Core JavaScript -->--}}
{{--    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>--}}
@endsection
