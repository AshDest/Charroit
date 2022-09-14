<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use App\Models\User as Us;
use Illuminate\Support\Facades\Auth;

class Users extends Component
{
    use WithFileUploads;
    public $updateuser=false,$user_reseach,$page_active,$user_id;
    public $nom,$postnom,$email,$username,$password,$password_confirmation,$niveauacce_id;

    protected $rules = [
        'email' => 'email',
        'username' => 'required|min:4',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password|min:6',
    ];

    protected $messages = [
        'email.email' => 'Vous devez saisir un email valide.',
        'username.required' => 'Vous devez saisir votre nom d\'utilisateur.',
        'password.required' => 'Vous devez saisir le mot de passe.',
        'password.min' => 'Le mot de passe doit avoir au moins 4 caractères.',
        'password_confirmation.same' => 'Vous devez confirmer un mot de passe identique.',
    ];

    public function resetField(){
        $this->email = '';
        $this->username = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveuser(){

        $this->validate();
        Us::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->dispatchBrowserEvent('alertsuccess', [
            'message'=>'user enregistré.',
        ]);
        // $this->emit('refreshList');
       $this->resetField();
        //return redirect()->to('/add-cabinet');
    }
    //unlink or delete file
  public function cleanupOldLogo()
  {

  }
    public function deleteuser($id){
        $userdel=Us::findOrFail($id);
        $userdel=Us::whereId($id)->delete();
        if($userdel){
             $this->dispatchBrowserEvent('ok', [
                 'message'=>'Utilisateur Suprimé.',
             ]);
             $this->cleanupOldLogo();
        }
     }
     public function edit($id){
        $this->updateuser = true;
        $userdedit=Us::findOrFail($id);
        $this->user_id=$userdedit->id;
         $this->username=$userdedit->name;
         $this->email=$userdedit->email;
         $this->password=$userdedit->password;
     }
     public function updateuser(){
        //$this->validate();
            try {
                Us::find($this->user_id)->fill([
                    'name' => $this->username,
                    'email' => $this->email,
                    'password' => $this->password,
                ])->save();
                // Set Flash Message
                $this->dispatchBrowserEvent('alertsuccess', [
                    'message' => "Modification enregistrée!!"
                ]);
                // return redirect('users');
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('fail', [
                    'message' => "Echec de modification!! " . $e->getMessage()
                ]);
                //return redirect('add-cabinet');
            }
    }
    public function resetphoto(){
        $this->logo=null;
    }
    public function render()
    {
        return view('livewire.users', [
            'users' => Us::where('name','LIKE','%' . $this->user_reseach . '%')
            ->orWhere( 'id','LIKE','%' . $this->user_reseach . '%')
            ->orderBy('id', 'ASC')->paginate($this->page_active),
        ]);
    }
}
