<div>
    <x-container title="Virtual Account Maintenance" routeBackBtn="{{route('setting.setting-list')}}" titleBackBtn="setting list" disableBackBtn="true" >
        <div class="grid grid-cols-1">
            <x-card title="">
                <div class="flex items-center justify-between w-full mb-4">
                    <div class="flex items-center space-x-2">
                        <x-label label="Search : " />
                        <x-input 
                            type="text"
                            wire:model.live.debounce.1500ms="searchQuery" 
                            placeholder="Search"
                            class="uppercase "
                            /> 
                        <x-label label="List Until : " />
                        <x-input 
                            type="number"
                            wire:model.live.debounce.1500ms="paginated" 
                            placeholder="00"
                            min="0" 
                            />           
                    </div>   
                </div>

                <x-table.table loading="true" loadingtarget="paginated,searchQuery">
                    <x-slot name="thead">
                        <x-table.table-header class="text-left" value="NO." sort="" />
                        <x-table.table-header class="text-left" value="DESCRIPTION" sort="" />
                        <x-table.table-header class="text-left" value="VALUE" sort="" />
                        <x-table.table-header class="text-left" value="ACTION" sort="" />
                    </x-slot>
                    <x-slot name="tbody">
                        @forelse ($data as $key => $virtualAcc)
                        <tr>
                            @if($virtualAcc->COOLING_PERIOD)

                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{ $data->firstItem() + $key }}
                                </x-table.table-body>

                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    <p>COOLING PERIOD</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    <p>{{ $virtualAcc->COOLING_PERIOD }}</p>
                                </x-table.table-body>

                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    <x-button 
                                        wire:click="openUpdateModal('{{ $virtualAcc-> COOLING_PERIOD }}')"
                                        sm  
                                        icon="pencil-alt" 
                                        orange 
                                        label="Edit" 
                                    />
                                    <x-button 
                                        wire:click="delete('{{ $virtualAcc-> COOLING_PERIOD }}'')"
                                        sm  
                                        icon="trash" 
                                        red 
                                        label="Delete" 
                                    />
                                </x-table.table-body>

                                        <!-- modal -->
                                        <x-modal.card title="{{ $modalTitle }}" align="center" blur wire:model.defer="openModal" max-width="lg">

                                            <div class="grid gap-4 my-2 lg:grid-cols-2 ">
                                                <div class="tooltip buttom" title="Input should be a number, limited to 2 digits">
                                                    <x-input 
                                                    wire:model="valueCoolingPeriod" 
                                                    label="Value " 
                                                    value : {{ $virtualAcc->COOLING_PERIOD }}
                                                    placeholder=""  />
                                                </div>
                                            </div>


                                            <x-slot name="footer">
                                                <div class="flex justify-end">
                                                    <div class="flex gap-2">
                                                        <x-button secondary label="Cancel" x-on:click="close" />
                                                        <x-button primary label="Save" wire:click="{{ $modalMethod }}" />
                                                    </div>
                                                </div>
                                            </x-slot>
                                        </x-modal.card>
                                        <!-- end modal -->
                                @endif
                        </tr>

                        <tr>
                        @if($virtualAcc->THRESHOLD)

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                            {{ $data->firstItem() + $key + 1}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                            <p> THRESHOLD </p>
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                            <p>{{ $virtualAcc->THRESHOLD }}</p>
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                            <x-button 
                                wire:click="openUpdateModal('{{ $virtualAcc-> THRESHOLD }}')"
                                sm  
                                icon="pencil-alt" 
                                orange 
                                label="Edit" 
                            />
                            <x-button 
                                wire:click="delete('{{ $virtualAcc-> THRESHOLD }}'')"
                                sm  
                                icon="trash" 
                                red 
                                label="Delete" 
                            />
                        </x-table.table-body>

                                <!-- modal -->
                                <x-modal.card title="{{ $modalTitle }}" align="center" blur wire:model.defer="openModal" max-width="lg">

                                    <div class="grid gap-4 my-2 lg:grid-cols-2 ">
                                        <div class="tooltip buttom" title="Input should be a number, limited to 2 digits">
                                            <x-input 
                                            wire:model="valueThreshold" 
                                            label="Value " 
                                            value : {{ $virtualAcc->THRESHOLD }}
                                            placeholder=""  />
                                        </div>
                                    </div>


                                    <x-slot name="footer">
                                        <div class="flex justify-end">
                                            <div class="flex gap-2">
                                                <x-button secondary label="Cancel" x-on:click="close" />
                                                <x-button primary label="Save" wire:click="{{ $modalMethod }}" />
                                            </div>
                                        </div>
                                    </x-slot>
                                </x-modal.card>
                                <!-- end modal -->
                                @endif
                        </tr>
                        @empty
                        <x-table.table-body colspan="3" class="font-medium text-gray-900">
                            <p><center>No data</center></p>
                        </x-table.table-body>
                        @endforelse
                    </x-slot>
                </x-table.table>

                <x-slot name="footer">
                    <div>
                        {{ $data->links('livewire::pagination-links') }}
                    </div>
                </x-slot>
            </x-card>
        </div>
    </x-container>
</div>
