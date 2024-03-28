<!--Contact section-->
@include('front.sections.contact_section')
<!--End contact section-->
<footer class="pt-5 pb-5 footer">
    <!--Container-->
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <small class="small"><span>&copy; 2023 all rights reserved - </span>
                    Your Artist Portal.</small>
            </div>
            <div class="col-md-6 text-md-right">
                <ul class="list-inline small">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Legal</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End container-->
</footer>
