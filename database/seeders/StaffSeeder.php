<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        $staff = [
            [
                'name' => 'Dr. Sarah Johnson',
                'position' => 'Program Director & Professor',
                'bio' => 'Dr. Johnson has over 20 years of experience in nursing education and clinical practice. She specializes in critical care nursing and has published numerous research papers on patient safety and quality improvement.',
                'email' => 'sarah.johnson@nursing.edu',
                'phone' => '(555) 123-4501',
                'qualifications' => ['PhD in Nursing', 'MSN in Critical Care', 'BSN', 'RN'],
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Prof. Michael Chen',
                'position' => 'Associate Professor',
                'bio' => 'Professor Chen brings extensive experience in medical-surgical nursing and simulation-based education. He has been instrumental in developing our state-of-the-art simulation laboratory.',
                'email' => 'michael.chen@nursing.edu',
                'phone' => '(555) 123-4502',
                'qualifications' => ['MSN in Medical-Surgical Nursing', 'BSN', 'RN', 'Certified Simulation Educator'],
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Emily Rodriguez',
                'position' => 'Assistant Professor',
                'bio' => 'Dr. Rodriguez specializes in pediatric nursing and family health. She has worked in various pediatric settings and is passionate about teaching the next generation of pediatric nurses.',
                'email' => 'emily.rodriguez@nursing.edu',
                'phone' => '(555) 123-4503',
                'qualifications' => ['PhD in Nursing', 'MSN in Pediatric Nursing', 'BSN', 'RN', 'Pediatric Nurse Practitioner'],
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Prof. David Thompson',
                'position' => 'Clinical Coordinator',
                'bio' => 'Professor Thompson oversees all clinical placements and partnerships. With 15 years of emergency nursing experience, he ensures students receive quality clinical education.',
                'email' => 'david.thompson@nursing.edu',
                'phone' => '(555) 123-4504',
                'qualifications' => ['MSN in Emergency Nursing', 'BSN', 'RN', 'Certified Emergency Nurse'],
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Lisa Wang',
                'position' => 'Assistant Professor',
                'bio' => 'Dr. Wang focuses on mental health nursing and community health. She has extensive experience in psychiatric nursing and is actively involved in mental health advocacy.',
                'email' => 'lisa.wang@nursing.edu',
                'phone' => '(555) 123-4505',
                'qualifications' => ['PhD in Psychiatric Nursing', 'MSN in Mental Health', 'BSN', 'RN', 'Psychiatric Mental Health Nurse Practitioner'],
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($staff as $member) {
            Staff::create($member);
        }
    }
}
