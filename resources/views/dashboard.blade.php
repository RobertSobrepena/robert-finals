<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
           <div class="col-xxl-4 col-md-6">
               <div class="card info-card sales-card">
                   <div class="card-body">
                       <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                           </div>
                           <h5 class="card-title">Total Number of Post:</span></h5>
                           <div class="d-flex align-items-center">
                                <div class="card-body">
                                        <div class="ps-3">
                                            <h2>{{ $tPosts }}</h2>
                                        </div>
                                </div>
                            </div>                                                                                         
                           <h5 class="card-title">Total Unpublished Post:</span></h5>
                           <div class="d-flex align-items-center">
                                <div class="card-body">
                                        <div class="ps-3">
                                            <h2>{{ $tUnpublishedPosts }}</h2>
                                        </div>
                                </div>
                            </div>        
                            <h5 class="card-title">Total Published Post:</span></h5>
                           <div class="d-flex align-items-center">
                                <div class="card-body">
                                        <div class="ps-3">
                                            <h2>{{ $tPublishedPosts }}</h2>
                                        </div>
                                </div>
                            </div> 
                       </div>
                   </div>
               </div>
           </div>

</x-app-layout>
