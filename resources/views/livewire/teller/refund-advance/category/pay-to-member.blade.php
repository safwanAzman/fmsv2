<div>
    <div class="mb-4">
        <x-card title="Members Information">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <x-select
                    label="Bank Members"
                    placeholder="-- PLEASE SELECT --"
                    wire:model="bank"
                >
                    @foreach ($refBank as $bank)
                        <x-select.option label="{{ $bank->description }}" value="{{ $bank->id }}" />
                    @endforeach
                </x-select>
                <x-input
                    label="Members Account No"
                    wire:model="payableAccountNo"
                />
            </div>

            <x-slot name="footer">
                <div class="flex items-center justify-end space-x-2">
                    <x-button
                        sm
                        icon="clipboard-check"
                        primary
                        label="Update Info"
                        wire:click="saveAdvanceInfo"
                    />
                </div>
            </x-slot>
        </x-card>
    </div>

    <div>
        <x-card title="Advance Refund Information">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <x-inputs.currency
                    class="!pl-[2.5rem]"
                    label="Amount"
                    prefix="RM"
                    thousands=","
                    decimal="."
                    wire:model="amount" />

                <x-datetime-picker
                    label="Transaction Date"
                    wire:model="transactionDate"
                    without-time=true
                    display-format="DD/MM/YYYY"
                    min="{{ $startDate }}"
                    max="{{ $endDate }}"
                />

                <x-input class="cursor-not-allowed"
                    label="Document No"
                    wire:model="documentNo"
                    disabled
                />

                <x-select
                    label="Bank Client"
                    placeholder="-- PLEASE SELECT --"
                    wire:model="bankIbt"
                >
                    @foreach ($refBankIbt as $bankIbt)
                        <x-select.option label="{{ $bankIbt->description }}" value="{{ $bankIbt->id }}" />
                    @endforeach
                </x-select>

            </div>

            <div class="grid grid-cols-1 gap-4 mt-4">
                <x-textarea label="Remarks" wire:model="remark" />
            </div>

            <x-slot name="footer">
                <div class="flex items-center justify-end space-x-2">
                    <a href="{{ route('teller.teller-refund-advance-list') }}" wire:navigate>
                        <x-button
                            sm
                            label="cancel"
                        />
                    </a>
                    @if($clientBankDetails)
                        <x-button
                            sm
                            icon="clipboard-check"
                            emerald
                            label="Pay"
                            wire:click="saveTransaction"
                        />
                    @endif
                </div>
            </x-slot>
        </x-card>
    </div>
</div>
