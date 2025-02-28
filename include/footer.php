
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <img src="assets/images/algo-logo.png" width="90%" class="img-fluid">
                </div>
                <div class="social-media-icon">
                  <a href="#"> <i class="fa-brands fa-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#"> <i class="fa-brands fa-linkedin"></i></a>
                  <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-explore">
                    <h4 class="black">
                        Explore
                    </h4>
                    <ul class="footer-list">
                        <li>
                            <a href="phoenix.php">
                                Phoenix
                            </a>
                        </li>
                        <li>
                            <a href="odyssey.php">
                                Odyssey
                            </a>
                        </li>
                        <li>
                            <a href="enterprise.php">
                                Enterprise
                            </a>
                        </li>
                        <li>
                            <a href="ecosystem.php">
                                Our Ecosystem
                            </a>
                        </li>
                        <li>
                            <a href="pricing.php">
                                Pricing
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-explore">
                    <h4 class="black">
                        Contact
                    </h4>
                    <ul class="footer-list">
                        <li>
                            <a href="#">
                                Apply As Strategist
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Apply As Broker
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Apply As Partner
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-explore">
                    <h4 class="black">
                        Contact
                    </h4>
                    <ul class="footer-list">
                        <li>
                            <i class="fa-solid fa-phone"></i> +357 22030234
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i> Nassima Tower - 701 Sheikh Zayed Rd - Trade Centre - Trade Centre 1 - Dubai
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i> support@algotrading.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="hr-line">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="footer-info">
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                    <p>
                        Trading in financial products involves significant risk and may not be suitable for all investors. The use of our services, including algorithmic trading strategies, Phoenix and Odyssey (Algo Marketplace), carries the risk of substantial losses, potentially exceeding your deposited funds. It is crucial to fully understand these risks before engaging in trading activities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
<!-- <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script> -->

<script type="text/javascript">
    const columns = document.querySelectorAll('.column');
    const innerElements = document.querySelectorAll('.inner-element');

    columns.forEach(click => {
        click.addEventListener('click', event => {
            // Iterate over all columns
            columns.forEach(column => {
                if (column === click) {
                    // Set the clicked column width to 100%
                    column.classList.add('expanded');
                } else {
                    // Shrink the width of other columns
                    column.classList.remove('expanded');
                }
            });

            // Iterate over all inner elements
            innerElements.forEach(innerElement => {
                // Add the active class to the inner element of the clicked column
                if (innerElement.parentElement === click) {
                    innerElement.classList.add('active');
                } else {
                    innerElement.classList.remove('active');
                }
            });
        });
    });
</script>
</body>
</html>