<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url() ?>assets/js/jquery.meanmenu.js"></script>

<script src="<?= base_url() ?>assets/js/jquery.mixitup.min.js"></script>

<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>

<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>

<script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>

<script src="<?= base_url() ?>assets/js/form-validator.min.js"></script>

<script src="<?= base_url() ?>assets/js/contact-form-script.js"></script>

<script src="<?= base_url() ?>assets/js/wow.min.js"></script>

<script src="<?= base_url() ?>assets/js/custom.js"></script>




<script>
    let menu = document.querySelector('#menuBtn');
    let icon = document.querySelector('#menuBtn .fa-bars');
    let navbarLinks = document.querySelector('.navbar-area .menu-wrapper');

    menu.onclick = () => {
        icon.classList.toggle('fa-times');
        navbarLinks.classList.toggle('active');
    }
    window.onscroll = () => {
        menu.classList.remove('fa-times');
        navbarLinks.classList.remove('active');
        // if (window.scrollY > 60) {
        //     document.querySelector('.header .navbar').classList.add('active');
        // } else {
        //     document.querySelector('.header .navbar').classList.remove('active');
        // }
    }
    
    
    // ====View more services====
    
    let viewServicesBtn = document.querySelector('.show-all-services');
    let viewIcon = document.querySelector('.show-all-services .fas');
    let serviceWrapper = document.querySelector('#more-services');
    
    viewServicesBtn.onclick = () =>{
        serviceWrapper.classList.toggle('active');
        viewIcon.classList.toggle('fa-angle-up');
    }
</script>

</body>

</html>