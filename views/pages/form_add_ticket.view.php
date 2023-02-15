<dialog open id="dialog" class="bg-gray-800 w-full ">
    <section class=" dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-red-500 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="bg-gray-200 p-3 rounded-t-lg">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-800 md:text-2xl dark:text-white">
                        Ticket
                    </h1>
                </div>
                <div class="md:space-y-6 sm:p-8 w-full bg-red-500">
                    <form class="w-full bg-white md:space-y-6" action="#">
                        <div class="w-full space-y-2">
                            <div>
                                <input type="file" name="image" id="image" class="bg-neutral-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div>
                                <input type="text" name="title" id="title" class="bg-neutral-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title..." required="">
                            </div>
                            <div>
                                <input type="text" name="price" id="price" class="bg-neutral-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prices" required="">
                            </div>
                            <div>
                                <input type="datetime-local" name="date" id="date" class="bg-neutral-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date" required="">
                            </div>
                            <div>
                                <input type="text" name="location" id="location" class="bg-neutral-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Location..." required="">
                            </div>
                            <div>
                                <textarea name="message" id="message" class="bg-neutral-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description..."></textarea>
                            </div>
                        </div>
                        <div class="ml-64 space-x-2">
                            <button class="bg-red-500 p-1.5 rounded-lg" onclick="cancel()">
                                Cancel
                            </button>
                            <button class="bg-blue-500 p-1.5 rounded-lg w-14" onclick="add()">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</dialog>