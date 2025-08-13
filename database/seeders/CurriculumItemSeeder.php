<?php

namespace Database\Seeders;

use App\Models\CurriculumItem;
use Illuminate\Database\Seeder;

class CurriculumItemSeeder extends Seeder
{
    public function run(): void
    {
        $curriculumItems = [
            // Semester 1
            [
                'semester' => 'Semester 1',
                'course_code' => 'NURS 101',
                'course_name' => 'Foundations of Nursing',
                'description' => 'Introduction to nursing principles, basic patient care, and professional nursing practice.',
                'credits' => 4,
                'sort_order' => 1,
            ],
            [
                'semester' => 'Semester 1',
                'course_code' => 'ANAT 110',
                'course_name' => 'Human Anatomy & Physiology I',
                'description' => 'Study of human body systems including skeletal, muscular, and nervous systems.',
                'credits' => 4,
                'sort_order' => 2,
            ],
            [
                'semester' => 'Semester 1',
                'course_code' => 'CHEM 105',
                'course_name' => 'Chemistry for Health Sciences',
                'description' => 'Basic chemistry principles applied to healthcare and nursing practice.',
                'credits' => 3,
                'sort_order' => 3,
            ],
            [
                'semester' => 'Semester 1',
                'course_code' => 'PSYC 101',
                'course_name' => 'Introduction to Psychology',
                'description' => 'Basic psychological principles and their application to healthcare settings.',
                'credits' => 3,
                'sort_order' => 4,
            ],
            
            // Semester 2
            [
                'semester' => 'Semester 2',
                'course_code' => 'NURS 102',
                'course_name' => 'Health Assessment',
                'description' => 'Comprehensive health assessment techniques and documentation.',
                'credits' => 3,
                'sort_order' => 5,
            ],
            [
                'semester' => 'Semester 2',
                'course_code' => 'ANAT 111',
                'course_name' => 'Human Anatomy & Physiology II',
                'description' => 'Continuation of body systems study including cardiovascular, respiratory, and digestive systems.',
                'credits' => 4,
                'sort_order' => 6,
            ],
            [
                'semester' => 'Semester 2',
                'course_code' => 'MICR 201',
                'course_name' => 'Microbiology',
                'description' => 'Study of microorganisms and their role in health and disease.',
                'credits' => 4,
                'sort_order' => 7,
            ],
            [
                'semester' => 'Semester 2',
                'course_code' => 'NURS 103',
                'course_name' => 'Pharmacology I',
                'description' => 'Introduction to drug classifications, actions, and nursing implications.',
                'credits' => 3,
                'sort_order' => 8,
            ],
            
            // Semester 3
            [
                'semester' => 'Semester 3',
                'course_code' => 'NURS 201',
                'course_name' => 'Medical-Surgical Nursing I',
                'description' => 'Nursing care of adults with medical and surgical conditions.',
                'credits' => 5,
                'sort_order' => 9,
            ],
            [
                'semester' => 'Semester 3',
                'course_code' => 'NURS 202',
                'course_name' => 'Pharmacology II',
                'description' => 'Advanced pharmacology concepts and medication administration.',
                'credits' => 3,
                'sort_order' => 10,
            ],
            [
                'semester' => 'Semester 3',
                'course_code' => 'NURS 203',
                'course_name' => 'Pathophysiology',
                'description' => 'Study of disease processes and their impact on human health.',
                'credits' => 3,
                'sort_order' => 11,
            ],
            [
                'semester' => 'Semester 3',
                'course_code' => 'NURS 204',
                'course_name' => 'Clinical Practicum I',
                'description' => 'Supervised clinical experience in medical-surgical settings.',
                'credits' => 4,
                'sort_order' => 12,
            ],
            
            // Semester 4
            [
                'semester' => 'Semester 4',
                'course_code' => 'NURS 301',
                'course_name' => 'Medical-Surgical Nursing II',
                'description' => 'Advanced nursing care for complex medical and surgical conditions.',
                'credits' => 5,
                'sort_order' => 13,
            ],
            [
                'semester' => 'Semester 4',
                'course_code' => 'NURS 302',
                'course_name' => 'Maternal-Child Nursing',
                'description' => 'Nursing care during pregnancy, childbirth, and pediatric care.',
                'credits' => 4,
                'sort_order' => 14,
            ],
            [
                'semester' => 'Semester 4',
                'course_code' => 'NURS 303',
                'course_name' => 'Mental Health Nursing',
                'description' => 'Psychiatric nursing principles and mental health care.',
                'credits' => 3,
                'sort_order' => 15,
            ],
            [
                'semester' => 'Semester 4',
                'course_code' => 'NURS 304',
                'course_name' => 'Clinical Practicum II',
                'description' => 'Clinical experience in specialized nursing areas.',
                'credits' => 4,
                'sort_order' => 16,
            ],
        ];

        foreach ($curriculumItems as $item) {
            CurriculumItem::create($item);
        }
    }
}
