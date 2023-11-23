<?php

use App\Livewire\Admin\Maintenance\State;
use App\Livewire\Admin\Maintenance\Glcode;
use App\Livewire\Admin\Maintenance\Gender;
use App\Livewire\Admin\Maintenance\Race;
use App\Livewire\Admin\Maintenance\Relationship;
use App\Livewire\Admin\Maintenance\Religion;
use App\Livewire\Admin\Maintenance\Title;
use App\Livewire\Admin\Maintenance\BranchID;
use App\Livewire\Admin\Maintenance\Education;
use App\Livewire\Admin\Maintenance\Country;
use App\Livewire\Admin\Maintenance\Marital;
use App\Livewire\Admin\Maintenance\FinancingRule;
use App\Livewire\Admin\Maintenance\AddType;
use App\Livewire\Admin\Maintenance\Banks;
use App\Livewire\Admin\Maintenance\CustStatus;
use App\Livewire\Admin\Maintenance\EmployerList;
use App\Livewire\Admin\Maintenance\GuarantorStatus;

use App\Livewire\Admin\Maintenance\DividendRules;
use App\Livewire\Admin\Maintenance\Languages;
use App\Livewire\Admin\Maintenance\IdentityType;
use App\Livewire\Admin\Maintenance\Income;
use App\Livewire\Admin\Maintenance\InstCodes;
use App\Livewire\Admin\Maintenance\InstModes;
use App\Livewire\Admin\Maintenance\JobStatus;
use App\Livewire\Admin\Maintenance\ThirdParty;
use App\Livewire\Admin\Maintenance\MemberStatus;
use App\Livewire\Admin\Maintenance\Position;
use App\Livewire\Admin\Maintenance\Occupation;
use App\Livewire\Admin\Maintenance\PaymentType;
use App\Livewire\Admin\Maintenance\Products;
use App\Livewire\Admin\Maintenance\Takaful;
use App\Livewire\Admin\Maintenance\VirtualAcc;

Route::get('state', State::class)->name('state');
Route::get('glcode', Glcode::class)->name('glcode');
Route::get('gender', Gender::class)->name('gender');
Route::get('race', Race::class)->name('race');
Route::get('relationship', Relationship::class)->name('relationship');
Route::get('religion', Religion::class)->name('religion');
Route::get('title', Title::class)->name('title');
Route::get('banks', Banks::class)->name('banks');
Route::get('education', Education::class)->name('education');
Route::get('country', Country::class)->name('country');
Route::get('marital', Marital::class)->name('marital');
Route::get('financing-rule', FinancingRule::class)->name('financing-rule');
Route::get('add-type', AddType::class)->name('add-type');
Route::get('languages', Languages::class)->name('languages');
Route::get('identity-type', IdentityType::class)->name('identity-type');
Route::get('third-party', ThirdParty::class)->name('third-party');
Route::get('member-status', MemberStatus::class)->name('member-status');
Route::get('branch-i-d', BranchID::class)->name('branch-i-d');
Route::get('dividend-rule', DividendRules::class)->name('dividend-rule');

Route::get('position', Position::class)->name('position');
Route::get('income', Income::class)->name('income');
Route::get('job-status', JobStatus::class)->name('job-status');
Route::get('occupation', Occupation::class)->name('occupation');
Route::get('occupation', Occupation::class)->name('occupation');
Route::get('takaful', Takaful::class)->name('takaful');
Route::get('guarantor-status', GuarantorStatus::class)->name('guarantor-status');
Route::get('inst-codes', InstCodes::class)->name('inst-codes');
Route::get('inst-modes', InstModes::class)->name('inst-modes');
Route::get('cust-status', CustStatus::class)->name('cust-status');
Route::get('employer-list', EmployerList::class)->name('employer-list');
Route::get('occupation', Occupation::class)->name('occupation');
Route::get('payment-type', PaymentType::class)->name('payment-type');
Route::get('products', Products::class)->name('products');
Route::get('virtual-acc', VirtualAcc::class)->name('virtual-acc');
