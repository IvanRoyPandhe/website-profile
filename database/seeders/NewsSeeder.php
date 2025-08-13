<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'New Clinical Training Partnership Announced',
                'excerpt' => 'Our nursing program has established a new partnership with Regional Medical Center to provide enhanced clinical training opportunities for students.',
                'content' => '<p>We are excited to announce a groundbreaking partnership between our Nursing Study Program and Regional Medical Center that will significantly enhance the clinical training experience for our students.</p>

<p>This collaboration will provide our nursing students with access to state-of-the-art medical facilities and the opportunity to work alongside experienced healthcare professionals in real-world clinical settings.</p>

<h2>Key Benefits of the Partnership</h2>
<ul>
<li>Extended clinical rotation hours in specialized departments</li>
<li>Mentorship programs with senior nurses and medical staff</li>
<li>Access to advanced medical equipment and technology</li>
<li>Opportunities for research collaboration</li>
</ul>

<p>The partnership officially begins next semester and will benefit all students in their clinical years. We believe this collaboration will better prepare our graduates for the challenges and opportunities in modern healthcare.</p>',
                'category' => 'academic',
                'tags' => ['partnership', 'clinical training', 'medical center'],
                'author' => 'Dr. Sarah Johnson',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(2),
                'views' => 245,
            ],
            [
                'title' => 'Student Achievement: National Nursing Competition Winners',
                'excerpt' => 'Three of our nursing students have won first place in the National Student Nursing Competition, showcasing excellence in clinical skills and knowledge.',
                'content' => '<p>We are proud to announce that three students from our Nursing Study Program have achieved first place in the prestigious National Student Nursing Competition held last month.</p>

<p>The competition, which attracted over 200 participants from nursing programs across the country, tested students on clinical skills, theoretical knowledge, and critical thinking abilities.</p>

<h2>Our Winning Students</h2>
<ul>
<li><strong>Maria Rodriguez</strong> - First place in Clinical Skills category</li>
<li><strong>James Chen</strong> - First place in Theoretical Knowledge category</li>
<li><strong>Emily Davis</strong> - First place in Critical Care Simulation</li>
</ul>

<p>This achievement reflects the high quality of education and training provided by our program and the dedication of our students and faculty.</p>',
                'category' => 'achievements',
                'tags' => ['students', 'competition', 'awards', 'excellence'],
                'author' => 'Prof. Michael Brown',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(5),
                'views' => 189,
            ],
            [
                'title' => 'Upcoming Health Fair: Community Outreach Program',
                'excerpt' => 'Join us for our annual community health fair where nursing students will provide free health screenings and education to local residents.',
                'content' => '<p>Our Nursing Study Program is organizing its annual Community Health Fair, scheduled for next month. This event represents our commitment to community service and provides valuable hands-on experience for our students.</p>

<p>The health fair will offer free health screenings, educational workshops, and wellness consultations to community members of all ages.</p>

<h2>Services Available</h2>
<ul>
<li>Blood pressure and glucose screenings</li>
<li>BMI assessments and nutritional counseling</li>
<li>Immunization information and referrals</li>
<li>Health education workshops</li>
<li>First aid demonstrations</li>
</ul>

<h2>Event Details</h2>
<p><strong>Date:</strong> Saturday, March 15th<br>
<strong>Time:</strong> 9:00 AM - 4:00 PM<br>
<strong>Location:</strong> Community Center, Main Street</p>

<p>All services are provided free of charge. We encourage community members to attend and take advantage of these valuable health resources.</p>',
                'category' => 'events',
                'tags' => ['community', 'health fair', 'outreach', 'free screening'],
                'author' => 'Dr. Lisa Anderson',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'views' => 156,
            ],
            [
                'title' => 'New Research Grant Awarded for Mental Health Study',
                'excerpt' => 'Our faculty has received a significant research grant to study the impact of mindfulness practices on nursing student stress and academic performance.',
                'content' => '<p>We are pleased to announce that our Nursing Study Program has been awarded a $150,000 research grant from the National Institute of Health to conduct a comprehensive study on mental health and wellness in nursing education.</p>

<p>The two-year study will examine the effectiveness of mindfulness-based interventions in reducing stress and improving academic performance among nursing students.</p>

<h2>Research Objectives</h2>
<ul>
<li>Assess current stress levels among nursing students</li>
<li>Implement mindfulness-based stress reduction programs</li>
<li>Measure impact on academic performance and retention</li>
<li>Develop best practices for student wellness programs</li>
</ul>

<p>This research will contribute to the growing body of knowledge about student wellness in healthcare education and may lead to improved support systems for nursing students nationwide.</p>',
                'category' => 'research',
                'tags' => ['research', 'grant', 'mental health', 'mindfulness'],
                'author' => 'Dr. Robert Wilson',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(7),
                'views' => 98,
            ],
            [
                'title' => 'Important: Updated Clinical Requirements for Fall Semester',
                'excerpt' => 'Please review the updated clinical requirements and documentation needed for the upcoming fall semester clinical rotations.',
                'content' => '<p>All nursing students preparing for clinical rotations in the fall semester must review and comply with the updated clinical requirements outlined below.</p>

<h2>Required Documentation</h2>
<ul>
<li>Current CPR certification (American Heart Association BLS)</li>
<li>Updated immunization records including COVID-19 vaccination</li>
<li>Annual tuberculosis screening</li>
<li>Background check clearance</li>
<li>Drug screening results</li>
</ul>

<h2>Important Deadlines</h2>
<p><strong>Documentation Submission:</strong> August 1st<br>
<strong>Clinical Orientation:</strong> August 15th<br>
<strong>First Clinical Day:</strong> August 22nd</p>

<p>Students who fail to submit required documentation by the deadline may not be permitted to participate in clinical rotations, which could delay graduation.</p>

<p>For questions or assistance with documentation, please contact the Clinical Coordinator at clinical@nursing.edu or visit the Student Services office.</p>',
                'category' => 'announcements',
                'tags' => ['clinical', 'requirements', 'documentation', 'deadline'],
                'author' => 'Clinical Coordinator',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'views' => 312,
            ],
            [
                'title' => 'Faculty Spotlight: Dr. Jennifer Martinez Receives Teaching Excellence Award',
                'excerpt' => 'Dr. Jennifer Martinez, Associate Professor of Nursing, has been recognized with the University Teaching Excellence Award for her innovative teaching methods.',
                'content' => '<p>We are delighted to announce that Dr. Jennifer Martinez, Associate Professor in our Nursing Study Program, has been awarded the prestigious University Teaching Excellence Award.</p>

<p>Dr. Martinez has been with our program for eight years and is known for her innovative teaching methods, particularly in the areas of pediatric nursing and simulation-based learning.</p>

<h2>Notable Achievements</h2>
<ul>
<li>Developed award-winning simulation scenarios for pediatric nursing</li>
<li>Published 15 peer-reviewed articles on nursing education</li>
<li>Mentored over 200 nursing students throughout her career</li>
<li>Led curriculum development for the pediatric nursing specialty track</li>
</ul>

<p>"Dr. Martinez exemplifies the dedication and innovation we strive for in nursing education," said Program Director Dr. Sarah Johnson. "Her commitment to student success and educational excellence makes her truly deserving of this recognition."</p>

<p>The award ceremony will take place during the annual Faculty Recognition Dinner next month.</p>',
                'category' => 'general',
                'tags' => ['faculty', 'award', 'teaching excellence', 'recognition'],
                'author' => 'Communications Office',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(4),
                'views' => 167,
            ],
        ];

        foreach ($newsData as $data) {
            $data['slug'] = Str::slug($data['title']);
            News::create($data);
        }
    }
}