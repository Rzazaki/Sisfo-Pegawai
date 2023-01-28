<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class DataPegawaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'          => 'required|max:255',
            'unit'    => 'required',
            'jenis_kelamin' => 'required',
            'tgl_masuk'       => 'required',
            'status_pgw'   => 'required',
            'kategori_pgw'    => 'required',
            'tgl_angkat'    => 'required',
            'masker_hari'  => 'required',
            'masker_bulan' => 'required',
            'masker_bulan' => 'required',
            'jenjab'  => 'required',
            'pendidikan'    => 'required',
            'job'   => 'required',
            'posisi'    => 'required',
            'tgl_msk_unit'    => 'required',
            'organisasi'  => 'required',
            'agama' => 'required',
            'lokasi' => 'required',
            'email'         => 'required'
        ];
    }
   
}