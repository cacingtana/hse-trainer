<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Employee extends Seeder
{
    public function run()
    {
        $data = [
            'id_emp' => 'EMP22090100001',
            'nik' => '02202123958393',
            'nip' => 'F0100001',
            'name_emp' => 'Daniel Alexander',
            'sex' => 1,
            'ref_department_id' => 1,
            'ref_position_id' => 1,
            'date_request' => null,
            'date_eye_test' => null,
            'date_write_test' => null,
            'date_practice_test' => null,
            'sim_sio' => 'BIIU-32499606000033',
            'license_number' => 'BIIU-32499606000033',
            'date_expired_request' => null,
            'date_expired_sim_sio' => null,
            'status_emp' => 1,
            'ref_coorporate_id' => 1,
            'ref_user_id' => 1,
        ];
        try {
            // Simple Queries
            $this->db->query('INSERT INTO employee (id_emp, nik, nip, name_emp, sex, ref_department_id, ref_position_id, date_request, date_eye_test, date_write_test, date_practice_test, sim_sio, license_number, date_expired_request, date_expired_sim_sio, status_emp, ref_coorporate_id, ref_user_id) VALUES(:id_emp:, :nik:, :nip:, :name_emp:, :sex:, :ref_department_id:, :ref_position_id:, :date_request:, :date_eye_test:, :date_write_test:, :date_practice_test:, :sim_sio:, :license_number:, :license_number:, :date_expired_request:, :date_expired_sim_sio:, :status_emp:, :ref_coorporate_id:, :ref_user_id:)', $data);

            // Using Query Builder
            $this->db->table('employee')->insert($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
