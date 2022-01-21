<footer id='app_footer'>
    <div class='container-fluid banner2 d-flex justify-content-center footer-banner'>
        <div class="layout-box-2">
            <div class="centered-box ">
                <button>SING-UP NOW!</button>
                <div class="follow-links">
                    <a id='followtag' href="#"><b>FOLLOW US</b></a>
                    <ul id='footer-list'>
                        <li v-for="link in links" v-bind:key="link.id"> <a href="#"><img :src="require(`../assets/img/${link}`)" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>