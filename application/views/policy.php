<?php include 'includes/header-link.php'; ?>

<?php include 'includes/header.php'; ?>

<div class="page-title-area">
    <img src="assets/img/home-one/footer-car.png" alt="Title">
    <div class="container">
        <div class="page-title-content">
            <h2><?= $ctitle ?></h2>
            <ul>
                <li>
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li><?= $ctitle ?></li>
            </ul>
        </div>
    </div>
</div>


<section class="privacy-area pt-100">
    <div class="container">
        <div class="privacy-item">
            <p><?= $policy[0]['policy'] ?></p>
          
    </div>
</section>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/footer-link.php'; ?>