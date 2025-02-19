<?php

namespace App\Livewire\Shield;

use Livewire\Component;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileForm extends Component

{
    public $profile;
    public $title;
    public $bio;
    public $expertise;
    public $education;
    public $contact_email;
    public $slug;

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'bio' => 'required|min:10',
        'expertise' => 'required',
        'education' => 'required',
        'contact_email' => 'required|email',
    ];

    public function mount(InstructorProfile $profile = null)
    {
        if ($profile && $profile->exists) {
            $this->authorize('update', $profile);
            $this->profile = $profile;
            $this->fill($profile->toArray());
        }
    }

    public function save()
    {
        $this->validate();

        if (!$this->profile) {
            $this->profile = new InstructorProfile();
            $this->profile->user_id = Auth::id();
        }

        $this->profile->fill([
            'title' => $this->title,
            'bio' => $this->bio,
            'expertise' => $this->expertise,
            'education' => $this->education,
            'contact_email' => $this->contact_email,
        ]);

        $this->profile->save();

        session()->flash('message', 'Profile saved successfully.');

        return redirect()->route('profile.show', $this->profile->slug);
    }

    public function render()
    {
        return view('livewire.shield.profile-form');
    }
}
