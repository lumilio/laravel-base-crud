
<header id='app_header' >
    <div class="container-fluid header1 d-flex justify-content-center">
        <div class="container text-white justify-content-end d-flex">
            <p>DC POWER BY VISA</p>
            <p>ADDITIONALS DC SITES</p>
        </div>
    </div>
    <div class="container-fluid bg-white header2 d-flex justify-content-center">
        <div class="container position-relative bg-white d-flex align-items-center justify-content-between"">
            <a href="#">
                <img id='header-logo' src="{{asset('../img/dc-logo.png')}}" alt="">
            </a> 
            <ul id='header-list'>
                    <li class='mx-3'><a href="{{route('admin.home.index')}}">home</a></li>
                    <li class='mx-3'><a href="{{route('admin.comic.index')}}">lista fumetti</a></li>
                    <li class='mx-3'><a href="{{route('admin.comic.create')}}">aggiungi fumetto</a></li>
            </ul>
            <input type="search" placeholder='Search'>
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>
