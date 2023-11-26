
<div class="relative">
    <div class="fixed top-0 bottom-0 left-0 right-0 z-50 max-w-lg mt-12 overflow-hidden lg:mt-0"
        :class="{
            'lg:left-[16rem] left-0': !toggleSidebarDesktop,
            'lg:left-[5rem] left-0': toggleMiniSidebar,
            'lg:left-0': toggleSidebarDesktop,
        }"
        x-cloak>
        <section class="absolute inset-y-0 left-0 z-50 flex max-w-full" aria-labelledby="slide-over-heading">
            <div class="relative w-screen max-w-md">

                <div class="flex flex-col h-full py-6 pt-0 overflow-auto bg-white shadow-xl animate__animated animate__fadeInLeft dark:bg-gray-900">
                    <div class="relative flex-shrink-0 overflow-hidden bg-primary-600 ">
                        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                        </svg>
                        <div class="relative flex items-center p-4">
                            <h2 class="text-base font-semibold text-white uppercase">
                                List Of Setting
                            </h2>
                        </div>
                    </div>

                    <div class="relative flex-1 px-4 mt-6 sm:px-6">
                        <!-- Replace with your content -->
                        <div class="mb-4">
                            <x-input
                                placeholder="Search"
                                id="myInput"
                                onkeyup="myFunction()"
                            />
                        </div>
                        <div class="py-3 border-2 rounded border-primary-50 dark:border-gray-800 ">
                            <div class="h-full leading-6" aria-hidden="true">
                                <ul id="myUL" class="list-none">
                                    <div class="py-2">
                                        <div x-data={show:false}>
                                            <li x-on:click.prevent="show=!show" class="flex items-center justify-between cursor-pointer hover:bg-primary-50 dark:hover:bg-gray-800 focus:outline-none">
                                                <p class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white">
                                                    <x-icon name="collection" class="w-4 h-4 mr-2"/>
                                                    <span>Maintenance</span>
                                                </p>
                                                <div class="px-4" x-show="!show"  x-cloak>
                                                    <x-icon name="chevron-left" class="inline-flex w-5 h-5 text-gray-500 dark:text-white"/>
                                                </div>
                                                <div class="px-4" x-show="show" x-cloak>
                                                    <x-icon name="chevron-down" class="inline-flex w-5 h-5 text-gray-500 dark:text-white"/>
                                                </div>
                                            </li>

                                            <div x-show="show" class="px-4 bg-gray-100 dark:bg-gray-800 ">
                                                <li>
                                                    <a href="{{ route('setting.maintenance.state') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>State</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.relationship') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Relationship</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.religion') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Religion</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.race') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Race</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.glcode') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>GL Code</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.gender') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Gender</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.title') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Title</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.marital') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Marital</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.education') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Education</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.banks') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Bank</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.country') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Country</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.financing-rule') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Financing Rule</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.address-type') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Address Type</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.languages') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Languages</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.identity-type') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Identity Type</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.third-party') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Third Party</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.member-status') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Member Status</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.branch-id') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Branch Id</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.position') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Position</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.income') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Income</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.job-status') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Job Status</span>
                                                    </a>
                                                    <a href="{{ route('setting.maintenance.occupation') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Occupation</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.concept-code') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Concept Code</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.department') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Department</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.cust-type') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Customer Type</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.takaful') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Takaful</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.guarantor-status') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Guarantor Status</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.inst-codes') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Inst Code</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.inst-modes') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Inst Mode</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.cust-status') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Code Status</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.employer-list') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Employer List</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.payment-type') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Payment Type</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.products') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Product</span>
                                                    </a>
                                                    <a wire:navigate href="{{ route('setting.maintenance.virtual-acc') }}" class="inline-flex items-center w-full px-4 py-2 text-sm font-semibold text-gray-500 dark:text-white hover:text-primary-500">
                                                        <x-icon name="clipboard-list" class="w-4 h-4 mr-2"/>
                                                        <span>Virtual Account</span>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@push('js')
<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
@endpush
