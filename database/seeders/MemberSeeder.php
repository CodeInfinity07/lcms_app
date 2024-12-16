<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Ahmed Khan', 'Hamza Ali', 'Abdullah Hassan', 'Muhammad Usman', 'Bilal Farooq',
            'Fahad Javed', 'Imran Riaz', 'Zaid Ahmed', 'Haris Khalid', 'Owais Malik',
            'Salman Rafiq', 'Daniyal Zafar', 'Arham Saeed', 'Ahsan Tariq', 'Taimoor Arif',
            'Zeeshan Shafiq', 'Adil Kamran', 'Mustafa Qadir', 'Shahid Nadeem', 'Zubair Noor',
            'Yasir Mahmood', 'Asad Qureshi', 'Waleed Rahman', 'Ehsan Gul', 'Noman Sheikh',
            'Rameez Akhtar', 'Rizwan Anwar', 'Moazzam Faheem', 'Kashif Baig', 'Umair Shabbir',
            'Saqib Raza', 'Adeel Nawaz', 'Sohail Iqbal', 'Ali Haider', 'Faizan Latif',
            'Junaid Abbas', 'Rehan Saeed', 'Muneeb Ahsan', 'Arslan Riaz', 'Zain Mustafa',
            'Shahroz Raza', 'Kamran Anwar', 'Irfan Malik', 'Wasim Abbas', 'Mazhar Qamar',
            'Sarmad Latif', 'Umar Farooq', 'Yaseen Shafi', 'Khalid Naveed', 'Danish Aslam',
            'Taha Javed', 'Sameer Malik', 'Usama Tariq', 'Haider Riaz', 'Hammad Farooq',
            'Arsalan Mahmood', 'Moiz Hashmi', 'Nabeel Akhtar', 'Jawad Ahmed', 'Saeed Hassan',
            'Raheel Asghar', 'Iftikhar Khan', 'Anees Qadir', 'Mansoor Raza', 'Shahzaib Tariq',
            'Tahir Ali', 'Mubashir Riaz', 'Naveed Qureshi', 'Shehryar Abbas', 'Imtiaz Latif',
            'Jibran Shahid', 'Omer Saeed', 'Sufyan Ahmed', 'Basit Arif', 'Azhar Noor',
            'Khalil Hassan', 'Saif Malik', 'Waqas Javed', 'Shayan Mustafa', 'Tauseef Abbas',
            'Akram Khan', 'Fawad Raza', 'Mazin Rahman', 'Sarfaraz Qamar', 'Kashan Tariq',
            'Rehman Sheikh', 'Kamal Hassan', 'Zohair Baig', 'Anas Shahid', 'Shahmeer Khalid',
            'Rizwan Haider', 'Zubair Ahmed', 'Ibrahim Hassan', 'Aamir Qadir', 'Faheem Abbas',
            'Hashim Malik', 'Jibril Aslam', 'Mehroz Farooq', 'Abrar Latif', 'Sohail Qadir'
        ];

        $numbers = [
            '03218484862', '03008437343', '03214791021', '03001234567', '03219980099',
            '03008437343', '03214791021', '03333031790', '03026111111', '03224009766',
            '03004123965', '03334839399', '03218408132', '03217522225', '03212275557',
            '03218403890', '03018403890', '03337891572', '03214143441', '03004408918',
            '03334408918', '03004869880', '03216042629', '03082224324', '03218422322',
            '03228515215', '03218451629', '03214432757', '03007094011', '03004184644',
            '03009434803', '03214436378', '03214388868', '03218440701', '03084121206',
            '03145047379', '03218414500', '03222444777', '03336992300', '03224800369',
            '03005004922', '03325005216', '03335172786', '03009454513', '03219251379',
            '03009251379', '03004101813', '03004821890', '03133500444', '03008540701',
            '03008501140', '03006000302', '03212233553', '03454001167', '03338954321',
            '03218494190', '03214528939', '03008437343', '03218437343', '03004254449',
            '03214604594', '03456466182', '03008435657', '03336349998', '03004012620',
            '03084444128', '03214012620', '03324682641', '03224130662', '03218497789',
            '03008497789', '03224285613', '03224880088', '03216777599', '03338869700',
            '03008498741', '03228897739', '03004232455', '03218437343', '03008272249',
            '03334312699', '03004012620', '03084444128', '03214012620', '03005237225',
            '03323657048', '03214473508', '03334248106', '03218413230', '03215014373',
            '03218496840', '03005394360', '03224231707', '03454194590', '03218475669'
        ];

        $users = [];

        for ($i = 0; $i < 100; $i++) {
            $name = $names[array_rand($names)];
            $number = $numbers[array_rand($numbers)];

            // Split name into parts
            $nameParts = explode(' ', $name);
            $firstName = strtolower($nameParts[0]);
            $lastName = strtolower($nameParts[1]);

            // Random separator for email
            $separators = ['.'];
            $separator = $separators[array_rand($separators)];

            // Generate email
            $email = $firstName . $separator . $lastName . rand(1, 99) . '@lt.com';

            $users[] = [
                'name' => $name,
                'email' => $email,
                'email_verified_at' => null,
                'password' => Hash::make($name . '_123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 3,
                'whatsapp_number' => $number,
                'club_id' => rand(1, 100),
            ];
        }

        DB::table('users')->insert($users);
    }
}
