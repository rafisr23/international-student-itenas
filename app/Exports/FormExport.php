<?php

namespace App\Exports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;

class FormExport implements ShouldAutoSize, WithHeadings, FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     $forms = Form::with(['student', 'user', 'scholarship', 'studyProgram'])->where('status', 'Form Review')->get();
    //     // convert to array
    //     // $forms = $forms->toArray();
    //     return $forms;
    // }

    public function query()
    {
        return Form::query()->join('students', 'forms.student_id', '=', 'students.id')->join('scholarships', 'forms.scholarship_id', '=', 'scholarships.id')->join('users', 'students.user_id', '=', 'users.id')->join('study_programs', 'forms.study_program_id', '=', 'study_programs.id')->join('faculties', 'study_programs.faculty_id', '=', 'faculties.id')->select('forms.reg_number', 'users.name', 'students.gender', 'students.phone_number', 'students.address', 'students.city', 'students.country', 'students.postal_code', 'forms.high_school', 'forms.grad_date', 'forms.school_address', 'forms.school_city', 'forms.school_country', 'forms.school_postal_code', 'study_programs.name as study_program', 'faculties.name as faculty', 'scholarships.name as scholarship')->where('forms.status', 'Form Review')->orderBy('users.name', 'asc');
    }

    public function headings(): array
    {
        return [
            'Nomor Registrasi',
            'Nama',
            'Jenis Kelamin',
            'Nomer HP',
            'Alamat Pendaftar',
            'Kota',
            'Negara',
            'Kode Pos',
            'Asal Sekolah',
            'Tanggal Lulus',
            'Alamat Sekolah',
            'Kota Sekolah',
            'Negara Sekolah',
            'Kode Pos Sekolah',
            'Program Studi',
            'Fakultas',
            'Beasiswa'
        ];
    }
}