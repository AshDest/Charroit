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
    public $updateuser=false,$user_reseach,$page_active,$lienlogo,$user_id;
    public $logo,$nom,$postnom,$email,$username,$password,$password_confirmation,$niveauacce_id;

    protected $rules = [
        'email' => 'email',
        'username' => 'required|min:4',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password|min:6',
        'logo' => 'image|max:8000',
    ];

    protected $messages = [
        'email.email' => 'Vous devez saisir un email valide.',
        'username.required' => 'Vous devez saisir votre nom d\'utilisateur.',
        'password.required' => 'Vous devez saisir le mot de passe.',
        'password.min' => 'Le mot de passe doit avoir au moins 4 caractères.',
        'password_confirmation.same' => 'Vous devez confirmer un mot de passe identique.',
        'logo.image'  => 'Le logo doit etre une image.',
        'logo.max' => 'Le logo ne peut pas avoir une taille superieure à 8MB.',
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
        $imageHash = $this->logo->hashName();
        $manager =  new ImageManager();
        $manager->make($this->logo->getRealPath())->resize(50, 50)->save('dist/images/userpicture/' . $imageHash);
        Us::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'avatar' => $imageHash,
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
      if ($this->lienlogo != null) {
          $path = public_path('dist/images/userpicture/' . $this->lienlogo);
          if (file_exists($path)) {
              unlink($path);
          }
      }
  }
    public function deleteuser($id){
        $userdel=Us::findOrFail($id);
         $this->lienlogo = $userdel->avatar;
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
         $this->lienlogo = $userdedit->avatar;
         $this->username=$userdedit->name;
         $this->email=$userdedit->email;
         $this->password=$userdedit->password;
     }
     public function updateuser(){
        //$this->validate();
        if ($this->logo != null) {
            try {
                $this->cleanupOldLogo();
                $imageHash = $this->logo->hashName();
                $manager =  new ImageManager();
                $manager->make($this->logo->getRealPath())->resize(50, 50)->save('dist/images/userpicture/' . $imageHash);
                Us::find($this->user_id)->fill([
                    'name' => $this->username,
                    'email' => $this->email,
                    'password' => $this->password,
                    'avatar' => $imageHash,
                ])->save();
                // Set Flash Message
                $this->dispatchBrowserEvent('ok', [
                    'message' => "Modification enregistrée!!"
                ]);
                //return redirect('add-cabinet');
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('fail', [
                    'message' => "Echec de modification!! " . $e->getMessage()
                ]);
                //return redirect('add-cabinet');
            }
        } else {
            try {
                // dd($this->denomination);
                Us::find($this->user_id)->fill([
                    'username' => $this->username,
                    'email' => $this->email,
                    'password' => $this->password,
                ])->save();
                // Set Flash Message
                $this->dispatchBrowserEvent('ok', [
                    'message' => "Modification enregistrée!!"
                ]);
                //return redirect('add-cabinet');
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('fail', [
                    'message' => "Echec de modification!! " . $e->getMessage()
                ]);
                // return redirect($this->page);
            }
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
