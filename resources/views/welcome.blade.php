<x-guest-layout>
    <div x-data="{
    images: ['asset/image/background.jpg', 'asset/image/background2.jpg', 'asset/image/background3.jpg'],
    currentIndex: 0,
    slideInterval: null
}" x-init="() => {
    slideInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
    }, 5000);
}">
        <section id="slider" class="relative bg-center h-[100vh] flex flex-col items-center justify-center bg-blend-darken" x-bind:style="'background-image: url(' + images[currentIndex] + '); background-color: rgba(41, 40, 43, 0.75); background-repeat: no-repeat; background-size: cover;'">
            <div class="max-w-screen-xl space-y-10 text-left px-3 md:px-0 py-12 lg:py-28">
                <h1 class="mb-4 text-5xl font-black w-full md:w-1/2 text-white md:text-7xl lg:text-8xl">
                    Empowering Lives, Enriching Communities
                </h1>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                    <a class="px-8 py-3 w-fit font-bold uppercase text-lg hover:text-white hover:bg-primary font-bold text-black bg-white rounded-md" href="{{ 'what-we-do' }}">
                        What we do
                    </a>
                </div>
            </div>
            <button @click="currentIndex = (currentIndex - 1 + images.length) % images.length" class="absolute top-1/2 left-4 transform -translate-y-1/2 px-4 py-2  text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>

            </button>
            <button @click="currentIndex = (currentIndex + 1) % images.length" class="absolute top-1/2 right-4 transform -translate-y-1/2  px-4 py-2 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>

            </button>

        </section>
    </div>

    <div class="">
        <div
            class="flex md:flex-row flex-col mx-auto py-auto mt-20 w-full text-justify md:max-w-7xl justify-between items-center">
            <div class="md:w-1/2 w-full p-3 md:p-0 space-y-5">

                <div class="flex md:flex-row flex-col gap-8">

                    <div class="space-y-6">
                        <div class="flex items-center space-x-5 md:space-x-10">
                            <div class="md:h-24 h-12 w-2  md:w-4 bg-primary">
                            </div>
                            <h1 class="uppercase md:text-4xl text-2xl items-center font-bold"> Know About us</h1>
                        </div>

                        <h1 class="text-xl md:text-2xl font-bold">DR. DANJUMA ADAMU DABO FOUNDATION</h1>
                        <p class="text-lg">
                            Adamu Dabo Foundation was founded by Dr. Danjuma Adamu Dabo on 1st January, 2020. The idea
                            was
                            borne out of his philanthropic spirit towards the needy available in the society. The
                            foundation
                            was established to serve as a source of rendering service to humanity for the sake of the
                            Almighty Allah. The centre of the foundation is located in Alfurqan International Academy
                            Bauchi
                            along Dass Road, Bauchi, Bauchi State. The foundation was structured with a Da’awa Committee
                            under it.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" px-2 rounded-2xl ">
                <img class=" rounded-2xl" src="asset/image/dawah-2.jpg" alt="">
            </div>
        </div>
        <div class="flex justify-center pt-8">
            <a href="{{ route('about') }}"
                class="px-8 py-3 text-sm hover:bg-tertiary font-bold text-black bg-secondary rounded-md" >
                Learn more
            </a>
        </div>
    </div>
    <div class=" px-3 md:px-0 md:max-w-7xl w-full py-8 mx-auto justify-start">

        <div class="flex items-center space-x-5 md:space-x-10">
            <div class="md:h-24  h-12 w-2  md:w-4 bg-primary">
            </div>
            <h1 class="font-bold ml-3 text-2xl md:text-4xl"> OUR PARTNERS</h1>

        </div>
        <div class="flex mx-auto py-auto px-10 md:px-0 my-10 space-x-10 max-w-7xl items-center">
            <img class="h-24 rounded-full" src="{{ asset('asset/image/alfurqan.png') }}" alt="">
            <img class="h-24 rounded-full" src="{{ asset('asset/image/izala-logo.jpg') }}" alt="">
            <img class="h-24" src="{{ asset('asset/image/jni-logo.jpg') }}" alt="">
        </div>
    </div>

    <div class="w-full pt-1 pb-6 bg-background">
        <div
            class="flex md:flex-row flex-col space-x-3 mx-auto py-auto md:mt-20 mt-5 w-full md:max-w-7xl justify-between items-center">
            <div class="md:w-1/2 w-full space-y-5">

                <div class="text-justify space-y-6  p-4 md:p-0 gap-4">
                    <div class="flex space-x-10 items-center">
                        <div class="md:h-24 h-12 w-2 md:w-4 bg-primary">
                        </div>
                        <h1 class=" uppercase text-2xl md:text-4xl items-center font-bold"> What we do</h1>
                    </div>

                    <div class="space-y-5">
                        <h1 class="md:text-2xl text-xl text-left font-bold">Some of our philanthropic work we have done</h1>
                        <p class="text-base">
                            Dr. Danjuma Adamu Dabo Foundation is a non-profitable organization established with no view
                            to generating profit and in which no part of the organization's income is distributed to its
                            members, or directors.

                        </p>

                        <div class="space-y-5">
                            <div class="flex gap-8">
                                <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.358887" width="28" height="28" rx="4" fill="black" />
                                    <path d="M14.9395 18.9565H15.8184V21.3589H14.9395V18.9565Z" fill="#FFEBB9" />
                                    <path d="M13.1816 18.9565H14.0605V21.3589H13.1816V18.9565Z" fill="#FFEBB9" />
                                    <path
                                        d="M17.459 6.35889H11.541C11.2983 6.35889 11.1016 6.55564 11.1016 6.79834V21.3589H12.3027V18.5171C12.3027 18.2744 12.4995 18.0776 12.7422 18.0776H16.2578C16.5005 18.0776 16.6973 18.2744 16.6973 18.5171V21.3589H17.8984V6.79834C17.8984 6.55564 17.7017 6.35889 17.459 6.35889ZM13.1816 16.7593C13.1816 17.002 12.9849 17.1987 12.7422 17.1987C12.4995 17.1987 12.3027 17.002 12.3027 16.7593V15.8804C12.3027 15.6377 12.4995 15.4409 12.7422 15.4409C12.9849 15.4409 13.1816 15.6377 13.1816 15.8804V16.7593ZM13.1816 14.1226C13.1816 14.3653 12.9849 14.562 12.7422 14.562C12.4995 14.562 12.3027 14.3653 12.3027 14.1226V13.2437C12.3027 13.001 12.4995 12.8042 12.7422 12.8042C12.9849 12.8042 13.1816 13.001 13.1816 13.2437V14.1226ZM14.9395 16.7593C14.9395 17.002 14.7427 17.1987 14.5 17.1987C14.2573 17.1987 14.0605 17.002 14.0605 16.7593V15.8804C14.0605 15.6377 14.2573 15.4409 14.5 15.4409C14.7427 15.4409 14.9395 15.6377 14.9395 15.8804V16.7593ZM14.9395 14.1226C14.9395 14.3653 14.7427 14.562 14.5 14.562C14.2573 14.562 14.0605 14.3653 14.0605 14.1226V13.2437C14.0605 13.001 14.2573 12.8042 14.5 12.8042C14.7427 12.8042 14.9395 13.001 14.9395 13.2437V14.1226ZM16.6973 16.7593C16.6973 17.002 16.5005 17.1987 16.2578 17.1987C16.0151 17.1987 15.8184 17.002 15.8184 16.7593V15.8804C15.8184 15.6377 16.0151 15.4409 16.2578 15.4409C16.5005 15.4409 16.6973 15.6377 16.6973 15.8804V16.7593ZM16.6973 14.1226C16.6973 14.3653 16.5005 14.562 16.2578 14.562C16.0151 14.562 15.8184 14.3653 15.8184 14.1226V13.2437C15.8184 13.001 16.0151 12.8042 16.2578 12.8042C16.5005 12.8042 16.6973 13.001 16.6973 13.2437V14.1226ZM13.1816 11.4858C13.1816 11.7285 12.9849 11.9253 12.7422 11.9253C12.4995 11.9253 12.3027 11.7285 12.3027 11.4858V10.6069C12.3027 10.3642 12.4995 10.1675 12.7422 10.1675C12.9849 10.1675 13.1816 10.3642 13.1816 10.6069V11.4858ZM14.9395 11.4858C14.9395 11.7285 14.7427 11.9253 14.5 11.9253C14.2573 11.9253 14.0605 11.7285 14.0605 11.4858V10.6069C14.0605 10.3642 14.2573 10.1675 14.5 10.1675C14.7427 10.1675 14.9395 10.3642 14.9395 10.6069V11.4858ZM16.6973 11.4858C16.6973 11.7285 16.5005 11.9253 16.2578 11.9253C16.0151 11.9253 15.8184 11.7285 15.8184 11.4858V10.6069C15.8184 10.3642 16.0151 10.1675 16.2578 10.1675C16.5005 10.1675 16.6973 10.3642 16.6973 10.6069V11.4858ZM13.1816 8.84912C13.1816 9.09182 12.9849 9.28857 12.7422 9.28857C12.4995 9.28857 12.3027 9.09182 12.3027 8.84912V7.97021C12.3027 7.72752 12.4995 7.53076 12.7422 7.53076C12.9849 7.53076 13.1816 7.72752 13.1816 7.97021V8.84912ZM14.9395 8.84912C14.9395 9.09182 14.7427 9.28857 14.5 9.28857C14.2573 9.28857 14.0605 9.09182 14.0605 8.84912V7.97021C14.0605 7.72752 14.2573 7.53076 14.5 7.53076C14.7427 7.53076 14.9395 7.72752 14.9395 7.97021V8.84912ZM16.6973 8.84912C16.6973 9.09182 16.5005 9.28857 16.2578 9.28857C16.0151 9.28857 15.8184 9.09182 15.8184 8.84912V7.97021C15.8184 7.72752 16.0151 7.53076 16.2578 7.53076C16.5005 7.53076 16.6973 7.72752 16.6973 7.97021V8.84912Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M21.5605 12.2183H18.7773V21.3589H21.5605C21.8032 21.3589 22 21.1621 22 20.9194V12.6577C22 12.415 21.8032 12.2183 21.5605 12.2183ZM20.8281 17.9312C20.8281 18.1738 20.6314 18.3706 20.3887 18.3706C20.146 18.3706 19.9492 18.1738 19.9492 17.9312V17.0522C19.9492 16.8096 20.146 16.6128 20.3887 16.6128C20.6314 16.6128 20.8281 16.8096 20.8281 17.0522V17.9312ZM20.8281 15.2944C20.8281 15.5371 20.6314 15.7339 20.3887 15.7339C20.146 15.7339 19.9492 15.5371 19.9492 15.2944V14.4155C19.9492 14.1728 20.146 13.9761 20.3887 13.9761C20.6314 13.9761 20.8281 14.1728 20.8281 14.4155V15.2944Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M7.43945 12.2183C7.19676 12.2183 7 12.415 7 12.6577V20.9194C7 21.1621 7.19676 21.3589 7.43945 21.3589H10.2227V12.2183H7.43945ZM9.05078 17.9312C9.05078 18.1738 8.85402 18.3706 8.61133 18.3706C8.36863 18.3706 8.17188 18.1738 8.17188 17.9312V17.0522C8.17188 16.8096 8.36863 16.6128 8.61133 16.6128C8.85402 16.6128 9.05078 16.8096 9.05078 17.0522V17.9312ZM9.05078 15.2944C9.05078 15.5371 8.85402 15.7339 8.61133 15.7339C8.36863 15.7339 8.17188 15.5371 8.17188 15.2944V14.4155C8.17188 14.1728 8.36863 13.9761 8.61133 13.9761C8.85402 13.9761 9.05078 14.1728 9.05078 14.4155V15.2944Z"
                                        fill="#FFEBB9" />
                                </svg>

                                <div class="space-y-2 w-4/5">
                                    <h1 class="text-lg font-semibold">Family Support</h1>
                                    <p>Through various initiatives, such as distribution of palliative the foundation
                                        offers assistance to families facing
                                        financial challenges, providing essential resources and services to ensure their
                                        well-being.</p>
                                </div>

                            </div>

                            <div class="flex gap-8">
                                <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.358887" width="28" height="28" rx="4" fill="black" />
                                    <path
                                        d="M13.8822 12.6007C14.0516 12.6634 14.2177 12.5099 14.1616 12.3465C13.7763 11.2253 12.3814 10.807 11.0848 11.8018C10.4027 12.3251 10.1464 12.4363 10.1399 12.4391C10.5896 12.8637 11.1033 14.2885 12.2244 14.4461C13.4593 14.6576 14.5523 13.51 13.6581 12.9849C13.07 12.6396 12.3776 12.4391 11.6353 12.4391C12.4134 12.2734 13.1902 12.3444 13.8822 12.6007Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M19.4744 11.8017C17.2361 10.0846 15.8086 12.7925 16.6959 12.5241C17.3261 12.3334 18.0151 12.2919 18.7061 12.439C17.5352 12.439 16.4559 12.9458 15.7363 13.7707C15.7954 12.4744 15.8848 11.6629 15.9884 11.0593C16.5865 11.0399 17.3837 10.5838 17.8215 9.78557C18.5762 8.50995 18.2262 7.20202 18.1136 6.37671C17.5238 6.91906 14.9478 6.28357 13.9266 7.93631C13.4754 8.66639 13.6066 9.5548 14.0811 10.2049C14.2313 10.4107 14.5905 10.312 14.6008 10.0622C14.6453 8.9757 15.2179 8.15479 16.2853 7.70011C15.8063 8.28623 15.4918 8.94244 15.3294 9.62067C15.0768 10.6772 14.8131 11.3703 14.7162 14.7378C14.7064 15.0793 14.9993 15.3619 15.361 15.3577C15.6229 15.3546 15.8472 15.1976 15.9479 14.9693C16.101 14.6221 16.3503 14.2627 16.756 13.9335C17.1414 14.3359 17.728 14.55 18.335 14.446C19.4513 14.2891 19.9723 12.8612 20.4194 12.439C20.4128 12.4362 20.1565 12.3251 19.4744 11.8017Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M22.7649 15.9975C22.0651 15.5492 21.3035 15.8687 20.9538 16.0594L16.5647 19.0933L13.9947 19.0939L13.3523 18.4871H15.7124C16.4222 18.4871 17.2172 18.0504 17.2172 17.2732C17.2172 16.4481 16.4222 16.0594 15.7124 16.0594H14.828C14.1709 16.0594 13.4031 16.1147 12.8618 15.841C12.3474 15.5938 11.7551 15.4532 11.1229 15.4532C10.0612 15.4532 9.11104 15.8529 8.45992 16.4833L5 19.7001L8.85489 23.3409L10.1399 21.5205H16.2119C16.8595 21.5205 17.4846 21.2961 17.9687 20.89L22.8088 16.8292C23.0779 16.6035 23.0627 16.1884 22.7649 15.9975Z"
                                        fill="#FFEBB9" />
                                </svg>


                                <div class="space-y-2 w-4/5">
                                    <h1 class="text-lg font-semibold">Health Support</h1>
                                    <p>At the core of its humanitarian efforts, the Adamu Dabo Foundation prioritizes
                                        health and well-being. Through the provision of Ramadan Iftar in hospitals and
                                        the dedicated care for seriously ill individuals, the foundation addresses
                                        critical health needs in the community.</p>
                                </div>

                            </div>

                            <div class="flex gap-8">

                                <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.358887" width="28" height="28" rx="4" fill="black" />
                                    <path
                                        d="M22.797 19.8003C22.5191 19.6071 22.2746 19.37 22.0729 19.0982C21.5902 18.5497 20.9759 17.8695 19.835 17.8695C18.694 17.8695 18.1016 18.5277 17.597 19.1201C17.0923 19.7125 16.7632 20.0636 16.0172 20.0636C15.2712 20.0636 14.8982 19.6467 14.4375 19.1201C13.9767 18.5935 13.3624 17.8695 12.1995 17.8695C11.0366 17.8695 10.4662 18.5277 9.96149 19.1201C9.45686 19.7125 9.12773 20.0636 8.38175 20.0636C7.63576 20.0636 7.26275 19.6467 6.802 19.1201C6.48879 18.7065 6.09273 18.3627 5.63912 18.1108C5.42099 18.0018 5.15578 18.0902 5.04672 18.3083C4.93765 18.5264 5.02606 18.7916 5.24419 18.9007C5.58868 19.1083 5.89333 19.3758 6.14375 19.6906C6.64838 20.283 7.24078 20.9412 8.38175 20.9412C9.52271 20.9412 10.1151 20.283 10.6197 19.6906C11.1244 19.0982 11.4535 18.7471 12.1995 18.7471C12.9455 18.7471 13.3185 19.164 13.7792 19.6906C14.24 20.2172 14.8543 20.9412 16.0172 20.9412C17.1801 20.9412 17.7505 20.283 18.2552 19.6906C18.7598 19.0982 19.089 18.7471 19.835 18.7471C20.5809 18.7471 20.9539 19.164 21.4147 19.6906C21.6704 20.0189 21.9736 20.3073 22.3143 20.5462C22.5203 20.6795 22.7953 20.6206 22.9286 20.4146C23.062 20.2086 23.003 19.9336 22.797 19.8003Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M22.797 16.5091C22.5191 16.316 22.2746 16.0788 22.0729 15.807C21.5902 15.2585 20.9759 14.5783 19.835 14.5783C18.694 14.5783 18.1016 15.2365 17.597 15.829C17.0923 16.4214 16.7632 16.7724 16.0172 16.7724C15.2712 16.7724 14.8982 16.3555 14.4375 15.829C13.9767 15.3024 13.3624 14.5783 12.1995 14.5783C11.0366 14.5783 10.4662 15.2365 9.96149 15.829C9.45686 16.4214 9.12773 16.7724 8.38175 16.7724C7.63576 16.7724 7.26275 16.3555 6.802 15.829C6.48879 15.4153 6.09273 15.0716 5.63912 14.8197C5.42099 14.7106 5.15578 14.799 5.04672 15.0172C4.93765 15.2353 5.02606 15.5005 5.24419 15.6096C5.58868 15.8172 5.89333 16.0847 6.14375 16.3994C6.64838 16.9918 7.24078 17.6501 8.38175 17.6501C9.52271 17.6501 10.1151 16.9919 10.6197 16.3994C11.1244 15.807 11.4535 15.456 12.1995 15.456C12.9455 15.456 13.3185 15.8729 13.7792 16.3994C14.24 16.926 14.8543 17.6501 16.0172 17.6501C17.1801 17.6501 17.7505 16.9919 18.2552 16.3994C18.7598 15.807 19.089 15.456 19.835 15.456C20.5809 15.456 20.9539 15.8729 21.4147 16.3994C21.6704 16.7278 21.9736 17.0161 22.3143 17.2551C22.5203 17.3884 22.7953 17.3295 22.9286 17.1235C23.062 16.9175 23.003 16.6424 22.797 16.5091Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M22.797 12.9985C22.5191 12.8053 22.2746 12.5682 22.0729 12.2964C21.5902 11.7478 20.9759 11.0677 19.835 11.0677C18.694 11.0677 18.1016 11.7259 17.597 12.3183C17.0923 12.9108 16.7632 13.2618 16.0172 13.2618C15.2712 13.2618 14.8982 12.8449 14.4375 12.3183C13.9767 11.7918 13.3624 11.0677 12.1995 11.0677C11.0366 11.0677 10.4662 11.7259 9.96149 12.3183C9.45686 12.9107 9.12773 13.2618 8.38175 13.2618C7.63576 13.2618 7.26275 12.8449 6.802 12.3183C6.48879 11.9047 6.09273 11.5609 5.63912 11.309C5.42099 11.1999 5.15578 11.2884 5.04672 11.5065C4.93765 11.7246 5.02606 11.9898 5.24419 12.0989C5.58868 12.3065 5.89333 12.574 6.14375 12.8888C6.64838 13.4812 7.24078 14.1394 8.38175 14.1394C9.52271 14.1394 10.1151 13.4812 10.6197 12.8888C11.1244 12.2964 11.4535 11.9453 12.1995 11.9453C12.9455 11.9453 13.3185 12.3622 13.7792 12.8888C14.24 13.4153 14.8543 14.1394 16.0172 14.1394C17.1801 14.1394 17.7505 13.4812 18.2552 12.8888C18.7599 12.2963 19.089 11.9453 19.835 11.9453C20.5809 11.9453 20.9539 12.3622 21.4147 12.8888C21.6704 13.2171 21.9736 13.5055 22.3143 13.7444C22.5203 13.8777 22.7953 13.8188 22.9286 13.6128C23.062 13.4068 23.003 13.1317 22.797 12.9985Z"
                                        fill="#FFEBB9" />
                                    <path
                                        d="M5.24436 8.80784C5.58886 9.01547 5.8935 9.28298 6.14392 9.59771C6.64855 10.1901 7.24096 10.8484 8.38192 10.8484C9.52288 10.8484 10.1152 10.1902 10.6199 9.59771C11.1245 9.0053 11.4537 8.65425 12.1997 8.65425C12.9456 8.65425 13.3187 9.07115 13.7794 9.59771C14.2401 10.1243 14.8545 10.8484 16.0174 10.8484C17.1803 10.8484 17.7507 10.1902 18.2554 9.59771C18.76 9.0053 19.0891 8.65425 19.8351 8.65425C20.5811 8.65425 20.9541 9.07115 21.4149 9.59771C21.6706 9.92603 21.9738 10.2144 22.3144 10.4534C22.5204 10.5867 22.7955 10.5278 22.9288 10.3218C23.0621 10.1158 23.0032 9.8407 22.7971 9.7074C22.5192 9.51426 22.2747 9.2771 22.0731 9.0053C21.5904 8.45679 20.976 7.77661 19.8351 7.77661C18.6942 7.77661 18.1018 8.43482 17.5971 9.02727C17.0925 9.61967 16.7633 9.97072 16.0173 9.97072C15.2714 9.97072 14.8983 9.55382 14.4376 9.02727C13.9769 8.50067 13.3625 7.77661 12.1996 7.77661C11.0367 7.77661 10.4663 8.43482 9.96162 9.02727C9.45699 9.61967 9.12786 9.97072 8.38188 9.97072C7.63589 9.97072 7.26296 9.55382 6.80218 9.02723C6.48897 8.61356 6.0929 8.26982 5.63929 8.01792C5.42116 7.90886 5.15595 7.99726 5.04689 8.21539C4.93783 8.43352 5.02627 8.69877 5.24436 8.80784Z"
                                        fill="#FFEBB9" />
                                </svg>
                                <div class="space-y-2 w-4/5">
                                    <h1 class="text-lg font-semibold">Education</h1>
                                    <p class="text-justify"> By running an orphanage and facilitating skills
                                        acquisition
                                        programs, the
                                        foundation not only provides educational opportunities but also equips
                                        individuals with the skills necessary for a better future. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-2 rounded-2xl">
                <img class="rounded-2xl" src="asset/image/adb5.jpg" alt="">
            </div>

        </div>
        <div class="flex justify-center pt-8">
            <a href="#" class="px-8 py-3 text-sm hover:bg-tertiary font-bold text-black bg-secondary rounded-md"
                href="{{ route('what-we-do') }}">
                Learn more
            </a>
        </div>
    </div>
    <div class="w-full py-1 md:text-justify ">
        <div class=" p-4 md:p-0 space-y-6 my-auto mx-auto py-auto md:mt-20 mt-10 w-full md:max-w-7xl ">
            <div class="flex gap-8">
                <div class=" flex items-center">
                <div class="md:h-24 h-12 w-2  md:w-4 bg-primary">
                </div>
                <h1 class=" font-bold ml-8 uppercase text-2xl items-center md:text-4xl"> Our Programs</h1>
                </div>

            </div>
            <h1 class="md:text-2xl uppercase text-xl font-bold">Some Programs We Have Embarked On</h1>

            <div class="flex py-4 md:flex-row flex-col space-y-3 md:space-x-8">


                <div class="rounded-xl bg-blend-darken w-full py-10 md:w-1/3"
                    style=" background-image: url('asset/image/adb-6.jpg'); background-color: rgba(62, 40, 5, 0.75);

                background-size: cover;
                ">
                    <div class="px-8  text-white space-y-5 py-10">
                        <h1 class="font-bold text-left text-2xl">
                            Provision of Ramadan Iftar for hospitals
                        </h1>
                        <p>The foundation also takes to to distribute foods and relief material to the sick members of
                            the communities in hospital for Iftar during the blessed month of Ramadan </p>

                        <div>
                            <a class="py-2 px-4 bg-white rounded-md text-black" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-blend-darken w-full py-10 md:w-1/3"
                    style=" background-image: url('asset/image/adb-10.jpg'); background-color: rgba(62, 40, 5, 0.75);

                background-size: cover;
                ">
                    <div class="px-8 text-white space-y-5 py-10">
                        <h1 class="font-bold text-2xl">
                            Da'awah Activity to Various Villages
                        </h1>
                        <p>The Foundation visited villages such as Nabardo, Gital, Dandango, Bazali, Fanti, Kussi, Dumi,
                            Gudum, Phalantulu, Lushi, Yuguda, Gubi and many other places in Bauchi State for Dawah
                            purposes.</p>
                        <div>
                            <a class="py-2 px-4 bg-white text-black rounded-md" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-blend-darken w-full py-10 md:w-1/3"
                    style=" background-image: url('asset/image/adb-7.jpg'); background-color: rgba(62, 40, 5, 0.75);
                background-size: cover;
                ">
                    <div class="px-8  text-white space-y-5 py-10">
                        <h1 class="font-bold text-2xl">
                            Skills Acquisition
                        </h1>
                        <p>The Adamu Dabo Foundation is committed to creating sustainable impact by fostering
                            partnerships with skill acquisition institutions, ensuring that the youth and women not only
                            acquire diverse skills and resources to build a self-reliant
                            future. </p>
                        <div>
                            <a class="py-2 px-4 bg-white rounded-md text-black" href="#">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full px-2 py-1 h-[50vh]  ">
        <div class="rounded-xl  h-2/3 bg-blend-darken mt-10 mx-auto py-auto max-w-6xl"
             style="background-image: url('asset/image/adb-11.jpg'); background-color: rgba(62, 40, 5, 0.75);
               background-size: cover;">

            <div class=" items-center  text-white flex flex-col justify-center h-full">
                <h1 class="md:text-2xl px-5 text-center text-lg ">Your Can Contribute by Joining as a Volunteer Fisabillilah to be part of our
                    Mission. As a volunteer, you will have the chance to acquire valuable experience, connect with new people, make meaningful contributions to important causes, and also earn Allah's reward</h1>
                <div class="flex md:flex-row flex-col space-y-8 items-center md:items-start md:space-x-8">
                    <br>
                    <div>
                        <a class="py-2 px-4 bg-primary rounded-md uppercase text-white font-semibold" href="{{ route('volunteer') }}">Join as a
                            Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
