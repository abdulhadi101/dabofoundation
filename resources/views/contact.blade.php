<x-guest-layout>
    <div class="bg-background py-28 w-screen">
        <div
            class="flex md:flex-row space-x-10 flex-col mx-auto mt-20 w-full bg-background md:max-w-7xl justify-between ">
            <div class="md:w-1/2 w-full p-3 md:p-0 space-y-5">
                <div class="flex md:flex-row flex-col gap-8">
                    <hr class="md:w-20 border border-black hidden md:block h-0.5 bg-gray-800 ">
                    <div class="space-y-6 md:mr-28">
                        <h1 class="uppercase -mt-2 font-extrabold text-base">Contact Us</h1>
                        <h1 class="text-2xl md:text-4xl  font-bold">We'd love to hear from you</h1>
                        <p>Have any question in mind or want to enquire? Please feel free to contact us through the form
                            or the following details.</p>
                    </div>
                </div>
            </div>
            <div class="space-y-10">
                <div class=" text-justify space-y-2 rounded-2xl">
                    <h1 class="text-2xl font-bold"> Let's talk!
                    </h1>
                    <div class="flex space-x-8">
                        <p> +234 09012346514
                        </p>
                        <p> info@adamudabofoundation.org
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2 text-justify space-y-2 rounded-2xl">
                    <h1 class="text-2xl font-bold"> Head Office
                    </h1>
                    <div class="flex space-x-8">
                        <p> Along Bauchi Dass Road <br>
                            Bauchi, Nigeria
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">

            <form action="#" class="space-y-8 border-2 border-gray-500 px-10 py-4">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="name@email.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Let us know what its about" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm text-center text-black font-bold rounded-lg bg-primary-700 sm:w-fit hover:bg-tertiary focus:ring-4 focus:outline-none focus:ring-primary-300 bg-secondary dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                    message</button>
            </form>
        </div>
    </section>
</x-guest-layout>
