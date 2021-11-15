<?php
/**
 * Template Name: Контакты
 *
 * @package altetsa
 */

get_header();
?>

<section class="contacts">
        
        <div class="title-group  wow animate__animated animate__fadeInDown animate__repeat-1">
            <span class="title-shadow">contacts</span>
        <h1 class="title"><span>наши </span> координаты</h1>
        <span class="divider"></span>
        <h2 class="subtitle">write to us</h2>
        </div>
        <div class="contacts__wrapper">
            <picture class="contacts__img">
                <source media="(min-width: 541px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/contacts/contacts-img.png">
                <source media="(max-width: 540px)" srcset="<?php echo get_bloginfo('template_url');?>/assets/img/contacts/contacts-mob.png">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/img/services/contacts-img.png" alt="" >
            </picture>
            <div class="contacts__form-wrapp wow animate__animated animate__fadeInBottomRight">
                <div class="contacts__form-wrapp-title">Altetsa</div>
                <h2 class="contacts__title">
                    Контакты
                </h2>
                <p class="contacts__descr">
                    Для того, чтобы заказать услуги, или задать уточняющий вопрос - оставьте свою заявку, или напишите нам напрямую по адресу <a href="mailto:info@altetsa.com" class="contacts__link">info@altetsa.com</a>
                </p>
                <div class="contacts__form">
                    <?php echo do_shortcode('[contact-form-7 id="65" title="Форма на странице контактов"]');?>
                </div>
                
            </div>
        </div>
    
    <span class="circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="191" height="483" viewBox="0 0 191 483" fill="none">
        <circle cx="241.5" cy="241.5" r="190.5" fill="white" stroke="#FBFBFB" stroke-width="102"/>
        </svg></span>
    <span class="big-circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="562"     height="856" viewBox="0 0 562 856" fill="none">
            <circle cx="70.5" cy="364.5" r="336.5" fill="white" stroke="#FBFBFB" stroke-width="310"/>
        </svg>
    </span>
    <span class="cross">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3875 15.8517C10.9171 16.7689 12.09 17.0832 13.0072 16.5536C13.9244 16.0241 14.2387 14.8512 13.7091 13.934L11.1065 9.42606L15.8517 6.68643C16.7689 6.15687 17.0832 4.984 16.5536 4.06676C16.024 3.14953 14.8512 2.83526 13.9339 3.36483L9.18876 6.10445L6.44916 1.35932C5.91959 0.44208 4.74672 0.127812 3.82949 0.657379C2.91225 1.18695 2.59798 2.35981 3.12755 3.27705L5.86715 8.02218L1.35928 10.6248C0.442039 11.1544 0.12777 12.3272 0.657337 13.2445C1.1869 14.1617 2.35977 14.476 3.27701 13.9464L7.78488 11.3438L10.3875 15.8517Z" fill="#484CE6"/>
            </svg>
            
    </span>
    <span class="dots">
        <svg width="226" height="578" viewBox="0 0 226 578" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M225.95 283.547C225.674 283.551 225.454 283.779 225.458 284.055C225.486 285.7 225.5 287.348 225.5 289C225.5 290.652 225.486 292.3 225.458 293.945C225.454 294.221 225.674 294.449 225.95 294.454C225.895 297.414 225.796 300.363 225.653 303.3C225.377 303.286 225.142 303.499 225.128 303.774C224.962 307.071 224.74 310.354 224.464 313.621C224.441 313.896 224.645 314.138 224.92 314.161C224.666 317.115 224.366 320.056 224.023 322.984C223.749 322.951 223.5 323.147 223.468 323.421C223.08 326.688 222.637 329.938 222.14 333.17C222.098 333.443 222.285 333.698 222.558 333.74C222.103 336.673 221.603 339.591 221.059 342.493C220.788 342.442 220.527 342.621 220.475 342.892C219.864 346.127 219.199 349.344 218.48 352.54C218.42 352.81 218.589 353.077 218.858 353.138C218.204 356.024 217.507 358.895 216.767 361.748C216.5 361.678 216.227 361.838 216.157 362.106C215.325 365.292 214.44 368.456 213.502 371.599C213.423 371.863 213.574 372.142 213.839 372.221C212.987 375.058 212.093 377.877 211.157 380.677C210.895 380.589 210.612 380.73 210.524 380.991C209.476 384.108 208.376 387.202 207.225 390.27C207.129 390.529 207.26 390.817 207.518 390.914C206.474 393.684 205.388 396.435 204.262 399.164C204.007 399.058 203.714 399.179 203.609 399.434C202.348 402.473 201.038 405.486 199.678 408.471C199.563 408.723 199.674 409.019 199.925 409.134C198.694 411.825 197.422 414.493 196.111 417.139C195.864 417.016 195.564 417.117 195.441 417.364C193.977 420.306 192.464 423.22 190.903 426.105C190.771 426.348 190.862 426.651 191.105 426.783C189.691 429.384 188.239 431.961 186.749 434.513C186.511 434.373 186.204 434.453 186.065 434.691C184.402 437.527 182.693 440.331 180.938 443.104C180.79 443.337 180.859 443.646 181.093 443.794C179.506 446.29 177.883 448.761 176.223 451.204C175.995 451.049 175.684 451.107 175.528 451.336C173.676 454.051 171.78 456.733 169.839 459.381C169.676 459.603 169.724 459.916 169.947 460.079C168.194 462.462 166.405 464.817 164.582 467.143C164.365 466.972 164.051 467.01 163.88 467.227C161.849 469.809 159.775 472.355 157.658 474.865C157.48 475.076 157.507 475.391 157.718 475.57C155.808 477.827 153.864 480.055 151.886 482.252C151.681 482.067 151.365 482.083 151.18 482.288C148.979 484.726 146.736 487.126 144.454 489.487C144.262 489.686 144.267 490.002 144.466 490.194C142.407 492.316 140.317 494.407 138.194 496.466C138.002 496.267 137.686 496.262 137.488 496.454C135.126 498.736 132.726 500.979 130.288 503.18C130.083 503.365 130.067 503.681 130.252 503.886C128.055 505.864 125.827 507.808 123.57 509.718C123.392 509.507 123.076 509.48 122.865 509.658C120.355 511.774 117.809 513.849 115.227 515.88C115.01 516.05 114.973 516.365 115.143 516.582C112.817 518.405 110.462 520.194 108.08 521.947C107.916 521.724 107.603 521.676 107.381 521.839C104.733 523.78 102.051 525.676 99.3357 527.528C99.1075 527.684 99.0487 527.995 99.2043 528.223C96.7607 529.883 94.2904 531.506 91.7941 533.093C91.6464 532.859 91.3375 532.79 91.1042 532.938C88.3315 534.693 85.5269 536.402 82.6913 538.065C82.4531 538.204 82.3732 538.511 82.5128 538.749C79.9607 540.239 77.3837 541.691 74.7826 543.105C74.6512 542.862 74.3477 542.771 74.1049 542.903C71.2205 544.464 68.3065 545.977 65.364 547.441C65.1169 547.564 65.0161 547.864 65.1389 548.111C62.4931 549.422 59.8244 550.694 57.1335 551.925C57.0189 551.674 56.7226 551.563 56.4714 551.678C53.4859 553.038 50.4731 554.348 47.4342 555.609C47.1791 555.714 47.0581 556.007 47.1638 556.262C44.4346 557.388 41.6844 558.474 38.9138 559.518C38.8169 559.26 38.5287 559.129 38.2701 559.225C35.2017 560.376 32.1085 561.476 28.9914 562.524C28.7297 562.612 28.5888 562.895 28.6768 563.157C25.8769 564.093 23.0579 564.987 20.2206 565.839C20.1416 565.574 19.8631 565.423 19.5985 565.502C16.4563 566.44 13.2917 567.325 10.1055 568.157C9.83835 568.227 9.67831 568.5 9.74811 568.767C6.89481 569.507 4.02438 570.204 1.13757 570.858C1.07703 570.589 0.809509 570.42 0.5401 570.48C-2.65625 571.199 -5.87268 571.864 -9.10818 572.475C-9.37952 572.527 -9.55792 572.788 -9.50665 573.059C-12.4094 573.603 -15.3275 574.103 -18.2601 574.558C-18.302 574.285 -18.5573 574.098 -18.8302 574.14C-22.0624 574.637 -25.3123 575.08 -28.579 575.468C-28.8532 575.501 -29.049 575.749 -29.0164 576.023C-31.9442 576.366 -34.8853 576.666 -37.8391 576.92C-37.8624 576.645 -38.1043 576.441 -38.3795 576.464C-41.6464 576.74 -44.9288 576.962 -48.2258 577.128C-48.5016 577.142 -48.7139 577.377 -48.7 577.653C-51.6375 577.796 -54.5866 577.895 -57.5466 577.95C-57.5512 577.674 -57.7788 577.454 -58.0549 577.458C-59.7 577.486 -61.3484 577.5 -63 577.5C-64.6539 577.5 -66.3045 577.486 -67.9518 577.458C-68.2279 577.454 -68.4555 577.674 -68.4601 577.95C-71.4375 577.895 -74.4039 577.795 -77.3587 577.65C-77.3447 577.374 -77.5569 577.139 -77.8327 577.125C-81.1355 576.958 -84.4236 576.735 -87.6962 576.458C-87.9713 576.435 -88.2133 576.639 -88.2366 576.914C-91.2019 576.657 -94.1544 576.356 -97.0934 576.011C-97.0607 575.736 -97.2565 575.488 -97.5307 575.455C-100.813 575.063 -104.078 574.617 -107.325 574.116C-107.598 574.074 -107.853 574.261 -107.895 574.534C-110.835 574.076 -113.761 573.573 -116.671 573.026C-116.619 572.755 -116.797 572.493 -117.069 572.442C-120.316 571.826 -123.544 571.156 -126.751 570.433C-127.021 570.372 -127.288 570.541 -127.349 570.81C-130.25 570.151 -133.134 569.447 -136.001 568.701C-135.931 568.434 -136.091 568.161 -136.358 568.091C-139.553 567.253 -142.727 566.362 -145.878 565.419C-146.142 565.34 -146.421 565.49 -146.5 565.755C-149.347 564.897 -152.175 563.996 -154.985 563.054C-154.896 562.792 -155.037 562.508 -155.299 562.42C-158.427 561.365 -161.531 560.257 -164.61 559.098C-164.868 559.001 -165.157 559.131 -165.254 559.39C-168.034 558.338 -170.793 557.244 -173.531 556.11C-173.425 555.855 -173.546 555.562 -173.801 555.456C-176.847 554.188 -179.868 552.869 -182.86 551.5C-183.112 551.385 -183.408 551.496 -183.523 551.747C-186.224 550.506 -188.902 549.224 -191.557 547.904C-191.434 547.657 -191.534 547.357 -191.781 547.233C-194.732 545.758 -197.655 544.234 -200.548 542.662C-200.791 542.53 -201.094 542.62 -201.226 542.862C-203.834 541.439 -206.418 539.978 -208.976 538.478C-208.836 538.24 -208.916 537.933 -209.154 537.793C-211.996 536.12 -214.807 534.399 -217.586 532.632C-217.819 532.484 -218.128 532.552 -218.277 532.785C-220.78 531.188 -223.257 529.552 -225.708 527.88C-225.552 527.652 -225.61 527.341 -225.838 527.185C-228.558 525.321 -231.245 523.412 -233.898 521.459C-234.12 521.295 -234.433 521.343 -234.597 521.565C-236.985 519.8 -239.344 517.999 -241.675 516.163C-241.504 515.947 -241.541 515.632 -241.758 515.461C-244.344 513.417 -246.895 511.329 -249.409 509.199C-249.62 509.02 -249.935 509.046 -250.113 509.256C-252.375 507.333 -254.607 505.376 -256.808 503.385C-256.622 503.18 -256.638 502.864 -256.842 502.679C-259.283 500.463 -261.686 498.207 -264.049 495.91C-264.247 495.717 -264.563 495.722 -264.756 495.92C-266.881 493.847 -268.974 491.742 -271.035 489.606C-270.836 489.415 -270.83 489.098 -271.021 488.899C-273.305 486.523 -275.548 484.108 -277.75 481.655C-277.935 481.45 -278.251 481.433 -278.456 481.617C-280.435 479.405 -282.38 477.163 -284.291 474.89C-284.079 474.713 -284.052 474.398 -284.229 474.186C-286.345 471.661 -288.419 469.099 -290.449 466.501C-290.619 466.284 -290.933 466.245 -291.15 466.415C-292.973 464.074 -294.761 461.704 -296.513 459.306C-296.29 459.144 -296.241 458.831 -296.403 458.608C-297.373 457.276 -298.332 455.935 -299.279 454.586C-300.217 453.249 -301.144 451.905 -302.06 450.552C-302.215 450.324 -302.526 450.264 -302.754 450.418C-304.397 447.984 -306.003 445.523 -307.572 443.036C-307.339 442.889 -307.269 442.581 -307.415 442.347C-309.153 439.584 -310.844 436.79 -312.489 433.965C-312.628 433.726 -312.934 433.645 -313.172 433.784C-314.646 431.244 -316.081 428.68 -317.478 426.092C-317.235 425.961 -317.144 425.658 -317.275 425.415C-318.82 422.541 -320.318 419.638 -321.767 416.706C-321.89 416.459 -322.189 416.358 -322.437 416.48C-323.733 413.846 -324.991 411.19 -326.209 408.511C-325.958 408.397 -325.846 408.101 -325.96 407.85C-327.305 404.879 -328.601 401.88 -329.848 398.856C-329.953 398.601 -330.245 398.48 -330.5 398.585C-331.613 395.87 -332.687 393.134 -333.719 390.378C-333.46 390.282 -333.329 389.994 -333.425 389.735C-334.564 386.68 -335.652 383.6 -336.689 380.497C-336.777 380.235 -337.06 380.093 -337.322 380.181C-338.247 377.397 -339.13 374.594 -339.972 371.773C-339.708 371.694 -339.557 371.416 -339.635 371.151C-340.562 368.026 -341.437 364.879 -342.26 361.71C-342.329 361.443 -342.602 361.283 -342.869 361.352C-343.601 358.512 -344.291 355.656 -344.938 352.784C-344.669 352.723 -344.499 352.456 -344.559 352.187C-345.27 349.007 -345.928 345.808 -346.532 342.59C-346.583 342.318 -346.844 342.14 -347.116 342.19C-347.652 339.308 -348.145 336.411 -348.595 333.5C-348.322 333.458 -348.135 333.203 -348.177 332.93C-348.669 329.71 -349.107 326.473 -349.492 323.218C-349.524 322.944 -349.773 322.748 -350.047 322.781C-350.386 319.871 -350.681 316.947 -350.933 314.012C-350.658 313.988 -350.454 313.747 -350.477 313.472C-350.749 310.228 -350.968 306.969 -351.132 303.696C-351.146 303.42 -351.381 303.208 -351.656 303.221C-351.798 300.295 -351.896 297.358 -351.95 294.409C-351.674 294.405 -351.455 294.177 -351.459 293.901C-351.486 292.271 -351.5 290.637 -351.5 289C-351.5 287.348 -351.486 285.7 -351.458 284.055C-351.454 283.779 -351.674 283.551 -351.95 283.546C-351.895 280.586 -351.796 277.637 -351.652 274.7C-351.377 274.714 -351.142 274.501 -351.128 274.226C-350.962 270.929 -350.74 267.646 -350.464 264.379C-350.441 264.104 -350.645 263.863 -350.92 263.839C-350.665 260.885 -350.366 257.944 -350.023 255.016C-349.749 255.049 -349.5 254.853 -349.468 254.579C-349.08 251.312 -348.637 248.062 -348.14 244.83C-348.098 244.557 -348.285 244.302 -348.558 244.26C-348.102 241.327 -347.602 238.409 -347.059 235.507C-346.788 235.558 -346.527 235.379 -346.475 235.108C-345.864 231.873 -345.199 228.656 -344.48 225.46C-344.42 225.191 -344.589 224.923 -344.858 224.862C-344.204 221.976 -343.506 219.105 -342.767 216.252C-342.5 216.321 -342.227 216.161 -342.157 215.894C-341.325 212.708 -340.44 209.544 -339.502 206.401C-339.423 206.137 -339.574 205.859 -339.838 205.78C-338.986 202.942 -338.092 200.123 -337.156 197.323C-336.895 197.411 -336.611 197.27 -336.524 197.009C-335.476 193.892 -334.376 190.798 -333.225 187.73C-333.129 187.471 -333.259 187.183 -333.518 187.086C-332.473 184.316 -331.388 181.566 -330.262 178.836C-330.007 178.942 -329.714 178.821 -329.609 178.566C-328.348 175.527 -327.038 172.514 -325.678 169.529C-325.563 169.277 -325.674 168.981 -325.925 168.867C-324.694 166.176 -323.422 163.507 -322.111 160.861C-321.864 160.984 -321.564 160.883 -321.441 160.636C-319.977 157.694 -318.464 154.78 -316.903 151.895C-316.771 151.652 -316.862 151.349 -317.104 151.218C-315.691 148.617 -314.239 146.04 -312.748 143.487C-312.51 143.627 -312.204 143.547 -312.065 143.309C-310.402 140.473 -308.693 137.669 -306.938 134.896C-306.79 134.663 -306.859 134.354 -307.092 134.206C-305.506 131.71 -303.882 129.24 -302.222 126.796C-301.994 126.951 -301.683 126.892 -301.528 126.664C-299.676 123.949 -297.78 121.267 -295.839 118.619C-295.676 118.397 -295.724 118.084 -295.946 117.921C-294.194 115.538 -292.405 113.183 -290.582 110.857C-290.365 111.028 -290.05 110.99 -289.88 110.773C-287.849 108.191 -285.775 105.645 -283.658 103.135C-283.48 102.924 -283.507 102.609 -283.718 102.43C-281.808 100.173 -279.864 97.9453 -277.886 95.748C-277.681 95.9328 -277.365 95.9166 -277.18 95.7118C-274.979 93.2739 -272.736 90.8738 -270.454 88.5125C-270.262 88.3141 -270.267 87.9977 -270.466 87.8058C-268.407 85.6836 -266.317 83.5929 -264.194 81.5344C-264.002 81.7326 -263.686 81.7379 -263.488 81.5461C-261.126 79.2636 -258.726 77.0211 -256.288 74.8196C-256.083 74.6347 -256.067 74.3187 -256.252 74.1138C-254.055 72.1365 -251.827 70.1923 -249.57 68.2822C-249.392 68.493 -249.076 68.5198 -248.865 68.3419C-246.356 66.2256 -243.809 64.1513 -241.227 62.1202C-241.01 61.9496 -240.973 61.6355 -241.143 61.4184C-238.817 59.595 -236.462 57.8065 -234.079 56.0537C-233.916 56.2761 -233.603 56.3242 -233.381 56.1611C-230.733 54.2203 -228.051 52.3236 -225.336 50.4721C-225.108 50.3166 -225.049 50.0057 -225.204 49.7776C-222.76 48.1176 -220.29 46.494 -217.794 44.9076C-217.646 45.1406 -217.337 45.2099 -217.104 45.0622C-214.332 43.307 -211.527 41.5977 -208.691 39.9354C-208.453 39.7958 -208.373 39.4897 -208.513 39.2516C-205.96 37.7614 -203.383 36.3092 -200.782 34.8958C-200.651 35.1384 -200.348 35.2286 -200.105 35.0972C-197.22 33.5364 -194.306 32.0233 -191.364 30.559C-191.117 30.436 -191.016 30.1361 -191.139 29.889C-188.493 28.578 -185.824 27.3064 -183.134 26.0749C-183.019 26.326 -182.723 26.4367 -182.471 26.3223C-179.486 24.9622 -176.473 23.6516 -173.434 22.3913C-173.179 22.2856 -173.058 21.9933 -173.164 21.7384C-170.434 20.6122 -167.684 19.5266 -164.914 18.4823C-164.817 18.7406 -164.529 18.8714 -164.27 18.7745C-161.202 17.6241 -158.108 16.5244 -154.991 15.4765C-154.73 15.3885 -154.589 15.1052 -154.677 14.8436C-151.877 13.9077 -149.058 13.0136 -146.22 12.1618C-146.141 12.4262 -145.863 12.5765 -145.598 12.4976C-142.456 11.5604 -139.292 10.6752 -136.106 9.84311C-135.838 9.77337 -135.678 9.50046 -135.748 9.23342C-132.895 8.49357 -130.024 7.79622 -127.137 7.14209C-127.077 7.41126 -126.809 7.58037 -126.54 7.51985C-123.344 6.80142 -120.127 6.13605 -116.892 5.5247C-116.621 5.47346 -116.442 5.21217 -116.493 4.94099C-113.59 4.39774 -110.672 3.89788 -107.74 3.44212C-107.698 3.71483 -107.443 3.90188 -107.17 3.85996C-103.938 3.36338 -100.688 2.92044 -97.421 2.53208C-97.147 2.49949 -96.9512 2.25102 -96.9835 1.97697C-94.0558 1.63403 -91.1147 1.33485 -88.1608 1.0801C-88.1374 1.35505 -87.8955 1.55903 -87.6205 1.53579C-84.3536 1.2597 -81.0712 1.03805 -77.7742 0.871742C-77.4985 0.857839 -77.2863 0.623223 -77.3 0.347617C-74.3624 0.204479 -71.4134 0.105201 -68.4534 0.0504231C-68.4486 0.326327 -68.221 0.546163 -67.9451 0.541526C-66.3 0.513879 -64.6516 0.5 -63 0.5C-61.3483 0.5 -59.6999 0.513879 -58.0548 0.541528C-57.7788 0.546166 -57.5513 0.32633 -57.5464 0.0504254C-54.5865 0.105204 -51.6375 0.204484 -48.6999 0.347623C-48.7135 0.62323 -48.5013 0.857846 -48.2257 0.87175C-44.9286 1.03806 -41.6462 1.25971 -38.3794 1.5358C-38.1043 1.55904 -37.8625 1.35506 -37.8391 1.08011C-34.8852 1.33486 -31.9442 1.63404 -29.0164 1.97698C-29.0488 2.25103 -28.8529 2.4995 -28.5789 2.53209C-25.3122 2.92045 -22.0623 3.36339 -18.8301 3.85997C-18.5573 3.90189 -18.3022 3.71484 -18.2601 3.44213C-15.3275 3.89789 -12.4094 4.39775 -9.50668 4.941C-9.55768 5.21219 -9.3793 5.47347 -9.10812 5.52471C-5.87259 6.13607 -2.65619 6.80144 0.540161 7.51986C0.809448 7.58039 1.07681 7.41128 1.13754 7.1421C4.02435 7.79624 6.89474 8.49359 9.74805 9.23343C9.67853 9.50048 9.83856 9.77338 10.1056 9.84312C13.2917 10.6752 16.4563 11.5604 19.5985 12.4976C19.863 12.5765 20.1413 12.4262 20.2205 12.1618C23.0578 13.0136 25.8768 13.9078 28.6767 14.8436C28.589 15.1052 28.7299 15.3885 28.9915 15.4765C32.1085 16.5244 35.2017 17.6241 38.2701 18.7745C38.5286 18.8714 38.8166 18.7406 38.9137 18.4823C41.6842 19.5265 44.4344 20.6122 47.1637 21.7383C47.0582 21.9933 47.1792 22.2856 47.4342 22.3913C50.4731 23.6515 53.4859 24.9622 56.4714 26.3223C56.7226 26.4367 57.0189 26.3259 57.1335 26.0749C59.8244 27.3064 62.4931 28.578 65.1389 29.8889C65.0161 30.1361 65.1168 30.436 65.3639 30.5589C68.3064 32.0233 71.2204 33.5364 74.1048 35.0972C74.3475 35.2286 74.6508 35.1384 74.7823 34.8958C77.3834 36.3092 79.9604 37.7614 82.5125 39.2515C82.3732 39.4897 82.4531 39.7958 82.6912 39.9353C85.5268 41.5976 88.3315 43.3069 91.1041 45.0622C91.3373 45.2098 91.646 45.1406 91.7938 44.9075C94.2901 46.4939 96.7604 48.1175 99.2039 49.7776C99.0487 50.0057 99.1076 50.3165 99.3356 50.472C102.051 52.3235 104.733 54.2202 107.381 56.161C107.603 56.3242 107.916 56.2761 108.079 56.0537C110.462 57.8065 112.817 59.595 115.143 61.4184C114.972 61.6354 115.01 61.9495 115.227 62.1201C117.809 64.1513 120.355 66.2255 122.865 68.3418C123.076 68.5197 123.391 68.493 123.57 68.2822C125.827 70.1923 128.055 72.1364 130.252 74.1137C130.067 74.3186 130.083 74.6346 130.288 74.8196C132.726 77.021 135.126 79.2635 137.487 81.546C137.686 81.7378 138.002 81.7325 138.194 81.5343C140.316 83.5928 142.407 85.6835 144.466 87.8057C144.267 87.9977 144.262 88.314 144.454 88.5124C146.736 90.8737 148.979 93.2738 151.18 95.7117C151.365 95.9165 151.681 95.9327 151.886 95.7479C153.864 97.9452 155.808 100.173 157.718 102.43C157.507 102.608 157.48 102.924 157.658 103.135C159.774 105.644 161.849 108.191 163.88 110.773C164.051 110.99 164.365 111.028 164.582 110.857C166.405 113.183 168.194 115.538 169.947 117.92C169.724 118.084 169.676 118.397 169.839 118.619C171.78 121.267 173.676 123.949 175.528 126.664C175.684 126.892 175.995 126.951 176.223 126.796C177.883 129.239 179.506 131.71 181.093 134.206C180.859 134.354 180.79 134.662 180.938 134.896C182.693 137.668 184.402 140.473 186.065 143.309C186.204 143.547 186.511 143.627 186.749 143.487C188.239 146.039 189.691 148.616 191.105 151.217C190.862 151.349 190.771 151.652 190.903 151.895C192.464 154.78 193.977 157.694 195.441 160.636C195.564 160.883 195.864 160.984 196.111 160.861C197.422 163.507 198.694 166.176 199.925 168.866C199.674 168.981 199.563 169.277 199.678 169.529C201.038 172.514 202.348 175.527 203.609 178.566C203.714 178.821 204.007 178.942 204.262 178.836C205.388 181.565 206.474 184.316 207.518 187.086C207.26 187.183 207.129 187.471 207.225 187.73C208.376 190.798 209.476 193.892 210.524 197.009C210.612 197.27 210.895 197.411 211.157 197.323C212.093 200.123 212.987 202.942 213.839 205.779C213.574 205.858 213.423 206.137 213.502 206.402C214.44 209.544 215.325 212.708 216.157 215.894C216.227 216.162 216.5 216.322 216.767 216.252C217.507 219.105 218.204 221.976 218.858 224.862C218.589 224.923 218.42 225.19 218.48 225.46C219.199 228.656 219.864 231.873 220.475 235.108C220.527 235.38 220.788 235.558 221.059 235.507C221.603 238.409 222.103 241.327 222.558 244.26C222.285 244.302 222.098 244.557 222.14 244.83C222.637 248.062 223.08 251.312 223.468 254.579C223.501 254.853 223.749 255.049 224.023 255.016C224.366 257.944 224.666 260.885 224.92 263.839C224.645 263.862 224.441 264.104 224.464 264.379C224.74 267.646 224.962 270.929 225.128 274.226C225.142 274.502 225.377 274.714 225.653 274.7C225.796 277.638 225.895 280.587 225.95 283.547Z" stroke="#CACAD0" stroke-linecap="round" stroke-dasharray="10 10"/>
            </svg>
    </span>
    <span class="yellow">
            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                <circle cx="22.5" cy="22.5" r="12.5" fill="#FFBA00"/>
                <circle cx="22.5" cy="22.5" r="10" stroke="white" stroke-width="5"/>
                </g>
                <defs>
                <filter id="filter0_d" x="0" y="0" width="55" height="55" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dx="5" dy="5"/>
                <feGaussianBlur stdDeviation="7.5"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                </defs>
                </svg>
    </span>
    <span class="dollar">
    </span>
    <span class="gray"></span>  
</section>

<?php
get_footer();