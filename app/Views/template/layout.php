<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Ascension Gardens' ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->
    <link rel="icon" type="icon" href="<?= base_url(); ?>/assets/images/favicon.png"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&display=swap"
          rel="stylesheet"/>
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/swiper-bundle.min.css"/>
    <!-- AOS Animation CSS -->
    <link href="<?= base_url(); ?>/assets/css/aos.css" rel="stylesheet"/>
    <!-- accordion -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/accordion.min.css"/>
    <!-- FancyBox -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fancybox.css"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css"/>
</head>
<body class="overflow-x-hidden">
<div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
    <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="200px"
            height="200px"
            viewBox="0 0 100 100"
            preserveAspectRatio="xMidYMid"
    >
        <circle cx="50" cy="50" r="0" fill="none" stroke="#47bdff" stroke-width="4">
            <animate
                    attributeName="r"
                    repeatCount="indefinite"
                    dur="1s"
                    values="0;16"
                    keyTimes="0;1"
                    keySplines="0 0.2 0.8 1"
                    calcMode="spline"
                    begin="0s"
            ></animate>
            <animate
                    attributeName="opacity"
                    repeatCount="indefinite"
                    dur="1s"
                    values="1;0"
                    keyTimes="0;1"
                    keySplines="0.2 0 0.8 1"
                    calcMode="spline"
                    begin="0s"
            ></animate>
        </circle>
        <circle cx="50" cy="50" r="0" fill="none" stroke="#b476e5" stroke-width="4">
            <animate
                    attributeName="r"
                    repeatCount="indefinite"
                    dur="1s"
                    values="0;16"
                    keyTimes="0;1"
                    keySplines="0 0.2 0.8 1"
                    calcMode="spline"
                    begin="-0.5s"
            ></animate>
            <animate
                    attributeName="opacity"
                    repeatCount="indefinite"
                    dur="1s"
                    values="1;0"
                    keyTimes="0;1"
                    keySplines="0.2 0 0.8 1"
                    calcMode="spline"
                    begin="-0.5s"
            ></animate>
        </circle>
    </svg>
</div>
<div
        class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent"
>
    <!-- HEADER: MENU -->
    <div
            class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent"
    >
        <header id="top-header" class="sticky top-0 z-50 bg-black/10 transition duration-300">
            <div class="container">
                <div class="relative flex items-center justify-between py-5 lg:py-0">
                    <a href="index.html"><img src="assets/images/logo.png" alt="logo" class="h-10"/></a>
                    <div class="flex items-center">
                        <div onclick="toggleMenu()"
                             class="overlay fixed inset-0 z-[51] hidden bg-black/60 lg:hidden"></div>
                        <div class="menus">
                            <div class="border-b border-gray/10 ltr:text-right rtl:text-left lg:hidden">
                                <button onclick="toggleMenu()" type="button" class="p-4">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6 text-black dark:text-white"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="group relative">
                                    <a href="javascript:;" class="active">
                                        Landing
                                        <div class="group-hover:rotate-180 ltr:ml-2 rtl:mr-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M19 9L12 15L10.25 13.5M5 9L7.33333 11"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                />
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="submenu">
                                        <a href="crypto.html">Crypto Currency</a>
                                        <a href="modern-saas.html"> Modern Saas </a>
                                        <a href="real-estate.html"> Real Estate </a>
                                        <a href="healthcare.html"> Health Care </a>
                                        <a href="marketing.html">
                                            Sales Marketing
                                            <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                            >
                                                    New
                                                </span>
                                        </a>
                                        <a href="application.html">
                                            Application
                                            <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                            >
                                                    New
                                                </span>
                                        </a>
                                        <a href="hotel-resort.html">
                                            Hotel & Resort
                                            <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                            >
                                                    New
                                                </span>
                                        </a>
                                        <a href="nft.html">
                                            NFT Marketplace
                                            <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                            >
                                                    New
                                                </span>
                                        </a>
                                        <a href="#">
                                            Online Courses
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                        <a href="#">
                                            Restaurant
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                        <a href="#">
                                            Consulting
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                        <a href="#">
                                            Creative Agency
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                        <a href="#">
                                            Insurance
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                        <a href="#">
                                            Photography
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                        <a href="#">
                                            Construction
                                            <span class="ml-1 whitespace-nowrap rounded bg-secondary px-2 py-1 text-[9px] font-bold uppercase text-white">
                                                    Coming Soon
                                                </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                </li>
                                <li>
                                    <a href="services.html">Service</a>
                                </li>
                                <li>
                                    <a href="team.html">Team</a>
                                </li>
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="career.html">Career</a>
                                </li>
                                <li
                                        class="relative hidden items-center before:absolute before:top-1/2 before:h-[30px] before:w-[2px] before:-translate-y-1/2 before:bg-gray/30 ltr:pl-9 ltr:before:-left-[2px] rtl:pr-9 rtl:before:-right-[2px] lg:inline-flex"
                                >
                                    <button type="button" onclick="search()" class="text-white hover:text-primary">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M18.7363 17.4637L14.6512 13.3785C15.6799 12.0753 16.3 10.4347 16.3 8.65C16.3 4.4317 12.8683 1 8.65 1C4.4317 1 1 4.4317 1 8.65C1 12.8683 4.4317 16.3 8.65 16.3C10.4356 16.3 12.0754 15.6808 13.3786 14.6512L17.4637 18.7363C17.6392 18.9118 17.8696 19 18.1 19C18.3304 19 18.5608 18.9118 18.7363 18.7363C19.0882 18.3844 19.0882 17.8156 18.7363 17.4637ZM2.8 8.65C2.8 5.4244 5.4244 2.8 8.65 2.8C11.8756 2.8 14.5 5.4244 14.5 8.65C14.5 11.8756 11.8756 14.5 8.65 14.5C5.4244 14.5 2.8 11.8756 2.8 8.65Z"
                                                    fill="currentColor"
                                            />
                                        </svg>
                                    </button>
                                </li>
                                <li
                                        class="search-bar absolute hidden w-0 overflow-hidden bg-black transition-all duration-500 ltr:right-0 rtl:left-0 lg:block"
                                >
                                    <form action="" class="relative">
                                        <input
                                                type="text"
                                                placeholder="Search"
                                                class="w-full border-b border-white bg-transparent py-1 outline-none ltr:pl-2 ltr:pr-8 rtl:pr-2 rtl:pl-8"
                                        />
                                        <button
                                                type="button"
                                                class="absolute top-1/2 -translate-y-1/2 hover:text-primary ltr:right-0 rtl:left-0"
                                                onclick="search()"
                                        >
                                            <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor"
                                                    class="h-6 w-6"
                                            >
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <ul class="flex items-center gap-5 ltr:pr-5 rtl:pl-5 ltr:lg:pl-5 ltr:lg:pr-0 rtl:lg:pr-5 rtl:lg:pl-0">
                            <li>
                                <button
                                        type="button"
                                        class="flex h-5 w-5 items-center text-white hover:text-primary rtl:text-primary"
                                        onclick="toggleDirection()"
                                >
                                    <svg width="17" height="22" viewBox="0 0 17 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M16 18.9439H7.72074"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                        <path
                                                d="M13.8571 21L16 18.9439L13.8571 16.8879"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                        <path
                                                d="M1 16.4206H9.27926"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                        <path
                                                d="M3.14287 18.4766L1 16.4206L3.14287 14.3645"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                        <path
                                                d="M12.7855 1H5.82118C4.82662 1 3.87279 1.37909 3.16952 2.05387C2.46626 2.72865 2.07117 3.64385 2.07117 4.59813C2.07117 5.55242 2.46626 6.46761 3.16952 7.14239C3.87279 7.81717 4.82662 8.19626 5.82118 8.19626H6.3569"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                        <path
                                                d="M10.6426 12.3084V1"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                        <path
                                                d="M6.3573 12.3084V1"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                        type="button"
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-dark text-white hover:text-primary"
                                        onclick="toggleTheme()"
                                >
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="dark-mode-btn">
                                        <path
                                                d="M8 4C8 8.4 11.6 12 16 12C17.4 12 18.8 11.6 20 11C19.5 16.1 15.2 20 10 20C4.5 20 0 15.5 0 10C0 4.8 4 0.5 9 0C8.4 1.2 8 2.6 8 4ZM2 10C2 14.4 5.6 18 10 18C12.9 18 15.5 16.5 17 14C16.7 14 16.4 14 16 14C10.5 14 6 9.5 6 4C6 3.7 6 3.4 6 3C3.6 4.4 2 7.1 2 10Z"
                                                fill="currentColor"
                                        />
                                    </svg>
                                    <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="light-mode-btn hidden"
                                    >
                                        <path
                                                d="M10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5C11.3261 5 12.5979 5.52678 13.5355 6.46447C14.4732 7.40215 15 8.67392 15 10C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15ZM10 13.3333C10.8841 13.3333 11.7319 12.9821 12.357 12.357C12.9821 11.7319 13.3333 10.8841 13.3333 10C13.3333 9.11595 12.9821 8.2681 12.357 7.64298C11.7319 7.01786 10.8841 6.66667 10 6.66667C9.11595 6.66667 8.2681 7.01786 7.64298 7.64298C7.01786 8.2681 6.66667 9.11595 6.66667 10C6.66667 10.8841 7.01786 11.7319 7.64298 12.357C8.2681 12.9821 9.11595 13.3333 10 13.3333Z"
                                                fill="currentColor"
                                        />
                                        <path
                                                d="M9.09091 0.909092C9.09091 0.407014 9.49792 0 10 0C10.5021 0 10.9091 0.407014 10.9091 0.909092V1.81818C10.9091 2.32026 10.5021 2.72727 10 2.72727C9.49792 2.72727 9.09091 2.32026 9.09091 1.81818V0.909092ZM9.09091 18.1818C9.09091 17.6797 9.49792 17.2727 10 17.2727C10.5021 17.2727 10.9091 17.6797 10.9091 18.1818V19.0909C10.9091 19.593 10.5021 20 10 20C9.49792 20 9.09091 19.593 9.09091 19.0909V18.1818ZM2.92909 4.21455C2.57412 3.85958 2.57412 3.28406 2.92909 2.92909C3.28406 2.57412 3.85958 2.57412 4.21455 2.92909L4.85727 3.57182C5.21224 3.92679 5.21224 4.5023 4.85727 4.85727C4.5023 5.21224 3.92679 5.21224 3.57182 4.85727L2.92909 4.21455ZM15.1427 16.4282C14.7878 16.0732 14.7878 15.4977 15.1427 15.1427C15.4977 14.7878 16.0732 14.7878 16.4282 15.1427L17.0709 15.7855C17.4259 16.1404 17.4259 16.7159 17.0709 17.0709C16.7159 17.4259 16.1404 17.4259 15.7855 17.0709L15.1427 16.4282ZM15.7851 2.92886C16.1402 2.57358 16.7161 2.57361 17.0712 2.92894C17.4261 3.28403 17.4259 3.85951 17.071 4.21447L16.4283 4.8572C16.0732 5.21221 15.4977 5.21221 15.1427 4.8572C14.7877 4.50225 14.7876 3.92678 15.1425 3.57174L15.7851 2.92886ZM3.57182 15.1427C3.92679 14.7878 4.5023 14.7878 4.85727 15.1427C5.21224 15.4977 5.21224 16.0732 4.85727 16.4282L4.21455 17.0709C3.85958 17.4259 3.28406 17.4259 2.92909 17.0709C2.57412 16.7159 2.57412 16.1404 2.92909 15.7855L3.57182 15.1427ZM19.0909 9.09091C19.593 9.09091 20 9.49792 20 10C20 10.5021 19.593 10.9091 19.0909 10.9091H18.1818C17.6797 10.9091 17.2727 10.5021 17.2727 10C17.2727 9.49792 17.6797 9.09091 18.1818 9.09091H19.0909ZM1.81818 9.09091C2.32026 9.09091 2.72727 9.49792 2.72727 10C2.72727 10.5021 2.32026 10.9091 1.81818 10.9091H0.909092C0.407014 10.9091 0 10.5021 0 10C0 9.49792 0.407014 9.09091 0.909092 9.09091H1.81818Z"
                                                fill="currentColor"
                                        />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <button type="button"
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-primary lg:hidden"
                                onclick="toggleMenu()">
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="text-white">
                                <path
                                        d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                                        fill="currentColor"
                                />
                                <path
                                        d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                                        fill="currentColor"
                                />
                                <path
                                        d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                                        fill="currentColor"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- CONTENT -->

        <?php
        try {
            echo view($view);
        } catch (Exception $e) {
            echo "<pre><code>$e</code></pre>";
        }
        ?>

        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
        <footer class="mt-auto bg-white dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.03] dark:to-transparent">
            <div class="container">
                <div class="grid gap-y-10 gap-x-4 py-14 sm:grid-cols-3 lg:grid-cols-5 lg:py-[100px]">
                    <div class="relative">
                        <img src="assets/images/logo.png" alt="plurk" class="h-7" />
                        <ul class="mt-12 flex items-center gap-8">
                            <li>
                                <a href="javascript:">
                                    <svg
                                            width="10"
                                            height="20"
                                            viewBox="0 0 10 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="transition hover:scale-110 hover:text-secondary"
                                    >
                                        <path
                                                d="M8.0733 3.29509H9.88498V0.139742C9.57242 0.0967442 8.49748 0 7.2456 0C4.6335 0 2.84415 1.643 2.84415 4.66274V7.44186H-0.0383301V10.9693H2.84415V19.845H6.37821V10.9701H9.1441L9.58317 7.44269H6.37738V5.01251C6.37821 3.99297 6.65273 3.29509 8.0733 3.29509Z"
                                                fill="currentColor"
                                        />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:">
                                    <svg
                                            width="23"
                                            height="18"
                                            viewBox="0 0 23 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="transition hover:scale-110 hover:text-secondary"
                                    >
                                        <path
                                                d="M22.8849 2.11613C22.0668 2.475 21.1951 2.71288 20.2862 2.82838C21.2212 2.27013 21.9348 1.39287 22.2703 0.3355C21.3986 0.85525 20.4361 1.22238 19.4103 1.42725C18.5826 0.545875 17.4028 0 16.1158 0C13.6188 0 11.6086 2.02675 11.6086 4.51137C11.6086 4.86888 11.6388 5.21263 11.7131 5.53988C7.96345 5.357 4.64557 3.55988 2.4167 0.82225C2.02757 1.49738 1.79932 2.27012 1.79932 3.102C1.79932 4.664 2.6037 6.04862 3.8027 6.85025C3.07807 6.8365 2.3672 6.62613 1.76495 6.29475C1.76495 6.3085 1.76495 6.32638 1.76495 6.34425C1.76495 8.536 3.32832 10.3565 5.37845 10.7759C5.01132 10.8763 4.6112 10.9244 4.19595 10.9244C3.9072 10.9244 3.6157 10.9079 3.34207 10.8474C3.92645 12.6335 5.5847 13.9466 7.55645 13.9893C6.02195 15.1896 4.07357 15.9129 1.96432 15.9129C1.59445 15.9129 1.2397 15.8964 0.884949 15.851C2.88282 17.1394 5.25057 17.875 7.80395 17.875C16.1034 17.875 20.6409 11 20.6409 5.04075C20.6409 4.84137 20.6341 4.64887 20.6244 4.45775C21.5196 3.8225 22.2717 3.02913 22.8849 2.11613Z"
                                                fill="currentColor"
                                        />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:">
                                    <svg
                                            width="23"
                                            height="22"
                                            viewBox="0 0 23 22"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="transition hover:scale-110 hover:text-secondary"
                                    >
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M7.75995 0H16.0099C19.8063 0 22.8849 3.07862 22.8849 6.875V15.125C22.8849 18.9214 19.8063 22 16.0099 22H7.75995C3.96357 22 0.884949 18.9214 0.884949 15.125V6.875C0.884949 3.07862 3.96357 0 7.75995 0ZM16.0099 19.9375C18.6637 19.9375 20.8224 17.7787 20.8224 15.125V6.875C20.8224 4.22125 18.6637 2.0625 16.0099 2.0625H7.75995C5.1062 2.0625 2.94745 4.22125 2.94745 6.875V15.125C2.94745 17.7787 5.1062 19.9375 7.75995 19.9375H16.0099Z"
                                                fill="currentColor"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M6.38495 11C6.38495 7.96263 8.84757 5.5 11.8849 5.5C14.9223 5.5 17.3849 7.96263 17.3849 11C17.3849 14.0374 14.9223 16.5 11.8849 16.5C8.84757 16.5 6.38495 14.0374 6.38495 11ZM8.44745 11C8.44745 12.8948 9.9902 14.4375 11.8849 14.4375C13.7797 14.4375 15.3224 12.8948 15.3224 11C15.3224 9.10388 13.7797 7.5625 11.8849 7.5625C9.9902 7.5625 8.44745 9.10388 8.44745 11Z"
                                                fill="currentColor"
                                        />
                                        <circle cx="17.7975" cy="5.08737" r="0.732875" fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <img src="assets/images/footer-shape.png" alt="footer-shape" class="absolute bottom-0 right-0 sm:left-0" />
                        <img
                                src="assets/images/footer-shape-dark.png"
                                alt="footer-shape-dark"
                                class="absolute bottom-0 right-0 hidden dark:block sm:left-0"
                        />
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Quick Menu</li>
                            <li><a href="index.html" class="inline-block transition hover:scale-110 hover:text-secondary">Home</a></li>
                            <li><a href="portfolio.html" class="inline-block transition hover:scale-110 hover:text-secondary">Portfolio</a></li>
                            <li><a href="services.html" class="inline-block transition hover:scale-110 hover:text-secondary">Service</a></li>
                            <li><a href="team.html" class="inline-block transition hover:scale-110 hover:text-secondary">Team</a></li>
                            <li><a href="about-us.html" class="inline-block transition hover:scale-110 hover:text-secondary">About Us</a></li>
                            <li><a href="career.html" class="inline-block transition hover:scale-110 hover:text-secondary">Career</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Services</li>
                            <li>
                                <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">UI/UX Design</a>
                            </li>
                            <li>
                                <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">Web Development</a>
                            </li>
                            <li>
                                <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">App Development</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Legal</li>
                            <li>
                                <a href="terms-conditions.html" class="inline-block transition hover:scale-110 hover:text-secondary">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html" class="inline-block transition hover:scale-110 hover:text-secondary">Privacy Policy</a>
                            </li>
                            <li><a href="faq.html" class="inline-block transition hover:scale-110 hover:text-secondary">FAQs</a></li>
                            <li><a href="blog.html" class="inline-block transition hover:scale-110 hover:text-secondary">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Information</li>
                            <li>164 Brighton Ave, Allston, Maine, U.S. - 02134</li>
                            <li>
                                <a href="tel:+(617) 254-2333" class="inline-block transition hover:scale-110 hover:text-secondary">+(617) 254-2333</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] py-5 dark:border-t-2 dark:border-white/5 dark:bg-none">
                <div class="container">
                    <div class="flex flex-col items-center justify-between text-center font-bold dark:text-white md:flex-row">
                        <div>
                            Copyright© <span class="curr-year">2022</span>
                            <a href="javascript:" class="text-primary transition hover:text-secondary">Plurk Technologies Pvt. Ltd.</a>
                        </div>
                        <div>Need help? Visit the <a href="contact-us.html" class="text-secondary transition hover:text-primary">Contact Us</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <footer>
            <div class="environment">

                <p>Page rendered in {elapsed_time} seconds</p>

                <p>Environment: <?= ENVIRONMENT ?></p>

            </div>

            <div class="copyrights">

                <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the
                    MIT
                    open source licence.</p>

            </div>

        </footer>
    </div>
    <button type="button" id="scrollToTopBtn" class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5" onclick="scrollToTop()">
        <div
                class="group flex h-14 w-14 items-center justify-center rounded-full border border-black/20 bg-black text-white transition duration-500 hover:bg-secondary dark:bg-primary dark:hover:bg-secondary"
        >
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6 transition group-hover:text-black"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </div>
    </button>
    <!-- SCRIPTS -->

    <!-- Swiper Slider JS -->
    <script src="<?=base_url();?>/assets/js/swiper-bundle.min.js"></script>
    <!-- Counter Js -->
    <script src="<?=base_url();?>/assets/js/vanilla-counter.js"></script>
    <!-- accordion -->
    <script src="<?=base_url();?>/assets/js/accordion.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="<?=base_url();?>/assets/js/aos.js"></script>
    <!-- FancyBox -->
    <script src="<?=base_url();?>/assets/js/fancybox.umd.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url();?>/assets/js/custom.js"></script>

    <script>
        // Testimonial Slider
        var testimonialSwiper = new Swiper('.testimonial-slider', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 30,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.testimonial-swiper-button-next',
                prevEl: '.testimonial-swiper-button-prev',
            },
        });

        // team-member Slider
        var teamSwiper = new Swiper('.team-member', {
            loop: true,
            slidesPerView: '4',
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 3,
                },
                1600: {
                    slidesPerView: 4,
                },
            },
            navigation: {
                nextEl: '.team-swiper-button-next',
                prevEl: '.team-swiper-button-prev',
            },
        });

        // Counter Js
        VanillaCounter();

        // Accordion
        const acc = new Accordion('.accordion-container');
        acc.open(0);
    </script>

    <!-- -->

</body>
</html>
