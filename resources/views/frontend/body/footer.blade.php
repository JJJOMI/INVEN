@php
$allfooter = App\Models\Footer::find(1);
@endphp

<footer class="footer">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-4">
            <div class="footer__widget">
                <div class="fw-title">
                    <h5 class="sub-title">Contact us</h5>
                    <!-- <h4 class="title">+81383 766 284</h4> -->
                    <h4 class="title">{{ $allfooter->number }}</h4>
                </div>
                <div class="footer__widget__text">
                    <!-- <p>There are many variations of passages of lorem ipsum
                    available but the majority have suffered alteration
                    in some form is also here.</p> -->
                    <p>{{ $allfooter->short_description }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer__widget">
                <div class="fw-title">
                    <h5 class="sub-title">my address</h5>
                    <h4 class="title">AUSTRALIA</h4>
                </div>
                <div class="footer__widget__address">
                    <!-- <p>Level 13, 2 Elizabeth Steereyt set <br> Melbourne, Victoria 3000</p>
                    <a href="mailto:noreply@envato.com" class="mail">noreply@envato.com</a> -->
                    <p>{{ $allfooter->adress }}</p>
                    <a href="mailto:{{ $allfooter->email }}" class="mail">{{ $allfooter->email }}</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer__widget">
                <div class="fw-title">
                    <h5 class="sub-title">Follow me</h5>
                    <h4 class="title">socially connect</h4>
                </div>
                <div class="footer__widget__social">
                    <p>Lorem ipsum dolor sit amet enim. <br> Etiam ullamcorper.</p>
                    <!-- <ul class="footer__social__list">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul> -->
                    <ul class="footer__social__list">
                        <li><a href="{{ $allfooter->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $allfooter->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                    </ul>
             
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrap">
        <div class="row">
            <div class="col-12">
                <div class="copyright__text text-center">
                    <!-- ><p>Copyright @ Theme_Pure 2024 All right Reserved</p -->
                    <p>{{ $allfooter->copyright }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>