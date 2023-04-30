<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        \App\Models\Profile::create([
            'name' => 'Hanley Yunanda Saputra',
            'age' => '20',
            'birthday' => 'Malang, 25 June 2003',
            'address' => 'Argo Tunggal 19 Lawang',
            'status' => 'Single',
            'job' => 'Undergraduate Student',
            'email' => 'hanley.saputra@binus.ac.id',
            'phone' => '085156678285',
            'image' => 'profile-pictures/PP-Hanley.jpg'
        ]);

        \App\Models\Education::create([

                'year' => '2021-2025',
                'name' => 'Binus University',
                'desc' => 'Computer Science',
                'image' => 'education/logo-binus.png'
            ]);

        \App\Models\Education::create([
            'year' => '2018-2021',
            'name' => 'SMA Negeri 1 Lawang',
            'desc' => 'Senior High School',
            'image' => 'education/logo-smanela.png'
        ]);

        \App\Models\Education::create([
            'year' => '2015-2018',
            'name' => 'SMP Kristen Pelita Kasih',
            'desc' => 'Junior High School',
            'image' => 'education/logo-pk.png'
        ]);

        \App\Models\Education::create([
            'year' => '2009-2015',
            'name' => 'SD Kristen Pelita Kasih',
            'desc' => 'Elementary School',
            'image' => 'education/logo-pk.png'
        ]);

        \App\Models\Skill::create([
            'name' => 'C Language',
            'value' => 95,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Java Language',
            'value' => 80,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'HTML',
            'value' => 85,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'CSS',
            'value' => 80,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Bootstrap',
            'value' => 89,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'MySql Database',
            'value' => 86,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Laravel',
            'value' => 93,
            'type' => 'Hardskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Problem Solving',
            'value' => 91,
            'type' => 'Softskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Time Management',
            'value' => 95,
            'type' => 'Softskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Leadership',
            'value' => 85,
            'type' => 'Softskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Teamwork',
            'value' => 88,
            'type' => 'Softskill'
        ]);

        \App\Models\Skill::create([
            'name' => 'Public Speaking',
            'value' => 80,
            'type' => 'Softskill'
        ]);

        \App\Models\Experience::create([
            'title' => 'Freshmen Leader',
            'period' => 'July 2022-September 2022',
            'desc' => '<li>Maintaining the smooth running of the First Year Program (FYP) activities which took place before semester 1 started.</li><li>Responsible for and leading Freshmen during FYP activities.</li><li>Guiding and assisting Freshmen while participating in FYP activities.</li><li>Skills: Critical Thinking, Problem Solving, Public Speaking, Leadership</li>',
            'type' => 'Binus University'
        ]);

        \App\Models\Experience::create([
            'title' => 'Freshmen Partner',
            'period' => 'September 2022-Present',
            'desc' => '<li>Maintain the smooth implementation of Freshmen mentoring activities in semester 1 and semester 2.</li><li>Responsible for assisting Freshmen during their first year.</li><li>Helping and guiding Freshmen in the first year of college.</li><li>Skills: Adaptation, Critical Thinking, Management, Public Relations</li>',
            'type' => 'Binus University'
        ]);

        \App\Models\Experience::create([
            'title' => 'Activist of Resource Development Division',
            'period' => 'February 2022 - January 2023',
            'desc' => '<li>In charge of organizing activities related to the development of the ability of members of the organization</li><li>Skills: Organizational Development, Management, Public Relations, Public Speaking, Time Management, Leadership</li>',
            'type' => 'HIMTI'
        ]);

        \App\Models\Experience::create([
            'title' => 'Committee Digifest 2022',
            'period' => 'May 2022 - June 2022',
            'desc' => '<li>Provide event equipment</li><li>Borrow the necessary space and equipment</li><li>Borrowed zoom for streaming seminar needs</li><li>Become MC for the event</li><li>Skills: Event Management, Event Planning, Teamwork, Public Speaking</li>',
            'type' => 'HIMTI'
        ]);

        \App\Models\Message::create([
            'email' => 'bryan.zelig@gmail.com',
            'name' => 'Bryan Zelig',
            'subject' => 'Haloo',
            'message' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam quibusdam repudiandae dolorem vero dolore, rerum dolores doloribus recusandae voluptatum ullam incidunt tenetur natus dignissimos error nobis, autem quaerat. Voluptatum nihil nobis praesentium recusandae animi quae itaque laudantium possimus natus! Quisquam, voluptates exercitationem non excepturi soluta nisi error eligendi quas iste et esse reprehenderit alias nihil! Voluptas omnis et illum rem, nobis quas, hic quae nostrum quos, commodi inventore eveniet labore incidunt doloribus nemo ipsum. Mollitia repudiandae, distinctio saepe, laborum facere a nam aperiam, nihil officiis odit maxime laudantium ratione libero numquam fugit unde nemo reiciendis eligendi modi dolores commodi culpa eius quibusdam expedita? Dolor rerum repellat non pariatur ex fuga, quibusdam qui a velit accusamus culpa dolore dignissimos enim suscipit aut vero sapiente modi voluptatibus totam ducimus labore.'
        ]);

        \App\Models\Message::create([
            'email' => 'gavra.tsany@gmail.com',
            'name' => 'Gavra Tsany Atmaja',
            'subject' => 'Haii',
            'message' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam quibusdam repudiandae dolorem vero dolore, rerum dolores doloribus recusandae voluptatum ullam incidunt tenetur natus dignissimos error nobis, autem quaerat. Officiis esse, ipsum fugit est animi asperiores temporibus inventore voluptates non dolorum sint minus pariatur expedita dicta molestias ex vel ratione magnam tempore unde quis delectus nulla? Eaque earum quis aut at aliquam delectus rerum commodi harum fugit laborum provident, modi pariatur odit reprehenderit iusto vero aspernatur deleniti, quaerat ab iure consequuntur ad blanditiis. Culpa veritatis asperiores, cumque minus officia magnam. Velit sint accusamus laboriosam in voluptatibus placeat dolorem numquam eveniet. Mollitia repudiandae, distinctio saepe, laborum facere a nam aperiam, nihil officiis odit maxime laudantium ratione libero numquam fugit unde nemo reiciendis eligendi modi dolores commodi culpa eius quibusdam expedita?'
        ]);
    }
}
// <li></li>
// Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam quibusdam repudiandae dolorem vero dolore, rerum dolores doloribus recusandae voluptatum ullam incidunt tenetur natus dignissimos error nobis, autem quaerat. Voluptatum nihil nobis praesentium recusandae animi quae itaque laudantium possimus natus! Quisquam, voluptates exercitationem non excepturi soluta nisi error eligendi quas iste et esse reprehenderit alias nihil! Voluptas omnis et illum rem, nobis quas, hic quae nostrum quos, commodi inventore eveniet labore incidunt doloribus nemo ipsum. Mollitia repudiandae, distinctio saepe, laborum facere a nam aperiam, nihil officiis odit maxime laudantium ratione libero numquam fugit unde nemo reiciendis eligendi modi dolores commodi culpa eius quibusdam expedita? Dolor rerum repellat non pariatur ex fuga, quibusdam qui a velit accusamus culpa dolore dignissimos enim suscipit aut vero sapiente modi voluptatibus totam ducimus labore. Officiis esse, ipsum fugit est animi asperiores temporibus inventore voluptates non dolorum sint minus pariatur expedita dicta molestias ex vel ratione magnam tempore unde quis delectus nulla? Eaque earum quis aut at aliquam delectus rerum commodi harum fugit laborum provident, modi pariatur odit reprehenderit iusto vero aspernatur deleniti, quaerat ab iure consequuntur ad blanditiis. Culpa veritatis asperiores, cumque minus officia magnam. Velit sint accusamus laboriosam in voluptatibus placeat dolorem numquam eveniet.
