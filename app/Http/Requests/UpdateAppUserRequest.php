<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use App\Models\AppUser;

class UpdateAppUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $connection = 'app_connection';
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $user = AppUser::findOrFail($id);
        return [
            'full_name' => request() ? 'required|max:255'
                : 'required|max:255',
            'phone' => request() ? 'required|min:10|max:13|unique:' . $this->connection . '.users,phone,' . Auth::user()->id . ''
                : 'required||min:10|max:13|unique:' . $this->connection . '.users,phone,' . Auth::user()->id . '',
            'address' => request() ? 'required|max:255'
                : 'required|max:255',
            'profile_picture' =>  request() ? 'nullable'  : File::image()->max(5120),
        ];
    }
}
