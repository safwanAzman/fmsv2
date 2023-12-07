<?php

namespace App\Livewire\Cif\Info\Details;

use App\Models\Cif\CifCustomer;
use App\Models\Fms\Membership;
use App\Models\Ref\RefCountry;
use App\Models\Ref\RefGender;
use App\Models\Ref\RefIdentityType;
use App\Models\Ref\RefLanguage;
use App\Models\Ref\RefMarital;
use App\Models\Ref\RefRace;
use App\Models\Ref\RefTitle;
use Livewire\Component;

class Information extends Component
{
    public $uuid, $title_id, $name, $identity_type_id, $identity_no, $email, $email2, $phone, $resident_phone, $gender_id, $birth_date, $race_id, $bumi, $language_id, $marital_id, $country_id, $monthly_contribution, $year_tabung_khirat, $amt_tabung_khirat;

    public function mount()
    {
        $customerInfo = CifCustomer::where('uuid', $this->uuid)->first();
        $membershipInfo = Membership::where('cif_id', $customerInfo->id)->first();
        $title = RefTitle::select('description')->where('id', $customerInfo->title_id)->first();
        $identityType = RefIdentityType::select('description')->where('id', $customerInfo->identity_type_id)->first();
        $gender = RefGender::select('description')->where('id', $customerInfo->gender_id)->first();
        $race = RefRace::select('description')->where('id', $customerInfo->race_id)->first();
        $language = RefLanguage::select('description')->where('id', $customerInfo->language_id)->first();
        $marital = RefMarital::select('description')->where('id', $customerInfo->marital_id)->first();
        $country = RefCountry::select('description')->where('id', $customerInfo->country_id)->first();

        $this->title_id = $title->description ?? '';
        $this->name = $customerInfo->name;
        $this->identity_type_id = $identityType->description ?? '';
        $this->identity_no = $customerInfo->identity_no;
        $this->email = $customerInfo->email;
        $this->email2 = $customerInfo->email2;
        $this->phone = $customerInfo->phone;
        $this->resident_phone = $customerInfo->resident_phone;
        $this->gender_id = $gender->description ?? '';
        $this->birth_date = $customerInfo->birth_date;
        $this->race_id = $race->description ?? '';
        $this->bumi = (($customerInfo->race_id != 6 || $customerInfo->race_id != 9 || $customerInfo->race_id != 14) ? 'Yes' : 'No');
        $this->language_id = $language->description;
        $this->marital_id = $marital->description ?? '';
        $this->country_id = $country->description ?? '';
        $this->monthly_contribution = $membershipInfo->monthly_contribution;
        $this->year_tabung_khirat = $membershipInfo->year_tabung_khirat;
        $this->amt_tabung_khirat = $membershipInfo->amt_tabung_khirat;
    }

    public function render()
    {
        return view('livewire.cif.info.details.information');
    }
}
