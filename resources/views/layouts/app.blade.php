<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.48.0/tabler-icons.min.css" integrity="sha512-FpfjSBRmQDu3MAAZrjj8j+RwvbASPc9f+gpd2pF/sHXPWPeTbd1OmXpC7CYt+Nnb6kD+Ed0fFH366YcAoV9LNA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>

        {{-- Header Left --}}
        <div class="header-left">
            <div class="logo">
                <div class="logo_i">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-bolt"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M13 2l.018 .001l.016 .001l.083 .005l.011 .002h.011l.038 .009l.052 .008l.016 .006l.011 .001l.029 .011l.052 .014l.019 .009l.015 .004l.028 .014l.04 .017l.021 .012l.022 .01l.023 .015l.031 .017l.034 .024l.018 .011l.013 .012l.024 .017l.038 .034l.022 .017l.008 .01l.014 .012l.036 .041l.026 .027l.006 .009c.12 .147 .196 .322 .218 .513l.001 .012l.002 .041l.004 .064v6h5a1 1 0 0 1 .868 1.497l-.06 .091l-8 11c-.568 .783 -1.808 .38 -1.808 -.588v-6h-5a1 1 0 0 1 -.868 -1.497l.06 -.091l8 -11l.01 -.013l.018 -.024l.033 -.038l.018 -.022l.009 -.008l.013 -.014l.04 -.036l.028 -.026l.008 -.006a1 1 0 0 1 .402 -.199l.011 -.001l.027 -.005l.074 -.013l.011 -.001l.041 -.002z" /></svg>
                </div>
                <div class="logo-content">
                   <strong style="color:#fff; font-size:18px;">Chamunda</strong><br>
                    <strong style="color:hsl(32, 92%, 55%)">Electricals</strong>
                </div>
            </div>

            <div class="links">
                <ul>
                    <li>
                        <a href="">
                            Home
                        </a>
                    </li>
                    
                    <li>
                        <a href="">
                          Products <i class="ti ti-chevron-down"></i>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="">
                            About Us
                        </a>    
                    </li>

                    <li>
                        <a href="">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Header Right --}}

        <div class="header-right">
            <div class="search">

                <div class="search-bar">
                    <form action="#" class="search_form">
                        <input type="text" name="search" placeholder="Search products....">
                        <button type="submit">
                            <i class="ti ti-search"></i>
                        </button>
                    </form>    
                </div>
                
            </div>

            <div class="cart">
                <div class="cart-logo">
                    <a href="">
                        <i class="ti ti-shopping-cart"></i>
                        <span id="cartCount" class="cart_count"></span>
                    </a>
                    
                </div>
            </div>

            <div class="user">
                <div class="user-logo">
                    <a href="">
                        <i class="ti ti-user-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>