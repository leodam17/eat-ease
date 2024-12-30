<footer class="bg-[#5a4e3a] dark:bg-[#3e2b1c] py-8 font-poppins">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start">
            <div class="md:w-1/3">
                <h2 class="font-bold text-[#e0d1b3] dark:text-[#f3f2ed]">EatEase</h2>
                <p class="text-[#b79b6b] dark:text-[#b78e6b] mt-2">
                    Simplifying your meal planning and dining experience with curated menus tailored to your preferences.
                </p>
                <p class="mt-8 text-sm text-[#b79b6b] dark:text-[#b78e6b]">
                    Let us help you enjoy seamless and delightful meal experiences every day.
                </p>
            </div>

            <div class="hidden md:block md:w-2/3"></div>

            <div class="md:w-1/3 flex flex-col justify-end items-start mt-8 md:mt-0">
                <div>
                    <p class="font-semibold text-[#e0d1b3] dark:text-[#f3f2ed]">Contact Us</p>
                    <div class="mt-4 space-y-4">
                        <!-- Contact Item -->
                        <div class="relative flex items-center">
                            <div class="bg-[#b79b6b] dark:bg-[#8a6d4d] p-2 rounded-l-md text-white flex items-center justify-center z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="bg-[#282828] text-[#e0d1b3] dark:text-[#f3f2ed] px-4 py-2 rounded-r-md flex-1 z-0">
                                <span>0804-1-573348</span>
                            </div>
                        </div>
                        <!-- Contact Item -->
                        <div class="relative flex items-center">
                            <div class="bg-[#b79b6b] dark:bg-[#8a6d4d] p-2 rounded-l-md text-white flex items-center justify-center z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="bg-[#282828] text-[#e0d1b3] dark:text-[#f3f2ed] px-4 py-2 rounded-r-md flex-1 z-0">
                                <span>support@eatease.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center text-[#b79b6b] dark:text-[#b78e6b]">
            <p>© <span id="currentYear"></span> EatEase. All rights reserved.</p>

            <script defer>
                document.getElementById("currentYear").textContent = new Date().getFullYear();
            </script>
        </div>
    </div>
</footer>
