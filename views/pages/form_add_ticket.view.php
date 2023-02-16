<dialog open id="dialog" class="bg-transparent w-full h-full">
    <section class="-mt-10">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full  rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-primary dark:border-gray-700">
                <div class="bg-secondary p-3 rounded-t-lg">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-800 md:text-2xl dark:text-white">
                        Ticket
                    </h1>
                </div>

                <form class="ml-2 mr-2">
                    <div class="mt-5 mb-5 space-y-2">
                        <div>
                            <input type="file" id="img" name="img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div>
                            <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Titlte.." required>
                        </div>
                        <div>
                            <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price.." required>
                        </div>
                        <div>
                            <input type="datetime-local" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price.." required>
                        </div>
                        <div>
                            <input type="text" id="venue" name="venue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Venue.." required>
                        </div>
                        <div>
                            <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address.." required>
                        </div>
                        <div>
                            <textarea name="message" id="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Message..."></textarea>
                        </div>
                    </div>
                    <div class="ml-64 mb-5 flex space-x-1 w-full text-center text-white">
                        <span class="bg-red-500 p-1.5 rounded-lg w-20" onclick="cancel()">
                            Cancel
                        </span>
                        <span class="bg-blue-500 p-1.5 rounded-lg w-20" onclick="addTickets()">
                            Add
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </section>
</dialog>
<script src="../../scripts/add_ticket.js"></script>